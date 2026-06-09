<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Equipment extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'category',
        'capacity',
        'summary',
        'sectors',
        'specs',
        'image_path',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'sectors'   => 'array',
        'specs'     => 'array',
        'is_active' => 'boolean',
        'sort_order'=> 'integer',
    ];

    protected static function booted(): void
    {
        static::creating(function (Equipment $equipment) {
            if (empty($equipment->slug)) {
                $equipment->slug = Str::slug($equipment->name);
            }
        });
    }

    /**
     * Usable image URL regardless of how image_path was stored:
     * - seed/config style lives under public/ (e.g. "images/equipment/x.webp")
     * - admin uploads live on the public disk (e.g. "equipment/x.webp" → /storage/...)
     */
    public function getImageUrlAttribute(): string
    {
        $path = $this->image_path;

        if (! $path) {
            return '';
        }
        if (Str::startsWith($path, ['http://', 'https://', '/'])) {
            return $path;
        }
        if (Str::startsWith($path, 'images/')) {
            return asset($path);
        }

        return Storage::disk('public')->url($path);
    }
}
