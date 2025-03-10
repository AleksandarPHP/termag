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
        'image3',
        'image4',
        'image5',
        'image6',
        'image7',
        'image8',
        'url',
        'urlTitle',
        'url2',
        'urlTitle2',
        'meta_title',
        'meta_description'
    ];

    public $translatable = [
        'title',
        'subtitle',
        'text',
        'urlTitle',
        'urlTitle2',
        'meta_title',
        'meta_description'
    ];
}
