<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function region(){
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
   
}
