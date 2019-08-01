<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldProduct extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'main_img_name')) {
                $table->dropColumn('main_img_name');
            }
            if (Schema::hasColumn('products', 'price')) {
                $table->dropColumn('price');
            }
            if (Schema::hasColumn('products', 'created_admin_id')) {
                $table->dropColumn('created_admin_id');
            }
            if (Schema::hasColumn('products', 'updated_admin_id')) {
                $table->dropColumn('updated_admin_id');
            }
            if (Schema::hasColumn('products', 'status')) {
                $table->dropColumn('status');
            }
            
        });

        Schema::table('products', function (Blueprint $table) {
            $table->integer('price_origin')->comment('giá vốn')->nullable()->after('id');
            $table->integer('price_pay')->comment('giá bán')->nullable()->after('id');
            $table->string('code')->comment('mã món')->nullable()->after('id');
            $table->string('barcode')->comment('barcode món')->nullable()->after('id');
            $table->integer('print_view')->comment('In và hiển thị')->nullable()->after('id');
            $table->text('description')->comment('Mô tả')->nullable()->after('id');
            $table->integer('weight_number')->comment('thứ tự')->nullable()->after('id');
            $table->string('avatar')->comment('Ảnh đại diện')->nullable()->after('id');
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
            if (Schema::hasColumn('products', 'price_origin')) {
                $table->dropColumn('price_origin');
            }
            if (Schema::hasColumn('products', 'price_pay')) {
                $table->dropColumn('price_pay');
            }
            if (Schema::hasColumn('products', 'code')) {
                $table->dropColumn('code');
            }
            if (Schema::hasColumn('products', 'barcode')) {
                $table->dropColumn('barcode');
            }
            if (Schema::hasColumn('products', 'print_view')) {
                $table->dropColumn('print_view');
            }
            if (Schema::hasColumn('products', 'description')) {
                $table->dropColumn('description');
            }
            if (Schema::hasColumn('products', 'weight_number')) {
                $table->dropColumn('weight_number');
            }
            if (Schema::hasColumn('products', 'avatar')) {
                $table->dropColumn('avatar');
            }
            
        });
    }
}
