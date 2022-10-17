<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceGroup extends Model
{
    use HasFactory;

    public function serviceTypes()
    {
        return $this->hasMany('App\ServiceType');
    }
}
