<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicianTag extends Model
{


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'musician_id', 'tag_id',
    ];

    public function tags() {

        return $this->belongsTo('App\Tag');
    }

    public function musician() {

        return $this->belongsTo('App\Musician');
    }
}
