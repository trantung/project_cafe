<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location_lat')->nullable();
            $table->string('location_long')->nullable();
            $table->string('address')->nullable();
            $table->string('favorite')->nullable();
            $table->string('voucher_code')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('order_id')->nullable();
            $table->integer('customer_friend_id')->nullable();
            $table->integer('using_at')->nullable();
            $table->integer('customer_option_chosse_id')->nullable();
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
        Schema::dropIfExists('customer_address');
    }
}
