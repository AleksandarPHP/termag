<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Documents extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'file',
        'original_name'
    ];

    public $translatable = [
        'original_name'
    ];
}
