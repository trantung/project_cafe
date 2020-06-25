<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerFriend extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_friends', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('customer_phone');
            $table->integer('friend_id');
            $table->string('friend_name');
            $table->string('friend_phone');
            $table->string('avatar');
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
        Schema::dropIfExists('customer_friends');
    }
}
