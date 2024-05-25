<?php

namespace App\Models;

use App\Models\Image;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    function notifies()
    {
        return $this->hasMany(Notify::class);
    }

    function isBanned()
    {
        if ($this->status != 1) {
            return false;
        }

        return true;
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class,'id');
    }
}
