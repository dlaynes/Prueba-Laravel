<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'last_name', 'matches', 'goals', 'country_id'];

    public function clubs()
    {
        return $this->belongsToMany('App\Club', 'club_player','player_id', 'club_id');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }
}
