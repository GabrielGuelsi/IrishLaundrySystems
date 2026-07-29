<?php

/**
 * Static equipment catalogue — no database required.
 * Products are organised by category slug.
 * Each entry: name, slug, capacity (nullable), title, summary, image_path, specs, sectors.
 */
return [

    // ── Commercial Washers ────────────────────────────────────────────────────
    'commercial-washers' => [
        [
            'name' => 'WS6', 'slug' => 'ws6', 'capacity' => '8–35 kg',
            'title' => 'Line 6000 high-spin washer – WS6',
            'summary' => 'Line 6000 high-spin commercial washer. CompassPro / ClarusVibe controls with Automatic Savings and Power Balance. Capacity 8–35 kg.',
            'image_path' => 'images/pages/commercial-washers/WS6 — Line 6000 High-Spin Washer.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'Line 6000', 'Spin type' => 'High spin', 'Capacity' => '8 – 35 kg',
                    'Control' => 'CompassPro / ClarusVibe', 'Efficiency' => 'Automatic Savings, Power Balance',
                    'Dosing' => 'Efficient Dosing ready', 'Certification' => 'ERGOCERT ergonomics',
                ],
                'Dimensions' => ['Footprint' => 'Compact for capacity', 'Installation' => 'Floor-standing, professional install'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'WN6', 'slug' => 'wn6', 'capacity' => '8–35 kg',
            'title' => 'Line 6000 normal-spin washer – WN6',
            'summary' => 'Line 6000 normal-spin commercial washer. CompassPro controls with Automatic and Integrated Savings. Capacity 8–35 kg.',
            'image_path' => 'images/pages/commercial-washers/WN6 — Line 6000 Normal-Spin Washer.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'Line 6000', 'Spin type' => 'Normal spin', 'Capacity' => '8 – 35 kg',
                    'Control' => 'CompassPro', 'Efficiency' => 'Automatic Savings, Integrated Savings',
                    'Certification' => 'ERGOCERT ergonomics',
                ],
                'Dimensions' => ['Footprint' => 'Compact for capacity', 'Installation' => 'Floor-standing, professional install'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'WH6-CV — ClarusVibe Washer Variants', 'slug' => 'wh6-cv', 'capacity' => '7–33 kg',
            'title' => 'Line 6000 ClarusVibe washer variants – WH6-CV',
            'summary' => 'ClarusVibe washer variants for sites that need clearer programme control and a more guided operator experience. Capacity 7–33 kg.',
            'image_path' => 'images/pages/commercial-washers/commercialwasher.webp',
            'specs' => [
                'Main specification' => [
                    'Range' => 'Line 6000', 'Control' => 'ClarusVibe', 'Capacity' => '7 – 33 kg',
                    'Efficiency' => 'Automatic Savings, Integrated Savings', 'Dosing' => 'Intelligent Dosing', 'Certification' => 'ERGOCERT ergonomics',
                ],
                'Dimensions' => ['Footprint' => 'Compact for capacity', 'Installation' => 'Floor-standing, professional install'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'WH6-LAC — Lagoon Advanced Care Washer Variants', 'slug' => 'wh6-lac', 'capacity' => '6–33 kg',
            'title' => 'Lagoon Advanced Care washer variants – WH6-LAC',
            'summary' => 'Washer variants connected to Lagoon Advanced Care for specialist wet cleaning and textile care. Capacity 6–33 kg.',
            'image_path' => 'images/pages/commercial-washers/commercialwasher.webp',
            'specs' => [
                'Main specification' => [
                    'Range' => 'Line 6000', 'Care' => 'Lagoon Advanced Care', 'Capacity' => '6 – 33 kg',
                    'Control' => 'ClarusVibe', 'Dosing' => 'Efficient Dosing', 'Strength' => 'Specialist wet cleaning and textile care',
                ],
                'Dimensions' => ['Footprint' => 'Compact for capacity', 'Installation' => 'Floor-standing, professional install'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'WH6-LAG — Lagoon Washer Variant', 'slug' => 'wh6-lag', 'capacity' => '14 kg',
            'title' => 'Lagoon washer variant – WH6-LAG',
            'summary' => 'Lagoon washer variant for sites managing delicate garments and specialist care processes.',
            'image_path' => 'images/pages/commercial-washers/commercialwasher.webp',
            'specs' => [
                'Main specification' => [
                    'Range' => 'Line 6000', 'Care' => 'Lagoon', 'Capacity' => '14 kg',
                    'Control' => 'ClarusVibe', 'Dosing' => 'Efficient Dosing', 'Strength' => 'Delicate garments and specialist care processes',
                ],
                'Dimensions' => ['Footprint' => 'Compact', 'Installation' => 'Floor-standing, professional install'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'W4-Series', 'slug' => 'w4-series', 'capacity' => '40–110 kg',
            'title' => 'Heavy-duty washer-extractors – W4-Series',
            'summary' => 'Heavy-duty washer-extractors for industrial and high-throughput laundries. Robust build with high extraction. Capacity 40–110 kg.',
            'image_path' => 'images/pages/commercial-washers/W4-Series Washer-Extractors.png',
            'specs' => [
                'Main specification' => [
                    'Range' => 'W4-Series', 'Type' => 'Heavy-duty washer-extractor', 'Capacity' => '40 – 110 kg',
                    'Models' => 'W4400H, W4600H, W4850H, W41100H', 'Efficiency' => 'Power Balance',
                    'Build' => 'Robust industrial frame',
                ],
                'Dimensions' => ['Footprint' => 'Industrial floor area', 'Installation' => 'Bolt-down, serviced install'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'Quickwash QWC', 'slug' => 'quickwash-qwc', 'capacity' => null,
            'title' => 'Quick-cycle commercial washer – QWC',
            'summary' => 'Quick-cycle washer for fast turnaround where short wash times and high availability matter most.',
            'image_path' => 'images/pages/commercial-washers/Quickwash QWC.jpg',
            'specs' => [
                'Main specification' => ['Drum volume' => '53 lt', 'Drum diameter' => '452 mm', 'G-factor' => '425'],
                'Dimensions' => ['Width' => '595 mm', 'Depth' => '681 mm', 'Height' => '832 mm'],
                'Drum' => ['Wash capacity, kg' => '55', 'Wash capacity, lb' => '1300'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'PW9C', 'slug' => 'pw9c', 'capacity' => null,
            'title' => 'Professional washer – PW9C',
            'summary' => 'Professional washer for standard commercial laundry duties and dependable everyday performance.',
            'image_path' => 'images/pages/commercial-washers/PW9C.jpg',
            'specs' => [
                'Main specification' => [
                    'Max. capacity, filling factor 1:9, kg' => '9',
                    'Certification' => 'ISO 9001; ISO 14001',
                    'Extraction' => '1015 rpm',
                    'G-factor' => '300',
                ],
                'Dimensions' => ['Width' => '720 mm', 'Depth' => '721 mm', 'Height' => '1113 mm'],
                'Drum' => ['Wash capacity, kg' => '9', 'Wash capacity, lb' => '1015'],
            ],
            'sectors' => [],
        ],
    ],

    // ── Tumble Dryers ─────────────────────────────────────────────────────────
    'tumble-dryers' => [
        [
            'name' => 'TD6 — Line 6000 Single Pocket Tumble Dryer', 'slug' => 'td6', 'capacity' => '6–60 kg',
            'title' => 'Line 6000 single pocket tumble dryer – TD6',
            'summary' => 'Commercial tumble dryer range for busy laundry rooms needing drying performance, fabric care and long-term support.',
            'image_path' => 'images/pages/dryers/line6000-tumble-dryer.webp',
            'specs' => [
                'Main specification' => [
                    'Range' => 'Line 6000', 'Type' => 'Single pocket tumble dryer', 'Capacity' => '6 – 60 kg',
                    'Control' => 'CompassPro', 'Key features' => 'Moisture Balance, Drum Speed', 'Certification' => 'ERGOCERT ergonomics',
                ],
                'Dimensions' => ['Footprint' => 'Floor-standing', 'Installation' => 'Vented / condense options'],
            ],
            'sectors' => [],
            'variants' => [
                ['slug' => 'td6-6',     'name' => 'TD6-6 — Line 6000 Single Pocket Tumble Dryer',     'capacity' => '6–7 kg',   'image_path' => 'images/pages/dryers/TD6-6.jpg'],
                ['slug' => 'td6-11',    'name' => 'TD6-11 — Line 6000 Single Pocket Tumble Dryer',    'capacity' => '11 kg',    'image_path' => 'images/pages/dryers/TD6-11.jpg'],
                ['slug' => 'td6-14',    'name' => 'TD6-14 — Line 6000 Single Pocket Tumble Dryer',    'capacity' => '14 kg',    'image_path' => 'images/pages/dryers/TD6-14.jpg'],
                ['slug' => 'td6-16',    'name' => 'TD6-16 — Line 6000 Single Pocket Tumble Dryer',    'capacity' => '16–20 kg', 'image_path' => 'images/pages/dryers/TD6-16.jpg'],
                ['slug' => 'td6-30',    'name' => 'TD6-30 — Line 6000 Single Pocket Tumble Dryer',    'capacity' => '30–37 kg', 'image_path' => 'images/pages/dryers/TD6-30.jpg'],
                ['slug' => 'td6-45',    'name' => 'TD6-45 — Line 6000 Single Pocket Tumble Dryer',    'capacity' => '45 kg',    'image_path' => 'images/pages/dryers/TD6-45.jpg'],
                ['slug' => 'td6-45sld', 'name' => 'TD6-45SLD — Line 6000 Single Pocket Tumble Dryer', 'capacity' => '45–60 kg', 'image_path' => 'images/pages/dryers/TD6-45SLD.jpg'],
            ],
        ],
        [
            'name' => 'Line 6000 Heat Pump Dryer Variants', 'slug' => 'heat-pump', 'capacity' => 'Heat Pump',
            'title' => 'Line 6000 Heat Pump Dryer variants',
            'summary' => 'Heat Pump Dryer route for sites looking to reduce drying energy pressure where the room setup is suitable.',
            'image_path' => 'images/pages/dryers/line6000-tumble-dryer.webp',
            'specs' => [
                'Main specification' => [
                    'Range' => 'Line 6000', 'Technology' => 'Heat Pump', 'Energy' => 'Up to 65% energy saving',
                    'Installation' => 'No exhaust, no water cooling', 'Key features' => 'Adaptive Fan, Moisture Balance',
                ],
                'Dimensions' => ['Footprint' => 'Floor-standing', 'Installation' => 'No exhaust duct or water cooling required'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'Line 6000 Stacked Dryer Variants', 'slug' => 'stacked-dryers', 'capacity' => 'Stacked',
            'title' => 'Line 6000 stacked dryer variants',
            'summary' => 'Stacked dryer route for sites that need drying capacity while protecting floor space.',
            'image_path' => 'images/pages/dryers/TD6-17S.jpg',
            'specs' => [
                'Main specification' => ['Range' => 'Line 6000', 'Type' => 'Stacked tumble dryer', 'Models' => 'TD6-17S, TD6-24S', 'Strength' => 'Two dryers, one footprint'],
                'Dimensions' => ['Footprint' => 'Stacked — minimal floor area', 'Installation' => 'Floor-standing'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'TD6-LAC — Lagoon Advanced Care Dryer Variants', 'slug' => 'td6-lac', 'capacity' => 'Lagoon Advanced Care',
            'title' => 'Lagoon Advanced Care dryer variants – TD6-LAC',
            'summary' => 'Dryer variants connected to specialist textile care where fabric handling and process control matter.',
            'image_path' => 'images/pages/dryers/line6000-tumble-dryer.webp',
            'specs' => [
                'Main specification' => ['Range' => 'Line 6000', 'Care' => 'Lagoon Advanced Care', 'Control' => 'CompassPro', 'Key features' => 'Moisture Balance, Textile Care'],
                'Dimensions' => ['Footprint' => 'Floor-standing', 'Installation' => 'Vented / condense options'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'Quickdry Condense', 'slug' => 'quickdry-condense', 'capacity' => 'Compact',
            'title' => 'Quickdry Condense compact dryer',
            'summary' => 'Condense dryer option for smaller sites that need professional drying performance in a compact setup.',
            'image_path' => 'images/pages/dryers/Quickdry Condense.jpg',
            'specs' => [
                'Main specification' => ['Type' => 'Condense dryer', 'Strength' => 'Compact fit, easy operation', 'Best for' => 'Small business / small site drying'],
                'Dimensions' => ['Footprint' => 'Compact', 'Installation' => 'Floor-standing, no exhaust'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'PD9C Compact Dryer', 'slug' => 'pd9c', 'capacity' => '9 kg',
            'title' => 'PD9C compact professional dryer',
            'summary' => 'Compact professional dryer for smaller sites needing more than domestic drying equipment.',
            'image_path' => 'images/pages/dryers/PD9C.jpg',
            'specs' => [
                'Main specification' => ['Type' => 'Compact professional dryer', 'Capacity' => '9 kg', 'Best for' => 'Smaller sites needing professional drying'],
                'Dimensions' => ['Footprint' => 'Compact', 'Installation' => 'Floor-standing'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'T-Series Tumble Dryers', 'slug' => 't-series', 'capacity' => '45–60 kg',
            'title' => 'T-Series heavy-duty tumble dryers',
            'summary' => 'Large-capacity tumble dryer route for high-volume laundry rooms needing heavy-duty drying throughput and long-term support.',
            'image_path' => 'images/pages/dryers/T4900CR.jpg',
            'specs' => [
                'Main specification' => ['Type' => 'Heavy-duty tumble dryer', 'Models' => 'T4900CR, T41200CR', 'Capacity' => '45 – 60 kg', 'Best for' => 'High-volume commercial drying'],
                'Dimensions' => ['Footprint' => 'Floor-standing', 'Installation' => 'Vented'],
            ],
            'sectors' => [],
        ],
    ],

    // ── Ironers ───────────────────────────────────────────────────────────────
    'ironers' => [
        [
            'name' => 'Line 6000 Flatwork Ironers', 'slug' => 'line-6000-flatwork', 'capacity' => '2.5–3.3 m',
            'title' => 'Line 6000 flatwork ironers',
            'summary' => 'Large flatwork ironers for sheets and table linen, with an optional integrated feeder for higher output.',
            'image_path' => 'images/pages/ironers/flatwork-ib57.jpg',
            'specs' => [
                'Main specification' => ['Range' => 'Line 6000', 'Type' => 'Flatwork ironer', 'Working width' => '2.5 – 3.3 m', 'Models' => 'IB5725, IB5730, IB5733 (+ -F feeder)'],
                'Dimensions' => ['Working width' => '2.5 – 3.3 m', 'Installation' => 'Floor-standing, serviced install'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'Ø 480 mm Cylinder Ironers', 'slug' => 'cylinder-480mm', 'capacity' => 'Ø 480 mm',
            'title' => 'Ø 480 mm cylinder ironers',
            'summary' => 'The main cylinder ironer range — front or rear delivery, from basic up to feeding, folding and stacking.',
            'image_path' => 'images/pages/ironers/cylinder-480-ic648.jpg',
            'specs' => [
                'Main specification' => ['Type' => 'Cylinder ironer', 'Cylinder' => 'Ø 480 mm', 'Delivery' => 'Front or rear', 'Automation' => 'Up to feeding, folding & stacking', 'Models' => 'IC648 21 / 25 / 32 series, IV648'],
                'Dimensions' => ['Cylinder' => 'Ø 480 mm', 'Installation' => 'Floor-standing'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'Ø 330 mm Cylinder Ironers', 'slug' => 'cylinder-330mm', 'capacity' => 'Ø 330 mm',
            'title' => 'Ø 330 mm cylinder ironers',
            'summary' => 'Mid-size cylinder ironers for steady on-premise finishing.',
            'image_path' => 'images/pages/ironers/cylinder-330-ic633.jpg',
            'specs' => [
                'Main specification' => ['Type' => 'Cylinder ironer', 'Cylinder' => 'Ø 330 mm', 'Models' => 'IC63316, IC63320'],
                'Dimensions' => ['Cylinder' => 'Ø 330 mm', 'Installation' => 'Floor-standing'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'Ø 230 mm Bed-type Ironers', 'slug' => 'bed-230mm', 'capacity' => 'Ø 230 mm',
            'title' => 'Ø 230 mm bed-type ironers',
            'summary' => 'Compact bed-type ironers for smaller laundry rooms and lighter finishing volume.',
            'image_path' => 'images/pages/ironers/bed-230-ib623.jpg',
            'specs' => [
                'Main specification' => ['Type' => 'Bed-type ironer', 'Cylinder' => 'Ø 230 mm', 'Models' => 'IB62310, IB62314, IB62316'],
                'Dimensions' => ['Cylinder' => 'Ø 230 mm', 'Installation' => 'Compact, floor-standing'],
            ],
            'sectors' => [],
        ],
    ],

    // ── Drying Cabinets ─────────────────────────────────────────────────────────
    'drying-cabinets' => [
        [
            'name' => 'Standard Drying Cabinets', 'slug' => 'standard-drying-cabinets', 'capacity' => 'Standard',
            'title' => 'Standard drying cabinets',
            'summary' => 'Gentle hang-drying cabinets for garments and linen across the standard range.',
            'image_path' => 'images/pages/drying-cabinets/Drying-cabinets_image.webp',
            'specs' => [
                'Main specification' => ['Type' => 'Drying cabinet', 'Range' => 'Standard', 'Models' => 'DC6-4, DC6-8, DC6-14', 'Strength' => 'Gentle, mechanical-action-free drying'],
                'Dimensions' => ['Type' => 'Cabinet', 'Installation' => 'Floor-standing'],
            ],
            'sectors' => [],
            'variants' => [
                ['slug' => 'dc6-4',  'name' => 'DC6-4 — Standard Drying Cabinet',  'image_path' => 'images/pages/drying-cabinets/Standard Drying Cabinets.jpg'],
                ['slug' => 'dc6-8',  'name' => 'DC6-8 — Standard Drying Cabinet',  'image_path' => 'images/pages/drying-cabinets/Standard Drying CabinetsDC6-8.jpg'],
                ['slug' => 'dc6-14', 'name' => 'DC6-14 — Standard Drying Cabinet', 'image_path' => 'images/pages/drying-cabinets/Standard Drying CabinetsDC6-14.jpg'],
            ],
        ],
        [
            'name' => 'Heat Pump Drying Cabinets', 'slug' => 'heat-pump-drying-cabinets', 'capacity' => 'Heat Pump',
            'title' => 'Heat pump drying cabinets',
            'summary' => 'Energy-saving heat pump drying cabinets that cut drying energy while protecting fabrics.',
            'image_path' => 'images/pages/drying-cabinets/Drying-cabinets_image.webp',
            'specs' => [
                'Main specification' => ['Type' => 'Heat pump drying cabinet', 'Models' => 'DC6-4HP, DC6-8HP, DC6-10HP, DC6-14HP, DC7-4HP', 'Efficiency' => 'Heat pump — lower drying energy'],
                'Dimensions' => ['Type' => 'Cabinet', 'Installation' => 'Floor-standing, no exhaust'],
            ],
            'sectors' => [],
            'variants' => [
                ['slug' => 'dc6-14hp', 'name' => 'DC6-14HP — Heat Pump Drying Cabinet', 'image_path' => 'images/pages/drying-cabinets/Drying Cabinets - Heat Pumpdc6-14hp.jpg'],
                ['slug' => 'dc7-4hp',  'name' => 'DC7-4HP — Heat Pump Drying Cabinet',  'image_path' => 'images/pages/drying-cabinets/Drying Cabinets - Heat Pumpdc7-4hp.jpg'],
                ['slug' => 'dc7-4hph', 'name' => 'DC7-4HPh — Heat Pump Drying Cabinet', 'image_path' => 'images/pages/drying-cabinets/Drying Cabinets - Heat PumpDC7-4HPH.jpg'],
                ['slug' => '1lzs03',   'name' => '1LZS03 — Heat Pump Drying Cabinet',  'image_path' => 'images/pages/drying-cabinets/Drying Cabinets - Heat Pump 1LZS03.jpg'],
            ],
        ],
        [
            'name' => 'Workwear Drying Cabinet', 'slug' => 'workwear-drying-cabinet', 'capacity' => 'Workwear',
            'title' => 'Workwear drying cabinet',
            'summary' => 'Specialist cabinet for drying workwear, PPE and heavier garments.',
            'image_path' => 'images/pages/drying-cabinets/Drying Cabinets - Heat PumpDC6-15WW.jpg',
            'specs' => [
                'Main specification' => ['Type' => 'Workwear drying cabinet', 'Models' => 'DC6-15WW', 'Strength' => 'Workwear, PPE and heavier garments'],
                'Dimensions' => ['Type' => 'Cabinet', 'Installation' => 'Floor-standing'],
            ],
            'sectors' => [],
        ],
    ],

    // ── Barrier Washers ─────────────────────────────────────────────────────────
    'barrier-washers' => [
        [
            'name' => 'WB6 — Line 6000 Evolution Barrier Washer', 'slug' => 'wb6', 'capacity' => '13–110 kg',
            'title' => 'Line 6000 Evolution barrier washer – WB6',
            'summary' => 'Barrier washer for hygiene-critical laundry rooms needing clean/dirty separation, guided operation and long-term support.',
            'image_path' => 'images/pages/barrier-washers/line6000-barrier-washer.webp',
            'specs' => [
                'Main specification' => [
                    'Range' => 'Line 6000 Evolution', 'Type' => 'Barrier (hygiene) washer', 'Capacity' => '13 – 110 kg',
                    'Models' => 'WB6-13 → WB6-110', 'Hygiene' => 'Clean / dirty side separation',
                ],
                'Dimensions' => ['Footprint' => 'Through-wall barrier install', 'Installation' => 'Built into hygiene barrier'],
            ],
            'sectors' => [],
            'variants' => [
                ['slug' => 'wb6-13',  'name' => 'WB6-13 — Line 6000 Evolution Barrier Washer',  'capacity' => '13–18 kg',  'image_path' => 'images/pages/barrier-washers/WB6-13.jpg'],
                ['slug' => 'wb6-20',  'name' => 'WB6-20 — Line 6000 Evolution Barrier Washer',  'capacity' => '20–27 kg',  'image_path' => 'images/pages/barrier-washers/WB6-20.jpg'],
                ['slug' => 'wb6-35',  'name' => 'WB6-35 — Line 6000 Evolution Barrier Washer',  'capacity' => '35–70 kg',  'image_path' => 'images/pages/barrier-washers/WB6-35.jpg'],
                ['slug' => 'wb6-110', 'name' => 'WB6-110 — Line 6000 Evolution Barrier Washer', 'capacity' => '90–110 kg', 'image_path' => 'images/pages/barrier-washers/WB6-110.jpg'],
            ],
        ],
    ],

    // ── Wet Cleaning ──────────────────────────────────────────────────────────
    'wet-cleaning' => [
        [
            'name' => 'Lagoon Advanced Care', 'slug' => 'lagoon-advanced-care', 'capacity' => null,
            'title' => 'Lagoon Advanced Care wet cleaning',
            'summary' => 'Professional wet cleaning for delicate and specialist textiles — a water-based alternative to traditional dry cleaning. Irish Laundry Systems can advise on suitability, setup and support.',
            'image_path' => 'images/pages/wet-cleaning/lagoon-advanced-care.webp',
            'specs' => [
                'Main specification' => ['Process' => 'Wet cleaning', 'Care system' => 'Lagoon Advanced Care', 'Suited to' => 'Delicate and specialist textiles', 'Control' => 'ClarusVibe'],
            ],
            'sectors' => [],
        ],
    ],

    // ── Semi-Professional / myPRO ─────────────────────────────────────────────
    'semi-professional' => [
        [
            'name' => 'myPRO Washer', 'slug' => 'mypro-washer', 'capacity' => '8 kg',
            'title' => 'myPRO semi-professional washing machine',
            'summary' => 'Compact semi-professional washing machine for smaller sites and lighter commercial use — faster cycles and a stronger build than a domestic machine.',
            'image_path' => 'images/pages/semi-professional/myPRO-8K-washer.webp',
            'specs' => [
                'Main specification' => ['Range' => 'myPRO', 'Type' => 'Semi-professional', 'Capacity' => '8 kg', 'Install' => 'Freestanding'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'myPRO Dryer', 'slug' => 'mypro-dryer', 'capacity' => '8 kg',
            'title' => 'myPRO semi-professional tumble dryer',
            'summary' => 'Compact semi-professional tumble dryer to pair with the myPRO washer for smaller sites and lighter commercial use.',
            'image_path' => 'images/pages/dryers/line6000-tumble-dryer.webp',
            'specs' => [
                'Main specification' => ['Range' => 'myPRO', 'Type' => 'Semi-professional', 'Capacity' => '8 kg', 'Install' => 'Freestanding'],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'myPRO XL', 'slug' => 'mypro-xl', 'capacity' => '12 kg',
            'title' => 'myPRO XL semi-professional washer and dryer range',
            'summary' => 'myPRO XL gives smaller and decentralised laundry sites a 12 kg option for heavier daily washing and drying demand.',
            'image_path' => 'images/pages/semi-professional/myPROXL 12kg.webp',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPRO XL', 'Type' => 'Semi-professional', 'Capacity' => '12 kg',
                    'Durability' => '15,000+ cycles per Electrolux Professional material',
                    'Noise' => 'Washing process below 62 dB', 'Install' => 'Freestanding',
                ],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'myPROzip', 'slug' => 'myprozip', 'capacity' => '8 kg',
            'title' => 'myPROzip guest-operated laundry equipment',
            'summary' => 'myPROzip is designed for guest-operated laundry facilities where users need simple, clear machines that are easy to understand and ready for payment system integration.',
            'image_path' => 'images/pages/semi-professional/Self Service Laundry.png',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPROzip', 'Type' => 'Semi-professional, guest-operated', 'Capacity' => '8 kg',
                    'Controls' => 'Simple, clear operation', 'Payment' => 'Payment system integration ready',
                    'Install' => 'Freestanding',
                ],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'myPRO Ironers / Light Finishing', 'slug' => 'mypro-finishing', 'capacity' => null,
            'title' => 'myPRO ironers and light finishing options',
            'summary' => 'Where a site needs light finishing support alongside washing and drying, myPRO ironers and finishing options can help complete the setup without creating a full commercial finishing room.',
            'image_path' => 'images/pages/semi-professional/myPRO - IronersIS185.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPRO', 'Type' => 'Light finishing', 'Format' => 'Compact',
                    'Best for' => 'Light finishing alongside myPRO washing and drying',
                ],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'myPRO Edge Washer WE170P', 'slug' => 'we170p', 'capacity' => null,
            'title' => 'myPRO Edge washer WE170P',
            'summary' => 'Semi-professional myPRO Edge washer for small sites moving beyond domestic appliances, built for more frequent daily use.',
            'image_path' => 'images/pages/semi-professional/myPRO Edge - WashersWE170P.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPRO Edge', 'Type' => 'Semi-professional washer',
                    'Install' => 'Freestanding',
                ],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'myPRO Edge Washer WE170V', 'slug' => 'we170v', 'capacity' => null,
            'title' => 'myPRO Edge washer WE170V',
            'summary' => 'myPRO Edge washer variant for everyday commercial washing where a stronger build than a domestic machine is required.',
            'image_path' => 'images/pages/semi-professional/myPRO Edge - WashersWE170V.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPRO Edge', 'Type' => 'Semi-professional washer',
                    'Install' => 'Freestanding',
                ],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'myPRO Edge Washer WE2-9', 'slug' => 'we2-9', 'capacity' => null,
            'title' => 'myPRO Edge washer WE2-9',
            'summary' => 'Larger myPRO Edge washer for sites handling heavier daily laundry volumes within a semi-professional setup.',
            'image_path' => 'images/pages/semi-professional/myPRO Edge - Washers we2-9.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPRO Edge', 'Type' => 'Semi-professional washer',
                    'Install' => 'Freestanding',
                ],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'Condense Dryer TE1120', 'slug' => 'te1120', 'capacity' => null,
            'title' => 'myPRO Edge condense dryer TE1120',
            'summary' => 'Condense dryer that pairs with myPRO Edge washers where external venting is not possible.',
            'image_path' => 'images/pages/semi-professional/Condense dryerte1120.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPRO Edge', 'Type' => 'Condense dryer',
                    'Install' => 'Freestanding',
                ],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'Heat Pump Dryer TE1120HP', 'slug' => 'te1120hp', 'capacity' => null,
            'title' => 'myPRO Edge heat pump dryer TE1120HP',
            'summary' => 'Heat pump dryer for lower energy use across regular drying cycles in a semi-professional laundry room.',
            'image_path' => 'images/pages/semi-professional/Heat pump dryersTE1120HP.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPRO Edge', 'Type' => 'Heat pump dryer',
                    'Install' => 'Freestanding',
                ],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'Condense Dryer TD2-8', 'slug' => 'td2-8', 'capacity' => null,
            'title' => 'myPRO Edge condense dryer TD2-8',
            'summary' => 'Compact condense dryer for smaller laundry rooms without external venting.',
            'image_path' => 'images/pages/semi-professional/Condense dryertd2-8.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPRO Edge', 'Type' => 'Condense dryer',
                    'Install' => 'Freestanding',
                ],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'Heat Pump Dryer TD2-9HP', 'slug' => 'td2-9hp', 'capacity' => null,
            'title' => 'myPRO Edge heat pump dryer TD2-9HP',
            'summary' => 'Heat pump dryer for sites prioritising running costs and gentler drying across daily loads.',
            'image_path' => 'images/pages/semi-professional/Heat pump dryers TD2-9HP.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPRO Edge', 'Type' => 'Heat pump dryer',
                    'Install' => 'Freestanding',
                ],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'myPRO Steam Ironer IS1103', 'slug' => 'is1103', 'capacity' => null,
            'title' => 'myPRO steam ironer IS1103',
            'summary' => 'A myPRO steam ironer for practical garment and flatwork finishing alongside washing and drying.',
            'image_path' => 'images/pages/semi-professional/IS1103.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPRO', 'Type' => 'Steam ironer',
                    'Install' => 'Freestanding',
                ],
                'Dimensions' => [
                    'Width' => '1120 mm', 'Depth' => '400 mm', 'Height' => '1050 mm',
                ],
            ],
            'sectors' => [],
        ],
        [
            'name' => 'myPRO Steam Ironer IS185', 'slug' => 'is185', 'capacity' => null,
            'title' => 'myPRO steam ironer IS185',
            'summary' => 'A foldable myPRO steam ironer for sites that need a more consistent finish than hand ironing alone.',
            'image_path' => 'images/pages/semi-professional/myPRO - IronersIS185.jpg',
            'specs' => [
                'Main specification' => [
                    'Range' => 'myPRO', 'Type' => 'Steam ironer, foldable',
                    'Install' => 'Freestanding',
                ],
                'Dimensions' => [
                    'Width' => '940 mm', 'Depth' => '400 mm', 'Height' => '1050 mm',
                ],
            ],
            'sectors' => [],
        ],
    ],

    // ── Accessories & Consumables ─────────────────────────────────────────────
    'accessories' => [
        [
            'name' => 'Detergents & Consumables', 'slug' => 'detergents-consumables', 'capacity' => null,
            'title' => 'Laundry detergents and consumables',
            'summary' => 'Detergents, dosing products and consumables to keep commercial laundry equipment and workflows running. Irish Laundry Systems can advise on the right products for your equipment and process.',
            'image_path' => 'images/shared/Strip1.jpeg',
            'specs' => [
                'Main specification' => ['Type' => 'Consumables & accessories', 'Includes' => 'Detergents, dosing, parts and supporting items'],
            ],
            'sectors' => [],
        ],
    ],

    // ── Finishing Equipment ───────────────────────────────────────────────────
    // One detail page per type; the seeder resolves the image from the first
    // available model file and derives the spec table from group + models.
    'finishing-equipment' => [
        ['name' => 'Traditional Form Finishers', 'slug' => 'traditional-form-finishers', 'group' => 'Form & Shirt Finishers',
         'summary' => 'Form finishers that shape and finish jackets, coats and garments on a heated, inflated form.', 'models' => ['FF1', 'FF2', 'FF3'],
         'specs' => [
             'Specifications' => ['Type' => 'Form & Shirt Finishers', 'Models' => 'FF1, FF2, FF3'],
             'FF1 — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '15-18', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '500-600', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => '0'],
             'FF1 — Dimensions' => ['Width' => '580 mm', 'Depth' => '1200 mm', 'Height' => '1600 mm', 'Weight, net' => '77 kg', 'Weight, crated' => '110 kg'],
             'FF2 — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '15-18', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '500-600', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => 'DN 8'],
             'FF2 — Dimensions' => ['Width' => '580 mm', 'Depth' => '1200 mm', 'Height' => '1600 mm', 'Weight, net' => '77 kg', 'Weight, crated' => '110 kg'],
             'FF3 — Connections' => ['Air consumption, l/min' => '0', 'Compressed air, DN' => '0'],
             'FF3 — Dimensions' => ['Width' => '610 mm', 'Depth' => '1470 mm', 'Height' => '1490 mm', 'Weight, net' => '135 kg', 'Weight, crated' => '157 kg'],
         ]],
        ['name' => 'Multi-Form Finishers', 'slug' => 'multi-form-finishers', 'group' => 'Form & Shirt Finishers',
         'summary' => 'Multi-form finishers for higher-volume garment shaping across a wider range of garment types.', 'models' => ['FFM1', 'FFM2'],
         'specs' => [
             'Specifications' => ['Type' => 'Form & Shirt Finishers', 'Models' => 'FFM1, FFM2'],
             'FFM1 — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '25-30', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '500-500', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => 'DN 8'],
             'FFM1 — Dimensions' => ['Width' => '2200 mm', 'Depth' => '1535 mm', 'Height' => '1985 mm', 'Weight, net' => '290 kg', 'Weight, crated' => '300 kg'],
             'FFM2 — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '25-30', 'Compressed air, DN' => 'DN 8'],
             'FFM2 — Dimensions' => ['Width' => '2200 mm', 'Depth' => '1535 mm', 'Height' => '1985 mm', 'Weight, net' => '320 kg', 'Weight, crated' => '330 kg'],
         ]],
        ['name' => 'Tensioning Form Finishers', 'slug' => 'tensioning-form-finishers', 'group' => 'Form & Shirt Finishers',
         'summary' => 'Tensioning form finishers that stretch and finish garments for a sharper, more uniform result.', 'models' => ['FFT6-WC']],
        ['name' => 'Vacuum Ironing Tables', 'slug' => 'vacuum-ironing-tables', 'group' => 'Ironing Tables',
         'summary' => 'Heated vacuum ironing tables for everyday linen, uniforms and garment finishing.', 'models' => ['FIT1', 'FIT2A', 'FIT2B', 'FIT3A', 'FIT3B'],
         'specs' => [
             'Specifications' => ['Type' => 'Ironing Tables', 'Models' => 'FIT1, FIT2A, FIT2B, FIT3A, FIT3B'],
             'FIT1 — Connections' => ['Air consumption, l/min' => '0', 'Compressed air, DN' => '0'],
             'FIT1 — Dimensions' => ['Width' => '1420 mm', 'Depth' => '440 mm', 'Height' => '850 mm', 'Weight, net' => '24.5 kg'],
             'FIT2A — Connections' => ['Air consumption, l/min' => '0', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-500', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => '0'],
             'FIT2A — Dimensions' => ['Width' => '1520 mm', 'Depth' => '435 mm', 'Height' => '920 mm', 'Weight, net' => '70 kg', 'Weight, crated' => '73 kg', 'Shipping volume' => '0.79 m³'],
             'FIT2B — Connections' => ['Air consumption, l/min' => '0', 'Compressed air, DN' => '0'],
             'FIT2B — Dimensions' => ['Width' => '1600 mm', 'Depth' => '470 mm', 'Height' => '1200 mm', 'Weight, net' => '100 kg', 'Weight, crated' => '110 kg', 'Shipping volume' => '0.9 m³'],
             'FIT3A — Dimensions' => ['Width' => '1390 mm', 'Depth' => '540 mm', 'Height' => '790 mm', 'Weight, net' => '50 kg', 'Weight, crated' => '60 kg', 'Shipping volume' => '0.59 m³'],
             'FIT3B — Dimensions' => ['Width' => '1630 mm', 'Depth' => '635 mm', 'Height' => '790 mm', 'Weight, net' => '64 kg', 'Weight, crated' => '74 kg', 'Shipping volume' => '0.82 m³'],
         ]],
        ['name' => 'Wet Cleaning Ironing Tables', 'slug' => 'wet-cleaning-ironing-tables', 'group' => 'Ironing Tables',
         'summary' => 'Vacuum ironing tables set up for wet cleaning and delicate textile finishing.', 'models' => ['FIT1-WC', 'FIT2-WC'],
         'specs' => [
             'Specifications' => ['Type' => 'Ironing Tables', 'Models' => 'FIT1-WC, FIT2-WC'],
             'FIT1-WC — Connections' => ['Steam consumption, kg/h' => '3', 'Steam connection, DN' => 'DN 10', 'Rec. steam pressure, kPa' => '300-500', 'Condensate, DN' => 'DN 10'],
             'FIT1-WC — Dimensions' => ['Width' => '2135 mm', 'Depth' => '1435 mm', 'Height' => '2080 mm', 'Weight, net' => '130 kg', 'Weight, crated' => '150 kg'],
             'FIT2-WC — Dimensions' => ['Width' => '2135 mm', 'Depth' => '1435 mm', 'Height' => '2080 mm', 'Weight, net' => '170 kg', 'Weight, crated' => '190 kg'],
         ]],
        ['name' => 'Vac / Blow / Steaming Ironing Tables', 'slug' => 'vac-blow-steaming-ironing-tables', 'group' => 'Ironing Tables',
         'summary' => 'Ironing tables with vacuum, blowing and steaming for more demanding garment finishing.', 'models' => ['FIT4A', 'FIT4B'],
         'specs' => [
             'Specifications' => ['Type' => 'Ironing Tables', 'Models' => 'FIT4A, FIT4B'],
             'FIT4A — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '3', 'Steam connection, DN' => 'DN 10', 'Rec. steam pressure, kPa' => '400-500', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => '0'],
             'FIT4A — Dimensions' => ['Width' => '1695 mm', 'Depth' => '500 mm', 'Height' => '2060 mm', 'Weight, net' => '128 kg', 'Weight, crated' => '138 kg', 'Shipping volume' => '1.75 m³'],
             'FIT4B — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '3', 'Steam connection, DN' => 'DN 10', 'Rec. steam pressure, kPa' => '400-500', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => 'DN 8'],
             'FIT4B — Dimensions' => ['Width' => '1845 mm', 'Depth' => '500 mm', 'Height' => '2060 mm', 'Weight, net' => '138 kg', 'Weight, crated' => '148 kg', 'Shipping volume' => '1.9 m³'],
         ]],
        ['name' => 'Rectangular Vacuum Ironing Tables', 'slug' => 'rectangular-vacuum-ironing-tables', 'group' => 'Ironing Tables',
         'summary' => 'Large rectangular vacuum tables for higher-volume flat and garment finishing.', 'models' => ['FIT5A', 'FIT5B'],
         'specs' => [
             'Specifications' => ['Type' => 'Ironing Tables', 'Models' => 'FIT5A, FIT5B'],
             'FIT5A — Connections' => ['Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-500', 'Condensate, DN' => 'DN 15'],
             'FIT5A — Dimensions' => ['Width' => '1200 mm', 'Depth' => '700 mm', 'Height' => '880 mm', 'Weight, net' => '82 kg', 'Weight, crated' => '92 kg'],
             'FIT5B — Connections' => ['Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-500', 'Condensate, DN' => 'DN 15'],
             'FIT5B — Dimensions' => ['Width' => '1600 mm', 'Depth' => '850 mm', 'Height' => '880 mm', 'Weight, net' => '118 kg', 'Weight, crated' => '130 kg'],
         ]],
        ['name' => 'Vacuum / Blowing Ironing Tables', 'slug' => 'vacuum-blowing-ironing-tables', 'group' => 'Ironing Tables',
         'summary' => 'Vacuum and blowing ironing tables for shaping and finishing a wide range of garments.', 'models' => ['FIT6A', 'FIT6B', 'FIT7'],
         'specs' => [
             'Specifications' => ['Type' => 'Ironing Tables', 'Models' => 'FIT6A, FIT6B, FIT7'],
             'FIT6A — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '3', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-500', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => 'DN 6'],
             'FIT6A — Dimensions' => ['Width' => '2161 mm', 'Depth' => '601 mm', 'Height' => '2554 mm', 'Weight, net' => '165 kg', 'Weight, crated' => '180 kg', 'Shipping volume' => '3.32 m³'],
             'FIT6B — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '3', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-500', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => 'DN 6'],
             'FIT6B — Dimensions' => ['Width' => '2161 mm', 'Depth' => '601 mm', 'Height' => '2554 mm', 'Weight, net' => '165 kg', 'Weight, crated' => '180 kg', 'Shipping volume' => '3.32 m³'],
         ]],
        ['name' => 'Dry Work Presses · Air Operated', 'slug' => 'dry-work-presses-air-operated', 'group' => 'Presses',
         'summary' => 'Air-operated presses for fast, consistent pressing of dry-cleaned garments.', 'models' => ['FPA1-D', 'FPA2-D', 'FPA3-D', 'FPA4-D'],
         'specs' => [
             'Specifications' => ['Type' => 'Presses', 'Models' => 'FPA1-D, FPA2-D, FPA3-D, FPA4-D'],
             'FPA1-D — Connections' => ['Air consumption, l/min' => '0', 'Vacuum air, m³/h' => '400', 'Steam connection, DN' => 'DN 15', 'Condensate, DN' => 'DN 15', 'Central vacuum, mm' => '70', 'Vacuum depression, mm H₂O' => '250'],
             'FPA1-D — Dimensions' => ['Width' => '1345 mm', 'Depth' => '1065 mm', 'Height' => '1505 mm', 'Weight, net' => '240 kg', 'Weight, crated' => '250 kg', 'Shipping volume' => '2.16 m³'],
         ]],
        ['name' => 'Dry Work Presses · Manually Operated', 'slug' => 'dry-work-presses-manually-operated', 'group' => 'Presses',
         'summary' => 'Manually operated presses for dry work where a compact, lower-cost press fits the room.', 'models' => ['FPM1-D', 'FPM2-D', 'FPM3-D', 'FPM4-D'],
         'specs' => [
             'Specifications' => ['Type' => 'Presses', 'Models' => 'FPM1-D, FPM2-D, FPM3-D, FPM4-D'],
             'FPM1-D — Connections' => ['Steam consumption, kg/h' => '14-25', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15'],
             'FPM1-D — Dimensions' => ['Width' => '1470 mm', 'Depth' => '1135 mm', 'Height' => '1270 mm', 'Weight, net' => '279 kg', 'Weight, crated' => '315 kg'],
             'FPM2-D — Connections' => ['Steam consumption, kg/h' => '14-25', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15'],
             'FPM2-D — Dimensions' => ['Width' => '1470 mm', 'Depth' => '1135 mm', 'Height' => '1270 mm', 'Weight, net' => '305 kg', 'Weight, crated' => '315 kg'],
             'FPM3-D — Connections' => ['Steam consumption, kg/h' => '14-25', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15'],
             'FPM3-D — Dimensions' => ['Width' => '1470 mm', 'Depth' => '1135 mm', 'Height' => '1270 mm', 'Weight, net' => '279 kg', 'Weight, crated' => '330 kg'],
             'FPM4-D — Connections' => ['Steam consumption, kg/h' => '14-25', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15'],
             'FPM4-D — Dimensions' => ['Width' => '1470 mm', 'Depth' => '1135 mm', 'Height' => '1270 mm', 'Weight, net' => '279 kg', 'Weight, crated' => '330 kg'],
         ]],
        ['name' => 'Laundry Presses · Air Operated', 'slug' => 'laundry-presses-air-operated', 'group' => 'Presses',
         'summary' => 'Air-operated laundry presses for high-output pressing of washed garments and workwear.', 'models' => ['FPA1-WC', 'FPA2-WC', 'FPA3-WC', 'FPA4-WC', 'FPA5-WC', 'FPA6-WC'],
         'specs' => [
             'Specifications' => ['Type' => 'Presses', 'Models' => 'FPA1-WC, FPA2-WC, FPA3-WC, FPA4-WC, FPA5-WC, FPA6-WC'],
             'FPA1-WC — Connections' => ['Air consumption, l/min' => '0', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15'],
             'FPA1-WC — Dimensions' => ['Width' => '1350 mm', 'Depth' => '1110 mm', 'Height' => '1500 mm', 'Weight, net' => '245 kg', 'Weight, crated' => '245 kg'],
             'FPA2-WC — Connections' => ['Air consumption, l/min' => '0', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '700', 'Condensate, DN' => 'DN 15'],
             'FPA2-WC — Dimensions' => ['Width' => '1350 mm', 'Depth' => '1100 mm', 'Height' => '1500 mm', 'Weight, net' => '230 kg', 'Weight, crated' => '245 kg'],
             'FPA3-WC — Connections' => ['Air consumption, l/min' => '0', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15'],
             'FPA3-WC — Dimensions' => ['Width' => '1040 mm', 'Depth' => '1100 mm', 'Height' => '1510 mm', 'Weight, net' => '185 kg', 'Weight, crated' => '200 kg'],
             'FPA4-WC — Connections' => ['Air consumption, l/min' => '0', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '500-600', 'Condensate, DN' => 'DN 15'],
             'FPA4-WC — Dimensions' => ['Width' => '1345 mm', 'Depth' => '1130 mm', 'Height' => '1570 mm', 'Weight, net' => '285 kg', 'Weight, crated' => '295 kg'],
             'FPA5-WC — Connections' => ['Air consumption, l/min' => '0', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15'],
             'FPA5-WC — Dimensions' => ['Width' => '1345 mm', 'Depth' => '1065 mm', 'Height' => '1505 mm', 'Weight, net' => '240 kg', 'Weight, crated' => '250 kg'],
             'FPA6-WC — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '12-13', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '600', 'Condensate, DN' => 'DN 15'],
             'FPA6-WC — Dimensions' => ['Width' => '970 mm', 'Depth' => '1135 mm', 'Height' => '1220 mm', 'Weight, net' => '300 kg', 'Weight, crated' => '295 kg'],
         ]],
        ['name' => 'Laundry Presses · Manually Operated', 'slug' => 'laundry-presses-manually-operated', 'group' => 'Presses',
         'summary' => 'Manually operated laundry presses for steady pressing in smaller laundry rooms.', 'models' => ['FPM-WC'],
         'specs' => [
             'Specifications' => ['Type' => 'Presses', 'Models' => 'FPM-WC'],
             'FPM-WC — Connections' => ['Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15'],
             'FPM-WC — Dimensions' => ['Width' => '1470 mm', 'Depth' => '1135 mm', 'Height' => '1270 mm', 'Weight, net' => '313 kg', 'Weight, crated' => '363 kg'],
         ]],
        ['name' => 'Finishing Cabinets', 'slug' => 'finishing-cabinets', 'group' => 'Finishing Cabinets',
         'summary' => 'Finishing cabinets that steam, dry and refresh garments without manual ironing.', 'models' => ['FC48'],
         'specs' => [
             'Specifications' => ['Type' => 'Finishing Cabinets', 'Models' => 'FC48'],
             'FC48 — Connections' => ['Steam consumption, kg/h' => '0.22', 'Steam connection, DN' => 'DN 20', 'Rec. steam pressure, kPa' => '600-1000', 'Condensate, DN' => 'DN 15'],
             'FC48 — Dimensions' => ['Width' => '870 mm', 'Depth' => '1320 mm', 'Height' => '1975 mm', 'Weight, net' => '320 kg', 'Weight, crated' => '535 kg'],
         ]],
        ['name' => 'Rotary Finishing Cabinets', 'slug' => 'rotary-finishing-cabinets', 'group' => 'Finishing Cabinets',
         'summary' => 'Rotary finishing cabinets for higher-capacity garment steaming and finishing.', 'models' => ['FRC1', 'FRC2', 'FRC3'],
         'specs' => [
             'Specifications' => ['Type' => 'Finishing Cabinets', 'Models' => 'FRC1, FRC2, FRC3'],
             'FRC1 — Connections' => ['Steam consumption, kg/h' => '16-20', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15'],
             'FRC1 — Dimensions' => ['Width' => '1060 mm', 'Depth' => '1050 mm', 'Height' => '2040 mm', 'Weight, net' => '203 kg', 'Weight, crated' => '235 kg'],
             'FRC3 — Connections' => ['Steam consumption, kg/h' => '16-20', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '500', 'Condensate, DN' => 'DN 15'],
             'FRC3 — Dimensions' => ['Width' => '1100 mm', 'Depth' => '1050 mm', 'Height' => '2040 mm', 'Weight, net' => '205 kg', 'Weight, crated' => '235 kg'],
         ]],
        ['name' => 'Spotting Tables', 'slug' => 'spotting-tables', 'group' => 'Spotting Tables & Cabinets',
         'summary' => 'Spotting tables for targeted stain removal and pre-treatment ahead of cleaning.', 'models' => ['FSU1', 'FSU2', 'FSU3', 'FSU7'],
         'specs' => [
             'Specifications' => ['Type' => 'Spotting Tables', 'Models' => 'FSU1, FSU2, FSU3, FSU7'],
             'FSU1 — Connections' => ['Air consumption, l/min' => '0', 'Vacuum air, m³/h' => '0', 'Steam connection, DN' => 'DN 10', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => 'DN 8'],
             'FSU1 — Dimensions' => ['Width' => '1500 mm', 'Depth' => '700 mm', 'Height' => '1355 mm', 'Weight, net' => '45 kg', 'Weight, crated' => '55 kg'],
             'FSU2 — Connections' => ['Air consumption, l/min' => '0', 'Vacuum air, m³/h' => '0', 'Steam connection, DN' => 'DN 10', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => 'DN 8'],
             'FSU2 — Dimensions' => ['Width' => '1500 mm', 'Depth' => '700 mm', 'Height' => '1355 mm', 'Weight, net' => '45 kg', 'Weight, crated' => '55 kg'],
             'FSU3 — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '5-10', 'Vacuum air, m³/h' => '0', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '400-600', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => 'DN 8'],
             'FSU3 — Dimensions' => ['Width' => '1530 mm', 'Depth' => '515 mm', 'Height' => '920 mm', 'Weight, net' => '65 kg', 'Weight, crated' => '75 kg'],
         ]],
        ['name' => 'Spotting Cabinet', 'slug' => 'spotting-cabinet', 'group' => 'Spotting Tables & Cabinets',
         'summary' => 'Spotting cabinets with integrated extraction for safe, contained stain treatment.', 'models' => ['FSU4']],
        ['name' => 'Steam Boilers', 'slug' => 'steam-boilers', 'group' => 'Steam Boilers',
         'summary' => 'Steam boilers that supply consistent steam to presses, tables and finishing equipment.', 'models' => ['FSB3.3', 'FSB18C', 'FSB24C'],
         'specs' => [
             'Specifications' => ['Type' => 'Steam Boilers', 'Models' => 'FSB3.3, FSB18C, FSB24C'],
             'FSB18C — Connections' => ['Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '500'],
             'FSB18C — Dimensions' => ['Width' => '550 mm', 'Depth' => '810 mm', 'Height' => '1230 mm', 'Weight, net' => '110 kg'],
             'FSB24C — Dimensions' => ['Width' => '550 mm', 'Depth' => '810 mm', 'Height' => '1230 mm', 'Weight, net' => '110 kg'],
         ]],
        ['name' => 'Trouser Topper', 'slug' => 'trouser-topper', 'group' => 'Trouser Toppers',
         'summary' => 'Trouser toppers that finish the upper trouser section quickly and consistently.', 'models' => ['FTT1'],
         'specs' => [
             'Specifications' => ['Type' => 'Trouser Toppers', 'Models' => 'FTT1'],
             'FTT1 — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '15-20', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '500-600', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => 'DN 8'],
             'FTT1 — Dimensions' => ['Width' => '875 mm', 'Depth' => '1140 mm', 'Height' => '2025 mm', 'Weight, net' => '132 kg', 'Weight, crated' => '152 kg'],
         ]],
        ['name' => 'Trouser Topper · Creased Trousers', 'slug' => 'trouser-topper-creased-trousers', 'group' => 'Trouser Toppers',
         'summary' => 'Trouser toppers set up to finish creased trousers with a sharp, defined line.', 'models' => ['FTT2'],
         'specs' => [
             'Specifications' => ['Type' => 'Trouser Toppers', 'Models' => 'FTT2'],
             'FTT2 — Connections' => ['Air consumption, l/min' => '0', 'Steam consumption, kg/h' => '15-20', 'Steam connection, DN' => 'DN 15', 'Rec. steam pressure, kPa' => '500-600', 'Condensate, DN' => 'DN 15', 'Compressed air, DN' => 'DN 8'],
             'FTT2 — Dimensions' => ['Width' => '915 mm', 'Depth' => '1210 mm', 'Height' => '2025 mm', 'Weight, net' => '170 kg', 'Weight, crated' => '190 kg'],
         ]],
    ],

];
