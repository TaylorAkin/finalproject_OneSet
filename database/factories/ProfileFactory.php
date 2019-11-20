<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory(Email::class)->create()->id;
        },
        'bio' => $faker->paragraph(),
        'contact_info' => 'user_email'
        


    ];
});
