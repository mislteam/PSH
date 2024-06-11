<?php

namespace App\Models;

use App\Models\Township;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function townships()
    {
        return $this->hasMany(Township::class, 'region_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
