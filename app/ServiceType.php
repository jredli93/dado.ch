<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    public function serviceGroup()
    {
        return $this->belongsTo('App\ServiceGroup');
    }
}
