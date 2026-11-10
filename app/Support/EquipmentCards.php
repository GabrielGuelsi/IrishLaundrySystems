<?php

namespace App\Support;

use Illuminate\Support\Str;

/**
 * Product cards shown on each equipment category page. The category views and the
 * admin (read-only Range / Tags) both read from here, so they always match.
 */
class EquipmentCards
{
    /** Cards on /equipment/commercial-washers. */
    public static function washerFamilies(): array
    {
        return [
            // Core Line 6000 Washer Range
            ['group' => 'Core Line 6000 Washer Range', 'name' => 'WS6 — Line 6000 High-Spin Washer', 'slug' => 'ws6', 'route' => route('equipment.product', ['category' => 'commercial-washers', 'product' => 'ws6']), 'line' => 'Line 6000 High Spin', 'topLine' => 'Line 6000 · 8–35 kg', 'ranges' => ['6–9 kg','11–14 kg','20–35 kg'], 'fit' => 'High-spin washer range for busy laundry rooms needing faster extraction and lower drying demand.', 'badges' => ['Automatic Savings','Power Balance','ClarusVibe','ERGOCERT'], 'tech' => ['Automatic Savings','Power Balance','ClarusVibe','ERGOCERT'], 'img' => '/images/pages/commercial-washers/WS6 — Line 6000 High-Spin Washer.jpg'],
            ['group' => 'Core Line 6000 Washer Range', 'name' => 'WN6 — Line 6000 Normal-Spin Washer', 'slug' => 'wn6', 'route' => route('equipment.product', ['category' => 'commercial-washers', 'product' => 'wn6']), 'line' => 'Line 6000 Normal Spin', 'topLine' => 'Line 6000 · 8–35 kg', 'ranges' => ['6–9 kg','11–14 kg','20–35 kg'], 'fit' => 'Normal-spin washer range for sites where wash performance, room fit and long-term support need to stay connected.', 'badges' => ['Automatic Savings','Integrated Savings','CompassPro','ERGOCERT'], 'tech' => ['Automatic Savings','Integrated Savings','CompassPro','ERGOCERT'], 'img' => '/images/pages/commercial-washers/WN6 — Line 6000 Normal-Spin Washer.jpg'],
            ['group' => 'Core Line 6000 Washer Range', 'name' => 'WH6-CV — ClarusVibe Washer Variants', 'slug' => 'wh6-cv', 'route' => route('equipment.product', ['category' => 'commercial-washers', 'product' => 'wh6-cv']), 'line' => 'ClarusVibe Variants', 'topLine' => 'Line 6000 · ClarusVibe variants · 7–33 kg', 'ranges' => ['6–9 kg','11–14 kg','20–35 kg'], 'fit' => 'ClarusVibe washer variants for sites that need clearer programme control and a more guided operator experience.', 'badges' => ['ClarusVibe','Automatic Savings','Integrated Savings','ERGOCERT'], 'tech' => ['ClarusVibe','Automatic Savings','Integrated Savings','Intelligent Dosing','ERGOCERT'], 'img' => '/images/pages/commercial-washers/commercialwasher.webp'],
            ['group' => 'Core Line 6000 Washer Range', 'name' => 'WH6-LAC — Lagoon Advanced Care Washer Variants', 'slug' => 'wh6-lac', 'route' => route('equipment.product', ['category' => 'commercial-washers', 'product' => 'wh6-lac']), 'line' => 'Lagoon / Wet Cleaning Variants', 'topLine' => 'Line 6000 · Lagoon Advanced Care variants · 6–33 kg', 'ranges' => ['6–9 kg','11–14 kg','20–35 kg'], 'fit' => 'Washer variants connected to Lagoon Advanced Care for specialist wet cleaning and textile care.', 'badges' => ['Lagoon Advanced Care','Efficient Dosing','ClarusVibe','Textile Care'], 'tech' => ['Efficient Dosing','ClarusVibe'], 'img' => '/images/pages/commercial-washers/lacandlag.jpg'],
            ['group' => 'Core Line 6000 Washer Range', 'name' => 'WH6-LAG — Lagoon Washer Variants', 'slug' => 'wh6-lag', 'route' => route('equipment.product', ['category' => 'commercial-washers', 'product' => 'wh6-lag']), 'line' => 'Lagoon / Wet Cleaning Variants', 'topLine' => 'Line 6000 · Lagoon variant · 14 kg', 'ranges' => ['11–14 kg'], 'fit' => 'Lagoon washer variant for sites managing delicate garments and specialist care processes.', 'badges' => ['Lagoon','Textile Care','ClarusVibe','Efficient Dosing'], 'tech' => ['ClarusVibe','Efficient Dosing'], 'img' => '/images/pages/commercial-washers/lacandlag.jpg'],
            // Compact / Heavy-Duty Washer Options
            ['group' => 'Compact / Heavy-Duty Washer Options', 'name' => 'Quickwash QWC', 'slug' => 'quickwash-qwc', 'route' => route('equipment.product', ['category' => 'commercial-washers', 'product' => 'quickwash-qwc']), 'line' => 'Compact / Small Business', 'topLine' => 'Compact / Small Business', 'ranges' => ['6–9 kg'], 'fit' => 'Compact washer option for sites that need professional laundry performance in a smaller footprint.', 'badges' => ['Compact Fit','Professional Wash','Small Business','Easy Operation'], 'tech' => [], 'img' => '/images/pages/commercial-washers/Quickwash QWC.jpg'],
            ['group' => 'Compact / Heavy-Duty Washer Options', 'name' => 'PW9C Compact Washer', 'slug' => 'pw9c', 'route' => route('equipment.product', ['category' => 'commercial-washers', 'product' => 'pw9c']), 'line' => 'Compact / Small Business', 'topLine' => 'Compact · 9 kg', 'ranges' => ['6–9 kg'], 'fit' => 'Compact professional washer for smaller sites needing more than domestic laundry equipment.', 'badges' => ['Compact Fit','Professional Wash','Small Site','Support Available'], 'tech' => [], 'img' => '/images/pages/commercial-washers/PW9C.jpg'],
            ['group' => 'Compact / Heavy-Duty Washer Options', 'name' => 'W4-Series Washer-Extractors', 'slug' => 'w4-series', 'route' => route('equipment.product', ['category' => 'commercial-washers', 'product' => 'w4-series']), 'line' => 'Heavy-Duty Washer-Extractors', 'topLine' => 'Heavy Duty · 40 kg+', 'ranges' => ['40 kg+'], 'fit' => 'Heavy-duty washer-extractor route for large-volume laundry rooms needing strong throughput and long-term support.', 'badges' => ['High Capacity','Heavy Duty','Service Support','Long-Term Use'], 'tech' => [], 'img' => '/images/pages/commercial-washers/W4-Series Washer-Extractors.png'],
            // Specialist Washing Routes
            ['group' => 'Specialist Washing Routes', 'name' => 'myPRO / myPRO XL', 'slug' => 'mypro', 'route' => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-washer']), 'line' => 'Semi-Professional', 'topLine' => 'Semi-Professional', 'ranges' => ['6–9 kg'], 'fit' => 'Semi-professional washer route for smaller sites needing more than domestic equipment.', 'badges' => ['Small Site','Professional Wash','Compact Fit','Support Available'], 'tech' => [], 'img' => '/images/pages/semi-professional/mypro-hp-front.webp'],
            ['group' => 'Specialist Washing Routes', 'name' => 'Barrier Washers', 'slug' => 'barrier', 'route' => route('equipment.category', 'barrier-washers'), 'line' => 'Barrier Washers', 'topLine' => 'Hygiene-Critical Laundry', 'ranges' => ['11–14 kg','20–35 kg','40 kg+'], 'fit' => 'Barrier washer route for laundry rooms where soiled and clean handling must stay separate.', 'badges' => ['Clean / Dirty Separation','Hygiene Watchdog','ERGOCERT','AIDO'], 'tech' => ['ERGOCERT'], 'img' => '/images/pages/barrier-washers/line6000-barrier-washer.webp'],
            ['group' => 'Specialist Washing Routes', 'name' => 'Lagoon Advanced Care', 'slug' => 'lagoon', 'route' => route('equipment.product', ['category' => 'wet-cleaning', 'product' => 'lagoon-advanced-care']), 'line' => 'Lagoon / Wet Cleaning Variants', 'topLine' => 'Specialist Wet Cleaning', 'ranges' => ['11–14 kg','20–35 kg'], 'fit' => 'Specialist wet cleaning route for delicate garments, textile care and advanced fabric handling.', 'badges' => ['Wet Cleaning','Textile Care','Efficient Dosing','Lagoon'], 'tech' => ['Efficient Dosing'], 'img' => '/images/pages/finishing-equipment/FC48.jpg'],
        ];
    }

    /** Cards on /equipment/tumble-dryers. */
    public static function dryerFamilies(): array
    {
        return [
            ['name' => 'TD6-6',    'slug' => 'td6-6', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 6–7 kg',   'ranges' => ['6–10 kg'],  'fit' => 'Single pocket commercial tumble dryer (6–7 kg) with Moisture Balance and CompassPro control.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-6.jpg'],
            ['name' => 'TD6-11',   'slug' => 'td6-11', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 11 kg',    'ranges' => ['11–20 kg'], 'fit' => 'Single pocket commercial tumble dryer for 11 kg loads.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-11.jpg'],
            ['name' => 'TD6-14',   'slug' => 'td6-14', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 14 kg',    'ranges' => ['11–20 kg'], 'fit' => 'Single pocket commercial tumble dryer for 14 kg loads.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-14.webp'],
            ['name' => 'TD6-16',   'slug' => 'td6-16', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 16–20 kg', 'ranges' => ['11–20 kg'], 'fit' => 'Single pocket commercial tumble dryer for 16–20 kg loads.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-16.jpg'],
            ['name' => 'TD6-30',   'slug' => 'td6-30', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 30–37 kg', 'ranges' => ['30–37 kg'], 'fit' => 'Single pocket commercial tumble dryer for 30–37 kg loads.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-30.jpg'],
            ['name' => 'TD6-45',   'slug' => 'td6-45', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 45 kg',    'ranges' => ['45–60 kg'], 'fit' => 'Single pocket commercial tumble dryer for 45 kg loads.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-45.jpg'],
            ['name' => 'TD6-45SLD','slug' => 'td6-45sld', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 45–60 kg (SLD)', 'ranges' => ['45–60 kg'], 'fit' => 'Large single pocket dryer (SLD, 45–60 kg) for high-volume drying.', 'badges' => ['Moisture Balance','High Capacity','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-45SLD.jpg'],
            ['name' => 'TD6-LAC',  'slug' => 'td6-lac', 'line' => 'Lagoon Advanced Care', 'topLine' => 'Lagoon Advanced Care · 7–37 kg', 'ranges' => ['11–20 kg','30–37 kg'], 'fit' => 'Lagoon Advanced Care dryer variants (TD6-7/14/20/30/37 LAC) for specialist textile care.', 'badges' => ['Lagoon Advanced Care','Textile Care','Moisture Balance','CompassPro'], 'tech' => ['Moisture Balance','CompassPro'], 'img' => '/images/pages/dryers/line6000-tumble-dryer.webp'],
            ['name' => 'TD6-17S',  'slug' => 'stacked-dryers', 'line' => 'Stacked Dryers', 'topLine' => 'Stacked · 17–24 kg', 'ranges' => ['Stacked formats'], 'fit' => 'Stacked tumble dryer (17–24 kg) — two dryers in one footprint to protect floor space.', 'badges' => ['Stacked Format','Space Saving','Commercial Drying'], 'tech' => ['Moisture Balance'], 'img' => '/images/pages/dryers/TD6-17S.jpg'],
            ['name' => 'Quickdry Condense', 'slug' => 'quickdry-condense', 'line' => 'Compact / Small Business', 'topLine' => 'Compact', 'ranges' => ['Compact / small-site drying'], 'fit' => 'Condense dryer for compact and small-site professional drying.', 'badges' => ['Condense Drying','Compact Fit','Small Business'], 'tech' => [], 'img' => '/images/pages/dryers/Quickdry%20Condense.jpg'],
            ['name' => 'PD9C',     'slug' => 'pd9c', 'line' => 'Compact / Small Business', 'topLine' => 'Compact · 9 kg', 'ranges' => ['Compact / small-site drying'], 'fit' => 'Compact professional dryer (9 kg) for smaller sites needing more than domestic drying.', 'badges' => ['Compact Fit','Professional Drying','Small Site'], 'tech' => [], 'img' => '/images/pages/dryers/PD9C.jpg'],
            ['name' => 'T4900CR',  'slug' => 't-series', 'line' => 'Heavy-Duty Dryers', 'topLine' => 'Heavy Duty · 45–60 kg', 'ranges' => ['45–60 kg'], 'fit' => 'Heavy-duty tumble dryer (T4900CR / T41200CR, 45–60 kg) for high-volume laundry drying throughput.', 'badges' => ['High Capacity','Heavy Duty','Commercial Drying'], 'tech' => [], 'img' => '/images/pages/dryers/T4900CR.jpg'],
        ];
    }

    /** Cards on /equipment/barrier-washers. */
    public static function barrierFamilies(): array
    {
        $bwSites  = ['Healthcare','Care Facilities','Pharmaceutical','Food Processing','Commercial Laundry'];
        $bwBadges = ['ERGOCERT','Hygiene Watchdog','AIDO','Power Balance'];
        $bwFit    = 'Line 6000 Evolution barrier washer with clean/dirty separation, guided operation and long-term support.';
        return [
            ['name' => 'WB6-13',  'slug' => 'wb6-13',  'profile' => 'Line 6000 Evolution', 'capLabel' => '13–18 kg',  'kg' => ['13','18'],      'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/pages/barrier-washers/WB6-13.jpg'],
            ['name' => 'WB6-20',  'slug' => 'wb6-20',  'profile' => 'Line 6000 Evolution', 'capLabel' => '20–27 kg',  'kg' => ['20','27'],      'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/pages/barrier-washers/WB6-20.jpg'],
            ['name' => 'WB6-35',  'slug' => 'wb6-35',  'profile' => 'Line 6000 Evolution', 'capLabel' => '35–70 kg',  'kg' => ['35','50','70'], 'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/pages/barrier-washers/WB6-35.jpg'],
            ['name' => 'WB6-110', 'slug' => 'wb6-110', 'profile' => 'Line 6000 Evolution', 'capLabel' => '90–110 kg', 'kg' => ['90','110'],     'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/pages/barrier-washers/WB6-110.jpg'],
        ];
    }

    /** Cards on /equipment/drying-cabinets. */
    public static function cabinetFamilies(): array
    {
        return [
            ['name' => 'DC6-4',    'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-4',   'type' => 'Standard',  'fit' => 'Single-door drying cabinet, 600 mm wide.',  'img' => '/images/pages/drying-cabinets/Standard%20Drying%20Cabinets.jpg'],
            ['name' => 'DC6-8',    'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-8',   'type' => 'Standard',  'fit' => 'Two-door drying cabinet, 1200 mm wide.',    'img' => '/images/pages/drying-cabinets/Standard%20Drying%20CabinetsDC6-8.jpg'],
            ['name' => 'DC6-14',   'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-14',  'type' => 'Standard',  'fit' => 'Two-door drying cabinet, 1800 mm wide.',    'img' => '/images/pages/drying-cabinets/standard-dc6-14.jpg'],
            ['name' => 'DC6-15WW', 'cat' => 'Standard Drying Cabinets',    'slug' => 'workwear-drying-cabinet',  'type' => 'Standard',  'fit' => 'Drying cabinet for workwear, work suits, shoes, gloves and flat drying.', 'img' => '/images/pages/drying-cabinets/workwear-dc6-15ww.jpg'],
            ['name' => 'DC7-4HP',  'cat' => 'Drying Cabinets – Heat Pump', 'slug' => 'dc7-4hp', 'type' => 'Heat Pump', 'fit' => 'Single-door heat pump drying cabinet, 600 mm wide.', 'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20Pumpdc7-4hp.jpg'],
            ['name' => 'DC7-4HPh', 'cat' => 'Drying Cabinets – Heat Pump', 'slug' => 'dc7-4hph','type' => 'Heat Pump', 'fit' => 'Single-door heat pump drying cabinet, 600 mm wide, with condensate tank.', 'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20PumpDC7-4HPH.jpg'],
            ['name' => 'DC7-8HP',  'cat' => 'Drying Cabinets – Heat Pump', 'slug' => 'dc7-8hp', 'type' => 'Heat Pump', 'fit' => 'Two-door heat pump drying cabinet, 1200 mm wide.', 'img' => '/images/pages/drying-cabinets/heatpump-dc7-10hp.jpg'],
            ['name' => 'DC7-10HP', 'cat' => 'Drying Cabinets – Heat Pump', 'slug' => 'dc7-10hp','type' => 'Heat Pump', 'fit' => 'Two-door heat pump drying cabinet, 1395 mm wide.', 'img' => '/images/pages/drying-cabinets/heatpump-dc7-10hp.jpg'],
            ['name' => 'DC6-14HP', 'cat' => 'Drying Cabinets – Heat Pump', 'slug' => 'dc6-14hp','type' => 'Heat Pump', 'fit' => 'Two-door heat pump drying cabinet, 1800 mm wide.', 'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20Pumpdc6-14hp.jpg'],
        ];
    }

    /** Cards on /equipment/ironers. */
    public static function ironerCards(): array
    {
        return [
            ['cyl' => 'Ø330 mm', 'delivery' => null, 'auto' => null,
             'name' => 'Ø330 mm Cylinder Ironers', 'slug' => 'cylinder-330mm', 'img' => '/images/pages/ironers/cylinder-330-ic633.jpg',
             'fit' => 'Mid-size cylinder ironers for steady on-premise finishing.',
             'widths' => [['w' => '1600 mm', 'm' => 'IC63316'], ['w' => '2000 mm', 'm' => 'IC63320']]],

            ['cyl' => 'Ø480 mm', 'delivery' => 'Front Delivery', 'auto' => 'No Automation',
             'name' => 'Ø480 Front Delivery — No Automation', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
             'fit' => 'Front-delivery ironing without automation, returned to the front of the machine.',
             'widths' => [['w' => '2100 mm', 'm' => 'IC64821'], ['w' => '2500 mm', 'm' => 'IC64825'], ['w' => '3200 mm', 'm' => 'IC64832']]],

            ['cyl' => 'Ø480 mm', 'delivery' => 'Front Delivery', 'auto' => 'Length Folding',
             'name' => 'Ø480 Front Delivery — Length Folding', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
             'fit' => 'Front delivery with length folding for finished, folded flatwork.',
             'widths' => [['w' => '2100 mm', 'm' => 'IC64821LF'], ['w' => '2500 mm', 'm' => 'IC64825LF'], ['w' => '3200 mm', 'm' => 'IC64832LF']]],

            ['cyl' => 'Ø480 mm', 'delivery' => 'Front Delivery', 'auto' => 'Feeding & Length Folding',
             'name' => 'Ø480 Front Delivery — Feeding & Length Folding', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
             'fit' => 'Front delivery with feeding and length folding to reduce handling.',
             'widths' => [['w' => '2100 mm', 'm' => 'IC64821FLF'], ['w' => '2500 mm', 'm' => 'IC64825FLF'], ['w' => '3200 mm', 'm' => 'IC64832FLF']]],

            ['cyl' => 'Ø480 mm', 'delivery' => 'Front Delivery', 'auto' => 'Feeding, Folding & Stacking',
             'name' => 'Ø480 Front Delivery — Feeding, Folding & Stacking', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
             'fit' => 'Front delivery with feeding, folding and stacking for high-volume output.',
             'widths' => [['w' => '2100 mm', 'm' => 'IV64821FFS'], ['w' => '2500 mm', 'm' => 'IV64825FFS'], ['w' => '3200 mm', 'm' => 'IV64832FFS']]],

            ['cyl' => 'Ø480 mm', 'delivery' => 'Rear Delivery', 'auto' => 'No Automation',
             'name' => 'Ø480 Rear Delivery — No Automation', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
             'fit' => 'Rear-delivery ironing without automation, separating loading and collection.',
             'widths' => [['w' => '2100 mm', 'm' => 'IC64821R'], ['w' => '2500 mm', 'm' => 'IC64825R'], ['w' => '3200 mm', 'm' => 'IC64832R']]],

            ['cyl' => 'Ø480 mm', 'delivery' => 'Rear Delivery', 'auto' => 'Length Folding',
             'name' => 'Ø480 Rear Delivery — Length Folding', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
             'fit' => 'Rear delivery with length folding for finished, folded flatwork.',
             'widths' => [['w' => '2100 mm', 'm' => 'IC64821RLF'], ['w' => '2500 mm', 'm' => 'IC64825RLF'], ['w' => '3200 mm', 'm' => 'IC64832RLF']]],

            ['cyl' => 'Ø480 mm', 'delivery' => 'Rear Delivery', 'auto' => 'Length Folding & Integrated Feeder',
             'name' => 'Ø480 Rear Delivery — Length Folding & Integrated Feeder', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
             'fit' => 'Rear delivery with length folding and an integrated feeder for higher output.',
             'widths' => [['w' => '2100 mm', 'm' => 'IC64821FRL'], ['w' => '2500 mm', 'm' => 'IC64825FRL'], ['w' => '3200 mm', 'm' => 'IC64832FRL']]],
        ];
    }

    /** Cards on /equipment/semi-professional. */
    public static function myproModels(): array
    {
        return [
            ['group' => 'myPRO Edge Washers', 'line' => 'myPRO Edge', 'type' => 'Washer',
             'name' => 'WE170P', 'topLine' => 'myPRO Edge Washer', 'slug' => 'we170p',
             'fit' => 'Semi-professional washer for small sites moving beyond domestic appliances.',
             'badges' => ['Semi-professional', 'Daily use', 'Small sites'],
             'img' => '/images/pages/semi-professional/myPRO%20Edge%20-%20WashersWE170P.jpg'],
            ['group' => 'myPRO Edge Washers', 'line' => 'myPRO Edge', 'type' => 'Washer',
             'name' => 'WE170V', 'topLine' => 'myPRO Edge Washer', 'slug' => 'we170v',
             'fit' => 'myPRO Edge washer variant for everyday commercial washing.',
             'badges' => ['Semi-professional', 'Daily use', 'Small sites'],
             'img' => '/images/pages/semi-professional/myPRO%20Edge%20-%20WashersWE170V.jpg'],
            ['group' => 'myPRO Edge Washers', 'line' => 'myPRO Edge', 'type' => 'Washer',
             'name' => 'WE2-9', 'topLine' => 'myPRO Edge Washer', 'slug' => 'we2-9',
             'fit' => 'Larger myPRO Edge washer for sites handling heavier daily volumes.',
             'badges' => ['Semi-professional', 'Heavier loads', 'Busier sites'],
             'img' => '/images/pages/semi-professional/myPRO%20Edge%20-%20Washers%20we2-9.jpg'],

            ['group' => 'myPRO Edge Dryers', 'line' => 'myPRO Edge', 'type' => 'Condense Dryer',
             'name' => 'TE1120', 'topLine' => 'Condense Dryer', 'slug' => 'te1120',
             'fit' => 'Condense dryer that pairs with myPRO Edge washers where venting is not possible.',
             'badges' => ['No venting needed', 'Pairs with washers'],
             'img' => '/images/pages/semi-professional/Condense%20dryerte1120.jpg'],
            ['group' => 'myPRO Edge Dryers', 'line' => 'myPRO Edge', 'type' => 'Heat Pump Dryer',
             'name' => 'TE1120HP', 'topLine' => 'Heat Pump Dryer', 'slug' => 'te1120hp',
             'fit' => 'Heat pump dryer for lower energy use across regular drying cycles.',
             'badges' => ['Lower energy use', 'Heat pump'],
             'img' => '/images/pages/semi-professional/Heat%20pump%20dryersTE1120HP.jpg'],
            ['group' => 'myPRO Edge Dryers', 'line' => 'myPRO Edge', 'type' => 'Condense Dryer',
             'name' => 'TD2-8', 'topLine' => 'Condense Dryer', 'slug' => 'td2-8',
             'fit' => 'Compact condense dryer for smaller laundry rooms without external venting.',
             'badges' => ['No venting needed', 'Compact'],
             'img' => '/images/pages/semi-professional/Condense%20dryertd2-8.jpg'],
            ['group' => 'myPRO Edge Dryers', 'line' => 'myPRO Edge', 'type' => 'Heat Pump Dryer',
             'name' => 'TD2-9HP', 'topLine' => 'Heat Pump Dryer', 'slug' => 'td2-9hp',
             'fit' => 'Heat pump dryer for sites prioritising running costs and gentler drying.',
             'badges' => ['Lower energy use', 'Heat pump', 'Gentler drying'],
             'img' => '/images/pages/semi-professional/Heat%20pump%20dryers%20TD2-9HP.jpg'],

            ['group' => 'Ironing & Light Finishing', 'line' => 'myPRO', 'type' => 'Steam Ironer',
             'name' => 'IS1103', 'topLine' => 'myPRO Steam Ironer', 'slug' => 'is1103',
             'fit' => 'A myPRO steam ironer for practical garment and flatwork finishing.',
             'badges' => ['Light ironing', 'Practical finishing'],
             'img' => '/images/pages/semi-professional/IS1103.jpg'],
            ['group' => 'Ironing & Light Finishing', 'line' => 'myPRO', 'type' => 'Steam Ironer',
             'name' => 'IS185', 'topLine' => 'myPRO Steam Ironer', 'slug' => 'is185',
             'fit' => 'A foldable myPRO steam ironer for a more consistent finish than hand ironing.',
             'badges' => ['Light finishing', 'Foldable format'],
             'img' => '/images/pages/semi-professional/myPRO%20-%20IronersIS185.jpg'],
        ];
    }

    /** Cards on /equipment/finishing-equipment. */
    public static function finishingGroups(): array
    {
        return [
            ['group' => 'Form & Shirt Finishers', 'items' => [
                ['cat' => 'Traditional Form Finishers', 'models' => ['FF1', 'FF2', 'FF3']],
                ['cat' => 'Multi-Form Finishers',       'models' => ['FFM1', 'FFM2']],
                ['cat' => 'Tensioning Form Finishers',  'models' => ['FFT6-WC']],
            ]],
            ['group' => 'Ironing Tables', 'items' => [
                ['cat' => 'Vacuum Ironing Tables',                'models' => ['FIT1', 'FIT2A', 'FIT2B', 'FIT3A', 'FIT3B']],
                ['cat' => 'Wet Cleaning Ironing Tables',          'models' => ['FIT1-WC', 'FIT2-WC']],
                ['cat' => 'Vac / Blow / Steaming Ironing Tables', 'models' => ['FIT4A', 'FIT4B']],
                ['cat' => 'Rectangular Vacuum Ironing Tables',    'models' => ['FIT5A', 'FIT5B']],
                ['cat' => 'Vacuum / Blowing Ironing Tables',      'models' => ['FIT6A', 'FIT6B', 'FIT7']],
            ]],
            ['group' => 'Presses', 'items' => [
                ['cat' => 'Dry Work Presses · Air Operated',      'models' => ['FPA1-D', 'FPA2-D', 'FPA3-D', 'FPA4-D']],
                ['cat' => 'Dry Work Presses · Manually Operated', 'models' => ['FPM1-D', 'FPM2-D', 'FPM3-D', 'FPM4-D']],
                ['cat' => 'Laundry Presses · Air Operated',       'models' => ['FPA1-WC', 'FPA2-WC', 'FPA3-WC', 'FPA4-WC', 'FPA5-WC', 'FPA6-WC']],
                ['cat' => 'Laundry Presses · Manually Operated',  'models' => ['FPM-WC']],
            ]],
            ['group' => 'Finishing Cabinets', 'items' => [
                ['cat' => 'Finishing Cabinets',        'models' => ['FC48']],
                ['cat' => 'Rotary Finishing Cabinets', 'models' => ['FRC1', 'FRC2', 'FRC3']],
            ]],
            ['group' => 'Spotting Tables & Cabinets', 'items' => [
                ['cat' => 'Spotting Tables',  'models' => ['FSU1', 'FSU2', 'FSU3', 'FSU7']],
                ['cat' => 'Spotting Cabinet', 'models' => ['FSU4']],
            ]],
            ['group' => 'Steam Boilers', 'items' => [
                ['cat' => 'Steam Boilers', 'models' => ['FSB3.3', 'FSB18C', 'FSB24C']],
            ]],
            ['group' => 'Trouser Toppers', 'items' => [
                ['cat' => 'Trouser Topper',                    'models' => ['FTT1']],
                ['cat' => 'Trouser Topper · Creased Trousers', 'models' => ['FTT2']],
            ]],
        ];
    }

    /**
     * Read-only summary for the admin: the card a product appears in on its category
     * page, with the range line and the tags that card shows. Sizes without their own
     * card (e.g. WB6-18) resolve to the card they are folded into. Null = no card.
     *
     * @return array{card: string, range: string, tags: string[], own: bool}|null
     */
    public static function siteCard(string $category, string $slug): ?array
    {
        $cards = self::normalisedCards($category);

        foreach ($cards as $c) {
            if ($c['slug'] === $slug) {
                return self::summary($cards, $slug, true);
            }
        }

        // Card whose model name is this product (e.g. "TD6-17S" on the stacked-dryers card).
        foreach ($cards as $c) {
            if (Str::slug(strtok($c['name'], ' ')) === $slug) {
                return self::summary($cards, $c['slug'], false);
            }
        }

        // A size listed inside another card: same model prefix/suffix, capacity in that card's range.
        if (preg_match('/^([a-z]+\d)-(\d+)([a-z]*)$/', $slug, $m)) {
            foreach ($cards as $c) {
                if (preg_match('/^'.$m[1].'-\d+'.$m[3].'$/', $c['slug']) && self::coversKg($c['kg'], (int) $m[2])) {
                    return self::summary($cards, $c['slug'], false);
                }
            }
        }

        // A size of a variant family card: wh6-14cv -> wh6-cv, td6-14lac -> td6-lac, ws6-8 -> ws6.
        $family = rtrim(preg_replace('/-\d+([a-z]*)$/', '-$1', $slug), '-');
        if ($family !== $slug) {
            foreach ($cards as $c) {
                if ($c['slug'] === $family) {
                    return self::summary($cards, $family, false);
                }
            }
        }

        return null;
    }

    /** Cards sharing a slug (the Ø480 ironers) are merged into one summary. */
    private static function summary(array $cards, string $slug, bool $own): array
    {
        $match = array_values(array_filter($cards, fn ($c) => $c['slug'] === $slug));

        return [
            'slug'  => $slug,
            'order' => array_search($slug, array_column($cards, 'slug'), true),
            'card'  => $match[0]['name'],
            'range' => implode(' / ', array_unique(array_column($match, 'range'))),
            'tags'  => array_values(array_unique(array_merge(...array_column($match, 'tags')))),
            'own'   => $own,
        ];
    }

    private static function coversKg(array $kg, int $n): bool
    {
        if (count($kg) === 1) {
            return $kg[0] === $n;
        }

        return $kg && $n >= min($kg) && $n <= max($kg);
    }

    /** Capacity numbers from "6–7 kg", "45–60 kg (SLD)", "14 kg". */
    private static function kgFrom(string $text): array
    {
        if (preg_match('/(\d+)\s*[–-]\s*(\d+)\s*kg/u', $text, $m)) {
            return [(int) $m[1], (int) $m[2]];
        }

        return preg_match('/(\d+)\s*kg/', $text, $m) ? [(int) $m[1]] : [];
    }

    /** Every category page's cards in one shape: slug, name, range, tags, kg. */
    private static function normalisedCards(string $category): array
    {
        static $cache = [];
        if (isset($cache[$category])) {
            return $cache[$category];
        }

        $rows = match ($category) {
            'commercial-washers'  => array_map(fn ($c) => [$c['slug'], $c['name'], $c['topLine'], $c['badges'] ?? [], self::kgFrom($c['topLine'])], self::washerFamilies()),
            'tumble-dryers'       => array_map(fn ($c) => [$c['slug'], $c['name'], $c['topLine'], $c['badges'] ?? [], self::kgFrom($c['topLine'])], self::dryerFamilies()),
            'barrier-washers'     => array_map(fn ($c) => [$c['slug'], $c['name'], $c['profile'].' · '.$c['capLabel'], $c['badges'] ?? [], array_map('intval', $c['kg'])], self::barrierFamilies()),
            'drying-cabinets'     => array_map(fn ($c) => [$c['slug'], $c['name'], $c['cat'], [$c['type']], []], self::cabinetFamilies()),
            'ironers'             => array_map(fn ($c) => [$c['slug'], $c['name'], $c['cyl'].' cylinder', array_values(array_filter([$c['delivery'], $c['auto']])), []], self::ironerCards()),
            'semi-professional'   => array_map(fn ($c) => [$c['slug'], $c['name'], $c['topLine'], $c['badges'] ?? [], []], self::myproModels()),
            'finishing-equipment' => array_merge(...array_map(
                fn ($g) => array_map(fn ($it) => [Str::slug($it['cat']), $it['cat'], $g['group'], $it['models'], []], $g['items']),
                self::finishingGroups()
            )),
            default => [],
        };

        return $cache[$category] = array_map(fn ($r) => array_combine(['slug', 'name', 'range', 'tags', 'kg'], $r), $rows);
    }
}
