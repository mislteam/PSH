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
            'product_sub_category_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'brand_image'=> "brand-image",
        ]);
    }
}
