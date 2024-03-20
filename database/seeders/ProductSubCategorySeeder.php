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
        $subcategory = ProductSubCategory::create([
            'name' => 'SubCategory-1',
            'product_category_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'subcategory_image'=> "Subcat-image",
        ]);
        $subcategory = ProductSubCategory::create([
            'name' => 'SubCategory-2',
            'product_category_id' => 6,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'subcategory_image'=> "Subcat-image",
        ]);
        $subcategory = ProductSubCategory::create([
            'name' => 'SubCategory-3',
            'product_category_id' => 3,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'subcategory_image'=> "Subcat-image",
        ]);
        $subcategory = ProductSubCategory::create([
            'name' => 'SubCategory-4',
            'product_category_id' =>2,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'subcategory_image'=> "Subcat-image",
        ]);
        $subcategory = ProductSubCategory::create([
            'name' => 'SubCategory-5',
            'product_category_id' => 4,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'subcategory_image'=> "Subcat-image",
        ]);
        $subcategory = ProductSubCategory::create([
            'name' => 'SubCategory-6',
            'product_category_id' => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'subcategory_image'=> "Subcat-image",
        ]);
    }
}
