<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'user_id',
    ];

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

