<?php

namespace Database\Seeders;

use App\Models\CompanyDetail;
use App\Models\HomeaboutCounter;
use App\Models\Milestone;
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
            ProjectSubCategorySeeder::class,
            ProjectSeeder::class,
            NewCategorySeeder::class,
            NewSeeder::class,
            ProductTypeSeeder::class,
            HomeaboutSeeder::class, 
            HomeaboutCounterSeeder::class,
            SpecialSeeder::class,
            SpecialCardSeeder::class,
            CompanyPolicySeeder::class,
            CompanySeeder::class,
            CompanyDetailSeeder::class,
            CompanyFounderSeeder::class,
            MilestoneSeeder::class,
            ContactUsSeeder::class,
            OurBranchSeeder::class,
            FooterSeeder::class,
            HeaderSeeder::class,
            RegionSeeder::class, 
            TownshipSeeder::class          
        ]);
    }
}
