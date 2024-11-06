<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Menu extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'parent_id',
        'link',
        'order',
        'is_active'
    ];

    public $translatable = [
        'title',
        'link',
    ];
}
