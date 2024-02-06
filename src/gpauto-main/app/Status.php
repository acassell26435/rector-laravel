<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'status',
    ];

    public function team_task()
    {
        return $this->hasOne(Team_task::class);
    }

    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}
