<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public function user() {

        return $this->belongsTo('App\User','user_id');
    }

    public function events () {
        return $this->hasMany('App\Event');
    }
    public function pings () {
        return $this->hasMany('App\Ping');
    }
}

