<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level_id')->default(1);
            $table->string('name')->nullable();
            $table->string('qr_code')->nullable();
            $table->string('code')->nullable();
            $table->integer('size')->nullable();
            $table->integer('type')->nullable();
            $table->integer('max_number_person')->nullable();
            $table->boolean('active')->default(0)->comment('0: Inactive, 1: Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
