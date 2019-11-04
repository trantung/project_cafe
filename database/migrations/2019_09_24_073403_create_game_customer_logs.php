<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameCustomerLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_customer_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id');
            $table->integer('customer_id');
            //win or lose. win = 1, lose = 0
            $table->integer('winner_type');
            //win-->point +, lose-->point -. Vi du: win point la 50, lose thi point la -50
            $table->string('point');
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
        Schema::dropIfExists('game_customer_logs');
    }
}
