<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicianTag extends Model
{
    public function tags() {

        return $this->belongsTo('App\Tag');
    }

    public function musician() {

        return $this->belongsTo('App\Musician');
    }
}
