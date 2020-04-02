<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescToClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('class', function (Blueprint $table) {
            $table->string('name');
            $table->string('desc');
            $table->integer('schoolsubjects_id');
            $table->integer('schoolblock_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('class', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('desc');
            $table->dropColumn('schoolsubjects_id');
            $table->dropColumn('schoolblock_id');
        });
    }
}
