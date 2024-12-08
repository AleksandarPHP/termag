<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Settings extends Model
{
    use HasFactory, HasTranslations;
    
    protected $fillable = [
        'title',
        'description',
        'keywords',
        'phone',
        'worktime',
        'address',
        'facebook',
        'google',
        'instagram',
        'logoH',
        'logoF',
        'favicon',
    ];

    public $translatable = [
        'description',
        'keywords',
    ];
}
