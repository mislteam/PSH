<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
            AdminSeeder::class,
            GeneralSettingSeeder::class,
            UserSeeder::class,
            ProductCategorySeeder::class,
            ProductSubCategorySeeder::class,
            ProductBrandSeeder::class,
        ]);
    }
}
