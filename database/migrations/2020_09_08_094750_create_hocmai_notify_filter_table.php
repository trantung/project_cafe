<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocmaiNotifyFilterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocmai_notify_filter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('notify_id')->nullable();
            $table->integer('filter_id')->nullable();
            $table->string('type_id')->nullable();
            $table->string('operator_id')->nullable();
            $table->text('detail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hocmai_notify_filter');
    }
}
