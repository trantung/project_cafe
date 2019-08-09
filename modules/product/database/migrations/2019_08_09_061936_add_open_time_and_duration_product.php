<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOpenTimeAndDurationProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->time('open_time')->nullable()->after('id');
            $table->time('close_time')->nullable()->after('id');
            $table->string('duration_time')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'open_time')) {
                $table->dropColumn('open_time');
            }
            if (Schema::hasColumn('products', 'close_time')) {
                $table->dropColumn('close_time');
            }
            if (Schema::hasColumn('products', 'duration_time')) {
                $table->dropColumn('duration_time');
            }
        });
    }
}
