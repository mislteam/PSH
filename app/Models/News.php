<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function newcategory()
    {
        return $this->belongsTo(NewCategory::class, 'new_category_id');
    }
}
