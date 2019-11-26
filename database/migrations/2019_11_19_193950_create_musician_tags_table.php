<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicianTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musician_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('musician_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();
            $table->foreign('musician_id')->references('id')->on('musicians');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musician_tags');
    }
}
