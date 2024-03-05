<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ProductCategory::create([
            'name' => 'Category-1', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'category_image'=> "cat-image",
        ]);
    }
}
