<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ProductSubCategory::create([
            'name' => 'SubCategory-1',
            'product_category_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'subcategory_image'=> "Subcat-image",
        ]);
    }
}
