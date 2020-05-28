<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    public function country(){
        return $this->belongsTo('App\Country');
    }
}
