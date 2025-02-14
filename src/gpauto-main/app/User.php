<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'photo', 'sex', 'dob', 'mobile', 'phone', 'address', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function team_task()
    {
        return $this->hasOne(Team_task::class);
    }

    public function blogs()
    {
        return $this->hasOne(Blog::class);
    }

    public function appointment()
    {
        return $this->belongsToMany(Appointment::class, 'appointment_users');
    }

    public function is_admin()
    {

        if (Auth::check()) {

            $user = Auth::user();

            if ($user->role == 'A') {

                return true;

            }

            return false;

        }

        return false;
    }

    public function is_common()
    {

        if (Auth::check()) {

            $user = Auth::user();

            if ($user->role == 'S' or $user->role == 'A') {

                return true;

            }

            return false;

        }

        return false;
    }
}
