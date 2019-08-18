<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMinMaxStepIntoSizeResourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('size_product_material', function (Blueprint $table) {
            $table->integer('status')->comment('active hoặc inactive')->nullable()->after('id');
            $table->integer('step_distance')->comment('khoảng cách bước nhảy')->nullable()->after('id');
            $table->integer('min')->nullable()->after('id');
            $table->integer('max')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('size_product_material', function (Blueprint $table) {
            if (Schema::hasColumn('size_product_material', 'status')) {
                $table->dropColumn('status');
            }
            if (Schema::hasColumn('size_product_material', 'step_distance')) {
                $table->dropColumn('step_distance');
            }
            if (Schema::hasColumn('size_product_material', 'min')) {
                $table->dropColumn('min');
            }
            if (Schema::hasColumn('size_product_material', 'max')) {
                $table->dropColumn('max');
            }

            
        });
    }
}
