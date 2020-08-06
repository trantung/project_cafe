<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->integer('sex')->default(0);
            $table->string('birthday')->nullable();
            $table->integer('height')->default(140);
            $table->integer('weight')->default(40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('sex');
            $table->dropColumn('birthday');
            $table->dropColumn('height');
            $table->dropColumn('weight');
        });
    }
}
