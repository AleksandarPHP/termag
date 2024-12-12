<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'name',
        'short_description',
        'description',
        'stars',
        'image',
        'is_active'
    ];

    public $translatable = [
        'short_description',
        'description',
    ];
}
