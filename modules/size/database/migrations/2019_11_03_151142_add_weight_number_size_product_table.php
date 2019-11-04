<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWeightNumberSizeProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('size_product', function (Blueprint $table) {
            $table->integer('weight_number')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('size_product', function (Blueprint $table) {
            if (Schema::hasColumn('size_product', 'weight_number')) {
                $table->dropColumn('weight_number');
            }
        });
    }
}
