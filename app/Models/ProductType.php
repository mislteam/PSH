<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(Product::class,'id');
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
