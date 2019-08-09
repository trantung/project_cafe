<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOpenCloseTimeShop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->string('open_time')->nullable()->after('id');
            $table->string('close_time')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            if (Schema::hasColumn('shops', 'open_time')) {
                $table->dropColumn('open_time');
            }
            if (Schema::hasColumn('shops', 'close_time')) {
                $table->dropColumn('close_time');
            }
            
            
        });
    }
}
