<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function musiciantags () {
        return $this->hasMany('App\MusicianTag');
    }
}
