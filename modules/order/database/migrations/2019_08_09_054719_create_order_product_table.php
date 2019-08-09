<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_code')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('status')->nullable();
            $table->integer('order_id')->nullable();
            $table->integer('size_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('total_price')->nullable();
            $table->string('promotion_price')->nullable();
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
        Schema::dropIfExists('order_product');
    }
}
