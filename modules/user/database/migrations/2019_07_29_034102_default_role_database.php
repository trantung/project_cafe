<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use APV\User\Models\Role;

class DefaultRoleDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Role::create([
            'name' => 'Admin',
            'description' => 'Admin quản trị hệ thống',
        ]);
        Role::create([
            'name' => 'shop manager',
            'description' => 'Các quản lý shop',
        ]);
        Role::create([
            'name' => 'Cashier',
            'description' => 'Thu ngân',
        ]);
        Role::create([
            'name' => 'Servicer',
            'description' => 'Phục vụ',
        ]);
        Role::create([
            'name' => 'Kitchen/Bar',
            'description' => 'Bếp/Bar',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Role::truncate();
    }
}
