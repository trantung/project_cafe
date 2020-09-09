<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocmaiNotifyContextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocmai_notify_contexts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('notify_id')->nullable();
            $table->integer('context_id')->nullable();
            $table->integer('action_type')->nullable();
            $table->integer('sound')->default(0);
            $table->integer('ios_badge')->default(0);
            $table->string('expire')->nullable();
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
        Schema::dropIfExists('hocmai_notify_contexts');
    }
}
