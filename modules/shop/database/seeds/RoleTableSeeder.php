<?php

use APV\User\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
}
