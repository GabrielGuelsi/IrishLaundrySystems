<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Bulk-registers the full equipment catalogue into the `equipment` table
 * from config/equipment.php. Idempotent (updateOrCreate by slug), so it can
 * be re-run safely. After this runs, the public category/product pages read
 * the catalogue from the database (admin-managed) instead of the config file.
 */
class EquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $catalogue = config('equipment', []);

        foreach ($catalogue as $category => $products) {
            $sort = 0;
            foreach ($products as $p) {
                $sort += 10;
                $slug = $p['slug'] ?? Str::slug($p['name']);

                Equipment::updateOrCreate(
                    ['slug' => $slug],
                    [
                        'name'       => $p['name'],
                        'category'   => $category,
                        'capacity'   => $p['capacity'] ?? null,
                        'summary'    => $p['summary'] ?? null,
                        'sectors'    => $p['sectors'] ?? [],
                        'specs'      => $p['specs'] ?? [],
                        'image_path' => $p['image_path'] ?? null,
                        'is_active'  => true,
                        'sort_order' => $p['sort_order'] ?? $sort,
                    ]
                );
            }
        }
    }
}
