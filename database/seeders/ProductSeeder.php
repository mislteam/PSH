<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'name' => 'Brand-1', 
            'product_category_id' => 3,
            'product_sub_category_id' => 1,
            'product_brand_id'=> 4,
            'name'=>'Product-1',
            'specification'=>null,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'product_pdf'=> 'product-pdf',
            'product_video_link'=>'product_video_link',
            'product_feature_image'=>null,
            'product_guide_pdf'=>null,
            'product_guide_video'=>null
        ]);
     }
}
