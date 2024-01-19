<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Washing_plan extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function washing_include()
    {
        return $this->hasOne(Washing_plan_include::class);
    }

    public function washing_price()
    {
        return $this->hasOne(Washing_price::class);
    }

    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}
