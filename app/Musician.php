<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    public function user() {

        return $this->belongsTo('App\User','user_id');
    }

    public function musicantags () {
        return $this->hasMany('App\MusicianTag');
    }

    public function bookings () {
        return $this->hasMany('App\Booking');
    }

    public function pings () {
        return $this->hasMany('App\Ping');
    }
}

