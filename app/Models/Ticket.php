<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];

    function created_by() {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    function assigned_to() {
        return $this->belongsTo(User::class, 'assigned_to_id');
    }

    function replys() {
        return $this->hasMany(ReplyTicket::class);
    }
}
