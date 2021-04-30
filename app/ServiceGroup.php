<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceGroup extends Model
{
    public function serviceTypes()
    {
        return $this->hasMany('App\ServiceType');
    }
}
