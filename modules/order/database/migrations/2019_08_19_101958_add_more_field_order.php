<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('confirm_payment_by')->nullable()->after('id');
            $table->integer('updated_order_by')->nullable()->after('id');
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
            if (Schema::hasColumn('orders', 'confirm_payment_by')) {
                $table->dropColumn('confirm_payment_by');
            }
            if (Schema::hasColumn('orders', 'updated_order_by')) {
                $table->dropColumn('updated_order_by');
            }
            
        });

    }
}
