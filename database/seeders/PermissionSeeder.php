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
            'view subcategory',
        ];

        foreach ($permissions as $permission) {
            $given_permission = Permission::create(['name' => $permission]);
            $given_permission->assignRole('admin');
        }
    }
}
