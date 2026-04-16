<?php

/**
 * Static equipment catalogue — no database required.
 * Products are organised by category slug.
 * Each entry needs: name, slug, capacity (nullable), summary, image_path, sectors (array).
 */
return [

    // ── Commercial Washers ────────────────────────────────────────────────────
    'washers' => [
        ['name' => 'WH6-6LAC',          'slug' => 'wh6-6lac',          'capacity' => '6 kg',  'summary' => 'Front load washer 6 kg – WH6-6LAC',   'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-7CV',           'slug' => 'wh6-7cv',           'capacity' => '7 kg',  'summary' => 'Front load washer 7 kg – WH6-7CV',    'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-8CV',           'slug' => 'wh6-8cv',           'capacity' => '8 kg',  'summary' => 'Front load washer 8 kg – WH6-8CV',    'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-11CV',          'slug' => 'wh6-11cv',          'capacity' => '11 kg', 'summary' => 'Front load washer 11 kg – WH6-11CV',  'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-14CV',          'slug' => 'wh6-14cv',          'capacity' => '14 kg', 'summary' => 'Front load washer 14 kg – WH6-14CV',  'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-14LAG',         'slug' => 'wh6-14lag',         'capacity' => '14 kg', 'summary' => 'Front load washer 14 kg – WH6-14LAG', 'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-20LAC',         'slug' => 'wh6-20lac',         'capacity' => '20 kg', 'summary' => 'Front load washer 20 kg – WH6-20LAC', 'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-20CV',          'slug' => 'wh6-20cv',          'capacity' => '20 kg', 'summary' => 'Front load washer 20 kg – WH6-20CV',  'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-27CV',          'slug' => 'wh6-27cv',          'capacity' => '27 kg', 'summary' => 'Front load washer 27 kg – WH6-27CV',  'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-27LAC',         'slug' => 'wh6-27lac',         'capacity' => '27 kg', 'summary' => 'Front load washer 27 kg – WH6-27LAC', 'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-33CV',          'slug' => 'wh6-33cv',          'capacity' => '33 kg', 'summary' => 'Front load washer 33 kg – WH6-33CV',  'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-33LAC',         'slug' => 'wh6-33lac',         'capacity' => '33 kg', 'summary' => 'Front load washer 33 kg – WH6-33LAC', 'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-6',             'slug' => 'wh6-6',             'capacity' => '6 kg',  'summary' => 'Front load washer 6 kg – WH6-6',      'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-7',             'slug' => 'wh6-7',             'capacity' => '7 kg',  'summary' => 'Front load washer 7 kg – WH6-7',      'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-8',             'slug' => 'wh6-8',             'capacity' => '8 kg',  'summary' => 'Front load washer 8 kg – WH6-8',      'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-11',            'slug' => 'wh6-11',            'capacity' => '11 kg', 'summary' => 'Front load washer 11 kg – WH6-11',    'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-14',            'slug' => 'wh6-14',            'capacity' => '14 kg', 'summary' => 'Front load washer 14 kg – WH6-14',    'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-20',            'slug' => 'wh6-20',            'capacity' => '20 kg', 'summary' => 'Front load washer 20 kg – WH6-20',    'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-27',            'slug' => 'wh6-27',            'capacity' => '27 kg', 'summary' => 'Front load washer 27 kg – WH6-27',    'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WH6-33',            'slug' => 'wh6-33',            'capacity' => '33 kg', 'summary' => 'Front load washer 33 kg – WH6-33',    'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WS6-8',             'slug' => 'ws6-8',             'capacity' => '8 kg',  'summary' => 'Front load washer 8 kg – WS6-8',      'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WS6-9',             'slug' => 'ws6-9',             'capacity' => '9 kg',  'summary' => 'Front load washer 9 kg – WS6-9',      'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WS6-11',            'slug' => 'ws6-11',            'capacity' => '11 kg', 'summary' => 'Front load washer 11 kg – WS6-11',    'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
        ['name' => 'WS6-14',            'slug' => 'ws6-14',            'capacity' => '14 kg', 'summary' => 'Front load washer 14 kg – WS6-14',    'image_path' => 'images/equipment/commercialwasher.webp',  'sectors' => []],
    ],

    // ── Barrier Washers ───────────────────────────────────────────────────────
    'barrier-washers' => [
        ['name' => 'WB6-13',  'slug' => 'wb6-13',  'capacity' => '13 kg',  'summary' => 'Barrier washer 13 kg – WB6-13',   'image_path' => 'images/equipment/line6000-barrier-washer.webp', 'sectors' => []],
        ['name' => 'WB6-18',  'slug' => 'wb6-18',  'capacity' => '18 kg',  'summary' => 'Barrier washer 18 kg – WB6-18',   'image_path' => 'images/equipment/line6000-barrier-washer.webp', 'sectors' => []],
        ['name' => 'WB6-20',  'slug' => 'wb6-20',  'capacity' => '20 kg',  'summary' => 'Barrier washer 20 kg – WB6-20',   'image_path' => 'images/equipment/line6000-barrier-washer.webp', 'sectors' => []],
        ['name' => 'WB6-27',  'slug' => 'wb6-27',  'capacity' => '27 kg',  'summary' => 'Barrier washer 27 kg – WB6-27',   'image_path' => 'images/equipment/line6000-barrier-washer.webp', 'sectors' => []],
        ['name' => 'WB6-35',  'slug' => 'wb6-35',  'capacity' => '35 kg',  'summary' => 'Barrier washer 35 kg – WB6-35',   'image_path' => 'images/equipment/line6000-barrier-washer.webp', 'sectors' => []],
        ['name' => 'WB6-50',  'slug' => 'wb6-50',  'capacity' => '50 kg',  'summary' => 'Barrier washer 50 kg – WB6-50',   'image_path' => 'images/equipment/line6000-barrier-washer.webp', 'sectors' => []],
        ['name' => 'WB6-70',  'slug' => 'wb6-70',  'capacity' => '70 kg',  'summary' => 'Barrier washer 70 kg – WB6-70',   'image_path' => 'images/equipment/line6000-barrier-washer.webp', 'sectors' => []],
        ['name' => 'WB6-90',  'slug' => 'wb6-90',  'capacity' => '90 kg',  'summary' => 'Barrier washer 90 kg – WB6-90',   'image_path' => 'images/equipment/line6000-barrier-washer.webp', 'sectors' => []],
        ['name' => 'WB6-110', 'slug' => 'wb6-110', 'capacity' => '110 kg', 'summary' => 'Barrier washer 110 kg – WB6-110', 'image_path' => 'images/equipment/line6000-barrier-washer.webp', 'sectors' => []],
    ],

    // ── Tumble Dryers ─────────────────────────────────────────────────────────
    'tumble-dryers' => [
        ['name' => 'TD6-6',             'slug' => 'td6-6',             'capacity' => '6 kg',  'summary' => 'Tumble Dryer 6 kg – TD6-6',              'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-7',             'slug' => 'td6-7',             'capacity' => '7 kg',  'summary' => 'Tumble Dryer 7 kg – TD6-7',              'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-7LAC',          'slug' => 'td6-7lac',          'capacity' => '7 kg',  'summary' => 'Tumble Dryer 7 kg – TD6-7LAC',           'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-11',            'slug' => 'td6-11',            'capacity' => '11 kg', 'summary' => 'Tumble Dryer 11 kg – TD6-11',            'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-14',            'slug' => 'td6-14',            'capacity' => '14 kg', 'summary' => 'Tumble Dryer 14 kg – TD6-14',            'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-14LAC',         'slug' => 'td6-14lac',         'capacity' => '14 kg', 'summary' => 'Tumble Dryer 14 kg – TD6-14LAC',         'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-16',            'slug' => 'td6-16',            'capacity' => '16 kg', 'summary' => 'Tumble Dryer 16 kg – TD6-16',            'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-20',            'slug' => 'td6-20',            'capacity' => '20 kg', 'summary' => 'Tumble Dryer 20 kg – TD6-20',            'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-20LAC',         'slug' => 'td6-20lac',         'capacity' => '20 kg', 'summary' => 'Tumble Dryer 20 kg – TD6-20LAC',         'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-30',            'slug' => 'td6-30',            'capacity' => '30 kg', 'summary' => 'Tumble Dryer 30 kg – TD6-30',            'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-30LAC',         'slug' => 'td6-30lac',         'capacity' => '30 kg', 'summary' => 'Tumble Dryer 30 kg – TD6-30LAC',         'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-37',            'slug' => 'td6-37',            'capacity' => '37 kg', 'summary' => 'Tumble Dryer 37 kg – TD6-37',            'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-37LAC',         'slug' => 'td6-37lac',         'capacity' => '37 kg', 'summary' => 'Tumble Dryer 37 kg – TD6-37LAC',         'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-45',            'slug' => 'td6-45',            'capacity' => '45 kg', 'summary' => 'Tumble Dryer 45 kg – TD6-45',            'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-45SLD',         'slug' => 'td6-45sld',         'capacity' => '45 kg', 'summary' => 'Tumble Dryer 45 kg – TD6-45SLD',         'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-60',            'slug' => 'td6-60',            'capacity' => '60 kg', 'summary' => 'Tumble Dryer 60 kg – TD6-60',            'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-60SLD',         'slug' => 'td6-60sld',         'capacity' => '60 kg', 'summary' => 'Tumble Dryer 60 kg – TD6-60SLD',         'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-17S',           'slug' => 'td6-17s',           'capacity' => '17 kg', 'summary' => 'Stacked Tumble Dryer 17 kg – TD6-17S',   'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'TD6-24S',           'slug' => 'td6-24s',           'capacity' => '24 kg', 'summary' => 'Stacked Tumble Dryer 24 kg – TD6-24S',   'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'Quickdry Condense', 'slug' => 'quickdry-condense', 'capacity' => null,    'summary' => 'Quick Dryer – Quickdry Condense',         'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'QuickDry QDC',      'slug' => 'quickdry-qdc',      'capacity' => null,    'summary' => 'Quick Dryer – QuickDry QDC',              'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'PD9C',              'slug' => 'pd9c',              'capacity' => null,    'summary' => 'PD9C',                                    'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'T4900CR',           'slug' => 't4900cr',           'capacity' => '45 kg', 'summary' => 'Tumble Dryer 45 kg – T4900CR',            'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
        ['name' => 'T41200CR',          'slug' => 't41200cr',          'capacity' => '60 kg', 'summary' => 'Tumble Dryer 60 kg – T41200CR',           'image_path' => 'images/equipment/line6000-tumble-dryer.webp', 'sectors' => []],
    ],

    // ── Ironers ───────────────────────────────────────────────────────────────
    'ironers' => [],

];
