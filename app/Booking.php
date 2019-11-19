<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function musician() {

        return $this->belongsTo('App\Musician');
    }

    public function event() {

        return $this->belongsTo('App\Event');
    }
}
