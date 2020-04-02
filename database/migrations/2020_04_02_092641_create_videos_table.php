<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('image_small');
            $table->string('image_big');
            $table->string('url');
            $table->string('comment');
            $table->string('desc');
            $table->dateTime('DateCreated');
            $table->datetime('DisplayDate');
            $table->integer('user_id');
            $table->integer('shoolblock_id');
            $table->integer('class_id');
            $table->integer('schoolSubject_id');
            $table->integer('teacher_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
