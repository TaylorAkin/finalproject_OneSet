<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Tag::class)->create();

        factory(App\Tag::class)->create([
            'name' => 'acoustic'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'electric'
        ]);
        
        factory(App\Tag::class)->create([
            'name' => 'bass'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'stringbass'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'drumset'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'vocal'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'altosax'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'tenorsax'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'sax'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'trumpet'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'bugle'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'trombone'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'jazz'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'blues'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'alternative'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'rock'
        ]);

        factory(App\Tag::class)->create([
            'name' => 'classical'
        ]);




        }
    }


    
       
    
