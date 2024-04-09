<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $projectsubcategory = ProjectSubCategory::create([
            'name' => 'Project Sub Category-1',
            'project_category_id' => 1,
        ]);
    }
}
