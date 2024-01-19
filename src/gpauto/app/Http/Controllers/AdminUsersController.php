<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersCreateRequest;
use App\Http\Requests\UsersUpdateRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'A') {

            $users = User::where('id', '!=', Auth::id())->get();

            return view('admin.users.index', ['users' => $users]);

        }

        if (Auth::user()->role == 'S') {

            return redirect('/admin');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->role == 'A') {

            return view('admin.users.create');

        }

        if (Auth::user()->role == 'S') {

            return redirect('/admin');

        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $usersCreateRequest
     * @return \Illuminate\Http\Response
     */
    public function store(UsersCreateRequest $usersCreateRequest)
    {
        //
        $input = $usersCreateRequest->all();

        if ($file = $usersCreateRequest->file('photo')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images/users', $name);

            $input['photo'] = $name;

        }

        $input['password'] = bcrypt($usersCreateRequest->password);

        $input['dob'] = date('Y/m/d', strtotime($usersCreateRequest->dob));

        User::create($input);

        return redirect('admin/users')->with('added', 'User has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);

        return view('admin.users.edit', ['user' => $user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $usersUpdateRequest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersUpdateRequest $usersUpdateRequest, $id)
    {

        $user = User::findOrFail($id);

        $input = $usersUpdateRequest->password == '' ? $usersUpdateRequest->except('password') : $usersUpdateRequest->all();

        if ($file = $usersUpdateRequest->file('photo')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images/users', $name);

            if ($user->photo) {

                unlink(public_path() . '/images/users/' . $user->photo);

            }

            $input['photo'] = $name;

        }

        if (! $usersUpdateRequest->password == '') {

            $input['password'] = bcrypt($usersUpdateRequest->password);

        }
        $input['dob'] = date('Y/m/d', strtotime($usersUpdateRequest->dob));

        $user->update($input);

        return redirect('admin/users')->with('updated', 'User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::findOrFail($id);

        if ($user->photo) {

            unlink(public_path() . '/images/users/' . $user->photo);

        }

        $user->delete();

        Session::flash('delete_user', 'User has been deleted');

        return redirect('admin/users')->with('deleted', 'User has been deleted');

    }
}
