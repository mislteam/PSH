<?php

namespace Database\Seeders;

use App\Models\NewCategory;
use App\Models\ProductCategory;
use App\Models\ProjectCategory;
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
            ProductSeeder::class,
            UserSupportSeeder::class,
            TechSupportSeeder::class,
            ProjectCategorySeeder::class,
            ProjectSeeder::class,
            NewCategorySeeder::class,
            NewSeeder::class
        ]);
    }
}
