<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Equipment extends Model
{
    /** The equipment categories the public site serves (slug => label), in site order. */
    public const CATEGORIES = [
        'commercial-washers'  => 'Commercial Washers',
        'tumble-dryers'       => 'Tumble Dryers',
        'ironers'             => 'Ironers',
        'finishing-equipment' => 'Finishing Equipment',
        'drying-cabinets'     => 'Drying Cabinets',
        'barrier-washers'     => 'Barrier Washers',
        'semi-professional'   => 'Semi-Professional',
        'wet-cleaning'        => 'Wet Cleaning',
        'accessories'         => 'Accessories',
    ];

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

    /** The card this product appears in on its category page (read-only Range / Tags for the admin). */
    public function getSiteCardAttribute(): ?array
    {
        return \App\Support\EquipmentCards::siteCard((string) $this->category, (string) $this->slug);
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
