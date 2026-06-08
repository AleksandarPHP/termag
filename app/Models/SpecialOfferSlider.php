<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SpecialOfferSlider extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'subtitle',
        'link',
        'image',
        'priority',
        'is_active',
    ];

    public $translatable = [
        'title',
        'subtitle',
    ];
}
