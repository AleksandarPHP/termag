<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\HasMany;


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

    public function options(): HasMany
    {
        return $this->hasMany(PackageOption::class);
    }
}
