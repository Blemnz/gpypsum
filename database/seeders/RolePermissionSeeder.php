<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-product']);
        Permission::create(['name' => 'delete-product']);
        Permission::create(['name' => 'edit-product']);
        
        Permission::create(['name' => 'create-user']);

        Role::create(['name' => 'superAdmin']);
        Role::create(['name' => 'admin']);

        $superAdmin = Role::findByName('superAdmin');
        $superAdmin->givePermissionTo(['create-product', 'delete-product', 'edit-product', 'create-user']);
        
        $admin = Role::findByName('admin');
        $admin->givePermissionTo(['create-product', 'delete-product', 'edit-product']);

    }
}
