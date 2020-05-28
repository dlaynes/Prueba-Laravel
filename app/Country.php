<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    function players(){
        return $this->hasMany('App\Player');
    }

    function clubs(){
        return $this->hasMany('App\Club');
    }

    function cups(){
        return $this->hasMany('App\Cup');
    }

}
