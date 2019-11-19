<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ping extends Model
{
    public function venue() {

        return $this->belongsTo('App\Venue');
    }

    public function musician() {

        return $this->belongsTo('App\Musician');
    }


}
