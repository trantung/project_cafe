<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldProductToppingTable extends Migration
{
    /**
     * Run the migrations.
     *source = 1(category), soruce = 0(product own)
     * @return void
     */
    public function up()
    {
        Schema::table('product_topping', function (Blueprint $table) {
            $table->integer('source')->nullable()->after('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_topping', function (Blueprint $table) {
            $table->dropColumn('source');
        });
    }
}
