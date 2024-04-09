<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function projectsubcategory()
    {
        return $this->hasMany(ProjectSubCategory::class, 'id');
    }

    public function project()
    {
        return $this->hasMany(Project::class, 'id');
    }
    
}
