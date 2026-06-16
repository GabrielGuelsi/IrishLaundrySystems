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

                // Products defined as a list of models (e.g. finishing equipment) resolve their
                // image from the first available model file and derive a spec table from
                // group + models — keeping the detail image matched to the listing card.
                $imagePath = $p['image_path'] ?? null;
                $specs     = $p['specs'] ?? [];
                if (! empty($p['models'])) {
                    if (! $imagePath) {
                        $imagePath = $this->resolveModelImage($p['models']) ?? 'images/logo/electrolux-partner.png';
                    }
                    if (empty($specs)) {
                        $specs = [
                            'Specifications' => array_filter([
                                'Type'   => $p['group'] ?? null,
                                'Models' => implode(', ', $p['models']),
                            ]),
                            'Connections' => ['Electrical, water & steam' => 'Available on request'],
                            'Dimensions'  => ['Footprint & weight' => 'Available on request'],
                        ];
                    }
                }

                Equipment::updateOrCreate(
                    ['slug' => $slug],
                    [
                        'name'       => $p['name'],
                        'category'   => $category,
                        'capacity'   => $p['capacity'] ?? null,
                        'summary'    => $p['summary'] ?? null,
                        'sectors'    => $p['sectors'] ?? [],
                        'specs'      => $specs,
                        'image_path' => $imagePath,
                        'is_active'  => true,
                        'sort_order' => $p['sort_order'] ?? $sort,
                    ]
                );

                // Per-model variants get their own detail page, inheriting the
                // family's summary/specs/sectors unless the variant overrides them.
                // This keeps each listing-card image matched to its View Details page
                // without duplicating the whole family block per model.
                foreach ($p['variants'] ?? [] as $v) {
                    $sort += 1;

                    Equipment::updateOrCreate(
                        ['slug' => $v['slug']],
                        [
                            'name'       => $v['name'],
                            'category'   => $category,
                            'capacity'   => $v['capacity'] ?? $p['capacity'] ?? null,
                            'summary'    => $v['summary'] ?? $p['summary'] ?? null,
                            'sectors'    => $v['sectors'] ?? $p['sectors'] ?? [],
                            'specs'      => $v['specs'] ?? $p['specs'] ?? [],
                            'image_path' => $v['image_path'] ?? null,
                            'is_active'  => true,
                            'sort_order' => $v['sort_order'] ?? $sort,
                        ]
                    );
                }
            }
        }
    }

    /**
     * First existing image file for any of the given model codes, looked up under
     * images/equipment/finishing/ then images/equipment/. Returns null if none found.
     */
    private function resolveModelImage(array $models): ?string
    {
        foreach ($models as $code) {
            foreach (['images/equipment/finishing/', 'images/equipment/'] as $dir) {
                foreach (['jpg', 'jpeg', 'png', 'webp'] as $ext) {
                    if (file_exists(public_path($dir . $code . '.' . $ext))) {
                        return $dir . $code . '.' . $ext;
                    }
                }
            }
        }

        return null;
    }
}
