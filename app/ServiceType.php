<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceType extends Model
{
    use HasFactory;

    public function serviceGroup()
    {
        return $this->belongsTo('App\ServiceGroup');
    }
}
