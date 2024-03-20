<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new = News::create([
            'name' => 'New-1',
            'new_category_id'=> 1,
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            'feature_image'=> "test-img",
        ]);
    }
}
