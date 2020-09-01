<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocmaiLessonUserLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocmai_lesson_user_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->nullable();
            $table->integer('lesson_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('hocmai_user_id')->nullable();
            $table->string('first_time')->nullable();
            $table->string('last_time')->nullable();
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
        Schema::dropIfExists('hocmai_lesson_user_log');
    }
}
