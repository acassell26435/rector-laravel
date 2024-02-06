<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment_user extends Model
{
    protected $fillable = [
        'user_id',
        'appointment_id',
        'discount',
        'advance',
        'payment_mode_id',
        'remark',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function payment_mode()
    {
        return $this->belongsTo(Payment_mode::class);
    }
}
