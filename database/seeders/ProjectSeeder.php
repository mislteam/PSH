<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectcategory = Project::create([
            'name' => 'Project-1',
            'project_category_id'=> 1,
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            'feature_image'=> "test-img",
            'gallery_image'=>null

        ]);
    }
}
