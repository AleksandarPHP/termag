<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageOption extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'package_id',
        'nights',
        'price',
        'options',
        'is_active'
    ];

    public $translatable = [
        'title',
        'price',
        'options'
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}