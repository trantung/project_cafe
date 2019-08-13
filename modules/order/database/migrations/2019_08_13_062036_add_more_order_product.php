<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreOrderProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_product', function (Blueprint $table) {
            $table->text('table_qr_code')->nullable()->after('id');
            $table->integer('table_id')->nullable()->default(1)->after('id');
            $table->integer('level_id')->nullable()->after('id');
            $table->integer('total_price_topping')->nullable()->after('id');
            $table->integer('ship_id')->nullable()->after('id');
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->text('table_qr_code')->nullable()->after('id');
            $table->integer('created_by')->nullable()->default(1)->after('id');
            $table->integer('updated_by')->nullable()->after('id');
            $table->integer('order_type_id')->nullable()->after('id');
            $table->integer('ship_price')->nullable()->after('id');
            $table->integer('ship_id')->nullable()->after('id');
            $table->integer('total_product_price')->nullable()->after('id');
            $table->integer('total_topping_price')->nullable()->after('id');
            $table->integer('level_id')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_product', function (Blueprint $table) {
            if (Schema::hasColumn('order_product', 'table_qr_code')) {
                $table->dropColumn('table_qr_code');
            }
            if (Schema::hasColumn('order_product', 'table_id')) {
                $table->dropColumn('table_id');
            }
            if (Schema::hasColumn('order_product', 'level_id')) {
                $table->dropColumn('level_id');
            }
            if (Schema::hasColumn('order_product', 'total_price_topping')) {
                $table->dropColumn('total_price_topping');
            }
            if (Schema::hasColumn('order_product', 'ship_id')) {
                $table->dropColumn('ship_id');
            }
            
        });
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'table_qr_code')) {
                $table->dropColumn('table_qr_code');
            }
            if (Schema::hasColumn('orders', 'created_by')) {
                $table->dropColumn('created_by');
            }
            if (Schema::hasColumn('orders', 'updated_by')) {
                $table->dropColumn('updated_by');
            }
            if (Schema::hasColumn('orders', 'order_type_id')) {
                $table->dropColumn('order_type_id');
            }
            if (Schema::hasColumn('orders', 'ship_id')) {
                $table->dropColumn('ship_id');
            }
            if (Schema::hasColumn('orders', 'ship_price')) {
                $table->dropColumn('ship_price');
            }
            if (Schema::hasColumn('orders', 'total_product_price')) {
                $table->dropColumn('total_product_price');
            }
            if (Schema::hasColumn('orders', 'total_topping_price')) {
                $table->dropColumn('total_topping_price');
            }
            if (Schema::hasColumn('orders', 'level_id')) {
                $table->dropColumn('level_id');
            }
            
        });
        
    }
}
