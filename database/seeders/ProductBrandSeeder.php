<?php

namespace Database\Seeders;

use App\Models\ProductBrand;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = ProductBrand::create([
            'name' => 'Brand-1', 
            'product_category_id' => 1,
            'product_sub_category_id' => 3,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'brand_image'=> "brand-image",
        ]);
        $brand = ProductBrand::create([
            'name' => 'Brand-1', 
            'product_category_id' => 2,
            'product_sub_category_id' => 4,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'brand_image'=> "brand-image",
        ]);
        $brand = ProductBrand::create([
            'name' => 'Brand-1', 
            'product_category_id' => 4,
            'product_sub_category_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'brand_image'=> "brand-image",
        ]);
        $brand = ProductBrand::create([
            'name' => 'Brand-1', 
            'product_category_id' => 3,
            'product_sub_category_id' => 6,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'brand_image'=> "brand-image",
        ]);
        $brand = ProductBrand::create([
            'name' => 'Brand-1', 
            'product_category_id' => 2,
            'product_sub_category_id' => 2,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'brand_image'=> "brand-image",
        ]);
        $brand = ProductBrand::create([
            'name' => 'Brand-1', 
            'product_category_id' => 1,
            'product_sub_category_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'brand_image'=> "brand-image",
        ]);
    }
}
