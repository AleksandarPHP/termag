<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Album;
class InfoGallry extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'album_id'
    ];
    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
}
