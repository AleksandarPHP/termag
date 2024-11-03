<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'parent_id',
        'subtitle',
        'text',
        'image',
        'image2',
        'url',
        'urlTitle',
        'url2',
        'urlTitle2'
    ];

    public $translatable = [
        'title',
        'subtitle',
        'text',
        'urlTitle',
        'urlTitle2',
    ];
}
