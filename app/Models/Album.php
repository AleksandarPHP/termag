<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\InfoGallry;

class Album extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title', 'is_active'
    ];

    public $translatable = [
        'title'
    ];

    public function infogallery(): HasMany
    {
        return $this->hasMany(InfoGallry::class);
    }
}
