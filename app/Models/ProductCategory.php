<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subcategories()
    {
        return $this->hasMany(ProductSubCategory::class, 'id');
    }

    public function brands()
    {
        return $this->hasManyThrough(
            'App\ProductBrand',
            'App\ProductSubCategory',
            'product_category_id',
            'product_sub_category_id',
            'id',
            'id'
        );
    }
}
