<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyTicket extends Model
{
    use HasFactory;
    protected $fillable = ['ticket_id', 'user_id', 'reply'];

    function user() {
        return $this->belongsTo(User::class);
    }
}
