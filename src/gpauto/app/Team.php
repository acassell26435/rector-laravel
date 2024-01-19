<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password', 'photo', 'sex', 'dob', 'mobile', 'phone', 'address', 'join_date', 'status', 'post',
    ];

    public function social_teams()
    {
        return $this->hasOne(Social_team::class);
    }

    public function team_task()
    {
        return $this->hasOne(Team_task::class);
    }
}
