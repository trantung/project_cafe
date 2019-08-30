<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductSizeMaterialIdIntoStepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('steps', function (Blueprint $table) {
            $table->integer('size_product_material_id')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('steps', function (Blueprint $table) {
            if (Schema::hasColumn('steps', 'size_product_material_id')) {
                $table->dropColumn('size_product_material_id');
            }
        });
    }
}
