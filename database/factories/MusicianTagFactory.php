<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MusicianTag;
use Faker\Generator as Faker;
use Illuminate\Foundation\Auth\User;

$factory->define(MusicianTag::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory(User::class)->create()->id;
        },
    ];
});
