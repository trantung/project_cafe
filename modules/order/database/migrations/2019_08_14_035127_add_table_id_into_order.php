<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableIdIntoOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('table_id')->nullable()->after('id');
        });
        Schema::table('order_product', function (Blueprint $table) {
            $table->integer('product_price')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'table_id')) {
                $table->dropColumn('table_id');
            }
        });
        Schema::table('order_product', function (Blueprint $table) {
            if (Schema::hasColumn('order_product', 'product_price')) {
                $table->dropColumn('product_price');
            }
        });
        
    }
}
