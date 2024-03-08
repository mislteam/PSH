<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class,'product_category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(ProductSubCategory::class,'product_sub_category_id');
    }

    public function brand()
    {
        return $this->belongsTo(ProductBrand::class,'product_brand_id');
    }

    public function userSupport()
    {
        return $this->hasMany(UserSupport::class,'id');
    }

    public function techSupport()
    {
        return $this->hasMany(TechSupport::class,'id');
    }
}
