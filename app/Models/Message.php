<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'file', 'email', 'tel', 'description', 'date', 'is_send'];

    protected $casts = [
        'file' => 'array',
    ];
}
