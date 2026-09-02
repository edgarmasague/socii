<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Photo extends Model
{
    protected $fillable = [
        'gallery_id',
        'location_id',
        'path',
        'filename',
        'mime_type',
        'size',
        'width',
        'height',
        'taken_at',
    ];

    protected $casts = [
        'taken_at' => 'datetime',
    ];

    public function gallery(): BelongsTo {
        return $this->belongsTo(Gallery::class);
    }

    public function location(): BelongsTo {
        return $this->belongsTo(Location::class);
    }
    
    public function metadata(): HasOne {
        return $this->hasOne(PhotoMetadata::class);
    }
}
