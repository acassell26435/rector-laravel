<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Socialite;

class AuthController extends Controller
{
    /**
     * Redirect the user to the OAuth Provider.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {

        try {
            $user = Socialite::driver($provider)->user();

        } catch (Exception $e) {
            $user = Socialite::driver($provider)->stateless()->user();
        }

        $authUser = $this->findOrCreateUser($user, $provider);

        Auth::login($authUser, true);

        return redirect()->intended('/');
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     *
     * @param    $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        if ($user->email == null) {
            $user->email = $user->id . '@facebook.com';
        }
        $authUser = User::where('email', $user->email)->first();
        $providerField = "{$provider}_id";
        if ($authUser) {
            if ($authUser->{$providerField} == $user->id) {
                $authUser->save();

                return $authUser;
            } else {
                $authUser->{$providerField} = $user->id;
                $authUser->save();

                return $authUser;
            }
        }
        $auth_user = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'status' => 1,
            $providerField => $user->id,
        ]);

        return $auth_user;
    }
}
