<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'img',
        'user_id',
        'date',
        'dtl',
    ];
    protected $casts = ['date' => 'datetime'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
