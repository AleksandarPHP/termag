<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Video extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'embed',
        'image',
        'is_active'
    ];

    public $translatable = [
        'title',
    ];
}
