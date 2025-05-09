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
        'subtitle',
        'package_id',
        'nights',
        'price',
        'priceEur',
        'from_date',
        'to_date',
        'options',
        'is_active',
        'description'
    ];

    public $translatable = [
        'title',
        'subtitle',
        'options',
        'description'
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
