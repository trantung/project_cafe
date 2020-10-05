<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusHocmaiNotify extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hocmai_notifies', function (Blueprint $table) {
            $table->integer('success')->nullable();
            $table->integer('failure')->nullable();
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hocmai_notifies', function (Blueprint $table) {
            $table->dropColumn('success');
            $table->dropColumn('failure');
            $table->dropColumn('status');
        });
    }
}
