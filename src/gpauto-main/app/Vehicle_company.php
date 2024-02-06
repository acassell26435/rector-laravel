<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle_company extends Model
{
    protected $fillable = [
        'vehicle_company',
    ];

    public function vehicle_modal()
    {
        return $this->hasOne(Vehicle_modal::class);
    }

    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}
