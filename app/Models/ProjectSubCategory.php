<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function projectcategory()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }

    public function project()
    {
        return $this->hasMany(Project::class, 'id');
    }
}
