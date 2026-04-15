<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        $products = [
            // ── Commercial Washers: WH6 CV/LAC/LAG variants ──────────────────
            ['name' => 'WH6-6LAC',   'summary' => 'Front load washer 6 kg – WH6-6LAC',   'capacity' => '6 kg',  'sort' => 10],
            ['name' => 'WH6-7CV',    'summary' => 'Front load washer 7 kg – WH6-7CV',    'capacity' => '7 kg',  'sort' => 20],
            ['name' => 'WH6-8CV',    'summary' => 'Front load washer 8 kg – WH6-8CV',    'capacity' => '8 kg',  'sort' => 30],
            ['name' => 'WH6-11CV',   'summary' => 'Front load washer 11 kg – WH6-11CV',  'capacity' => '11 kg', 'sort' => 40],
            ['name' => 'WH6-14CV',   'summary' => 'Front load washer 14 kg – WH6-14CV',  'capacity' => '14 kg', 'sort' => 50],
            ['name' => 'WH6-14LAG',  'summary' => 'Front load washer 14 kg – WH6-14LAG', 'capacity' => '14 kg', 'sort' => 60],
            ['name' => 'WH6-20LAC',  'summary' => 'Front load washer 20 kg – WH6-20LAC', 'capacity' => '20 kg', 'sort' => 70],
            ['name' => 'WH6-20CV',   'summary' => 'Front load washer 20 kg – WH6-20CV',  'capacity' => '20 kg', 'sort' => 80],
            ['name' => 'WH6-27CV',   'summary' => 'Front load washer 27 kg – WH6-27CV',  'capacity' => '27 kg', 'sort' => 90],
            ['name' => 'WH6-27LAC',  'summary' => 'Front load washer 27 kg – WH6-27LAC', 'capacity' => '27 kg', 'sort' => 100],
            ['name' => 'WH6-33CV',   'summary' => 'Front load washer 33 kg – WH6-33CV',  'capacity' => '33 kg', 'sort' => 110],
            ['name' => 'WH6-33LAC',  'summary' => 'Front load washer 33 kg – WH6-33LAC', 'capacity' => '33 kg', 'sort' => 120],

            // ── Commercial Washers: WH6 standard variants ────────────────────
            ['name' => 'WH6-6',   'summary' => 'Front load washer 6 kg – WH6-6',   'capacity' => '6 kg',  'sort' => 130],
            ['name' => 'WH6-7',   'summary' => 'Front load washer 7 kg – WH6-7',   'capacity' => '7 kg',  'sort' => 140],
            ['name' => 'WH6-8',   'summary' => 'Front load washer 8 kg – WH6-8',   'capacity' => '8 kg',  'sort' => 150],
            ['name' => 'WH6-11',  'summary' => 'Front load washer 11 kg – WH6-11', 'capacity' => '11 kg', 'sort' => 160],
            ['name' => 'WH6-14',  'summary' => 'Front load washer 14 kg – WH6-14', 'capacity' => '14 kg', 'sort' => 170],
            ['name' => 'WH6-20',  'summary' => 'Front load washer 20 kg – WH6-20', 'capacity' => '20 kg', 'sort' => 180],
            ['name' => 'WH6-27',  'summary' => 'Front load washer 27 kg – WH6-27', 'capacity' => '27 kg', 'sort' => 190],
            ['name' => 'WH6-33',  'summary' => 'Front load washer 33 kg – WH6-33', 'capacity' => '33 kg', 'sort' => 200],

            // ── Commercial Washers: WS6 series ───────────────────────────────
            ['name' => 'WS6-8',  'summary' => 'Front load washer 8 kg – WS6-8',   'capacity' => '8 kg',  'sort' => 210],
            ['name' => 'WS6-9',  'summary' => 'Front load washer 9 kg – WS6-9',   'capacity' => '9 kg',  'sort' => 220],
            ['name' => 'WS6-11', 'summary' => 'Front load washer 11 kg – WS6-11', 'capacity' => '11 kg', 'sort' => 230],
            ['name' => 'WS6-14', 'summary' => 'Front load washer 14 kg – WS6-14', 'capacity' => '14 kg', 'sort' => 240],
        ];

        foreach ($products as $product) {
            DB::table('equipment')->insert([
                'name'       => $product['name'],
                'slug'       => Str::slug($product['name']),
                'category'   => 'washers',
                'capacity'   => $product['capacity'],
                'summary'    => $product['summary'],
                'image_path' => 'images/equipment/commercialwasher.webp',
                'is_active'  => 1,
                'sort_order' => $product['sort'],
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
