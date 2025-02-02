<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Masage extends Model
{
    use HasFactory,HasTranslations;

    protected $fillable = [
        'title',
        'category',
        'text',
        'image',
        'url',
        'urlTitle',
        'time',
        'price',
        'priceEur',
        'is_active'
    ];

    public $translatable = [
        'title',
        'text',
        'urlTitle'
    ];

}
