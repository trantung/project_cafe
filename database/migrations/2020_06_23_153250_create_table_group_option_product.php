<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGroupOptionProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_option_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('group_option_id');
            $table->integer('type')->comment('kiểu hiển thị: 1: kéo, 2: tag, 3:checkbox');
            $table->integer('type_show')->comment('kiểu màu sắc, kích thước, etc: 1 hoặc 2');
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
        Schema::dropIfExists('group_option_product');
    }
}
