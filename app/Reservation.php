<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'service_type_id',
        'name',
        'email',
        'phone',
        'comment',
        'date',
        'time',
        'status'
    ];
}
