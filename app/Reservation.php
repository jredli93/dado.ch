<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

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

    public function serviceType()
    {
        return $this->belongsTo('App\ServiceType');
    }
}
