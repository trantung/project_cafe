<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocmaiUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocmai_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hocmai_user_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('class_id')->nullable();
            $table->string('first_login')->nullable();
            $table->string('last_login')->nullable();
            $table->string('phone')->nullable();
            $table->string('birthday')->nullable();
            $table->string('register_time')->nullable();
            $table->integer('number_open_app')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hocmai_users');
    }
}
