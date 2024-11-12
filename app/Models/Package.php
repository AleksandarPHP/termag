<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Package extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'text',
        'image',
        'url',
        'urlTitle',
        'is_active'
    ];

    public $translatable = [
        'title',
        'text',
        'urlTitle'
    ];
}
