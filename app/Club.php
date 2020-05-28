<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function players()
    {
        return $this->belongsToMany('App\Player', 'club_player','club_id', 'player_id');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }

}
