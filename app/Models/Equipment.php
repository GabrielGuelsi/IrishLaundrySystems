<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
}
