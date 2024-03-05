<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'create users',
            'view users',
            'edit users',
            'delete users',
            'ban users',
            'view setting',
            'view permissions',
            'edit permissions',
            'edit general setting',
            'view general setting',
            'view account setting',
            'edit account setting',
            'view customers',
            'delete customers',
            'view changePlan',   
            'view admin',
            'view category',
            'edit category',
            'delete category',
            'create category',
            'view subcategory',
            'edit subcategory',
            'delete subcategory',
            'create subcategory',
            'view brand',
            'edit brand',
            'delete brand',
            'create brand',
        ];

        foreach ($permissions as $permission) {
            $given_permission = Permission::create(['name' => $permission]);
            $given_permission->assignRole('admin');
        }
    }
}
