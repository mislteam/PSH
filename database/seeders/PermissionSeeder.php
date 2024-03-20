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
            'view product',
            'edit product',
            'delete product',
            'create product',
            'view usersupp',
            'edit usersupp',
            'delete usersupp',
            'create usersupp',
            'view techsupp',
            'edit techsupp',
            'delete techsupp',
            'create techsupp',
            'view projectcategory',
            'edit projectcategory',
            'delete projectcategory',
            'create projectcategory',
            'view project',
            'edit project',
            'delete project',
            'create project',
            'view newcategory',
            'edit newcategory',
            'delete newcategory',
            'create newcategory',
            'view new',
            'edit new',
            'delete new',
            'create new',
        ];

        foreach ($permissions as $permission) {
            $given_permission = Permission::create(['name' => $permission]);
            $given_permission->assignRole('admin');
        }
    }
}
