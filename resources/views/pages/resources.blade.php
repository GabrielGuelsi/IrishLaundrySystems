@extends('layouts.app')

@section('pageTitle', 'Resources | Commercial Laundry Guides & Official Electrolux Documents | ILS')
@section('metaDescription', 'Irish Laundry Systems guides and official Electrolux Professional documents — brochures, range overviews, product leaflets and application guides for commercial laundry equipment, sectors and applications.')

@section('content')

{{-- ═══════════════════════════════════════
     1. HERO
═══════════════════════════════════════ --}}
<section class="relative overflow-hidden flex flex-col min-h-[420px] lg:min-h-[520px]">
    <img src="/images/shared/Line 6000 solutions products_72dpi.jpg" alt="Commercial laundry resources"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.78) 42%, rgba(1,30,65,0.4) 65%, rgba(1,30,65,0.15) 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-20 lg:py-28">
            <div class="max-w-3xl lg:max-w-4xl reveal reveal-left">

                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Resources</p>

                <h1 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    <span class="sm:block">Commercial laundry guidance and</span>
                    <span class="sm:block" style="color:#148af4;">official Electrolux resources</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Access Irish Laundry Systems guides, practical resources and official Electrolux Professional documents covering equipment, sectors and specialist laundry applications.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#electrolux-documents"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Browse Documents
                    </a>
                    <a href="#ils-guides"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        View Guides
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- 2. Thin Electrolux Trust Strip --}}
@include('components.partner-strip')

{{-- ═══════════════════════════════════════
     3. IRISH LAUNDRY SYSTEMS GUIDES (gated — landing pages, kept Draft until backend ready)
═══════════════════════════════════════ --}}
<section id="ils-guides" class="bg-white py-16 lg:py-24 scroll-mt-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Irish Laundry Systems Guides</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Practical guidance for <span style="color:#148af4;">equipment, rental and maintenance decisions</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Practical resources for planning equipment, comparing purchase and Equipment Rental, and caring for equipment over time.
            </p>
        </div>

        @php
        $ilsGuide = [
            'label' => 'Featured Guide',
            'title' => 'Commercial Laundry Equipment Buying Guide',
            'desc'  => 'A practical guide to capacity, available space, installation requirements and key commercial considerations when choosing laundry equipment.',
            'cta'   => 'Download the Guide',
            'url'   => '/resources/commercial-laundry-equipment-buying-guide',
            'img'   => '/images/pages/about/Commercial Laundry Equipment Buying Guide.png',
        ];
        $ilsSecondary = [
            [
                'label' => 'Buyer Guide',
                'title' => 'Equipment Rental or Purchase Guide',
                'desc'  => 'Compare the cost, ownership and maintenance considerations behind purchasing equipment or choosing Equipment Rental.',
                'cta'   => 'Download the Guide',
                'url'   => '/resources/equipment-rental-or-purchase-guide',
                'img'   => '/images/pages/about/Buyer Guide Equipment Rental or Purchase Guide.png',
            ],
            [
                'label' => 'Maintenance Checklist',
                'title' => 'Preventive Maintenance Checklist',
                'desc'  => 'A practical checklist for planning servicing, monitoring equipment condition and reducing breakdown risk over time.',
                'cta'   => 'Download the Checklist',
                'url'   => '/resources/preventive-maintenance-checklist',
                'img'   => '/images/pages/about/Preventive Maintenance Checklist.png',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-2 gap-6">

            {{-- Featured (spans both rows on desktop, first on mobile) --}}
            <a href="{{ $ilsGuide['url'] }}"
               class="group lg:row-span-2 rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition-shadow duration-300 flex flex-col reveal">
                <div class="relative overflow-hidden" style="min-height:340px;">
                    <img src="{{ str_replace(' ', '%20', $ilsGuide['img']) }}" alt="{{ $ilsGuide['title'] }}" class="absolute inset-0 w-full h-full object-cover">
                    <span class="absolute top-5 left-5 z-10 bg-[#148af4] text-white font-heading font-bold text-xs px-3 py-1.5 rounded-full uppercase tracking-wide">{{ $ilsGuide['label'] }}</span>
                </div>
                <div class="p-8 lg:p-10 flex flex-col flex-1 bg-gray-50">
                    <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-4">{{ $ilsGuide['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-7 flex-1">{{ $ilsGuide['desc'] }}</p>
                    <span class="inline-flex items-center gap-2 bg-navy group-hover:bg-navy/90 text-white font-body font-bold text-sm px-6 py-3.5 rounded-lg transition-colors w-fit">
                        {{ $ilsGuide['cta'] }}
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </span>
                </div>
            </a>

            {{-- Two secondary cards --}}
            @foreach($ilsSecondary as $g)
            <a href="{{ $g['url'] }}"
               class="group rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition-shadow duration-300 flex flex-col sm:flex-row reveal">
                <div class="relative overflow-hidden sm:w-56 flex-shrink-0" style="min-height:200px;">
                    <img src="{{ str_replace(' ', '%20', $g['img']) }}" alt="{{ $g['title'] }}" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-1 bg-white">
                    <span class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">{{ $g['label'] }}</span>
                    <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $g['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-4 flex-1">{{ $g['desc'] }}</p>
                    <span class="inline-flex items-center gap-1.5 font-body font-bold text-[#148af4] text-sm group-hover:underline">
                        {{ $g['cta'] }}
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </span>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     4. OFFICIAL ELECTROLUX PROFESSIONAL DOCUMENTS — integrated library
═══════════════════════════════════════ --}}
<section id="electrolux-documents" class="py-16 lg:py-24 bg-gray-50 border-t border-gray-100 scroll-mt-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Official Electrolux Professional Documents</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Find documents by <span style="color:#148af4;">equipment, sector or document type</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Browse official brochures, range overviews, product leaflets and application guides for the equipment and laundry environments supported by Irish Laundry Systems.
            </p>
        </div>

        @php
            $tb = 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/';
            $wp = 'https://www.electroluxprofessional.com/wp-content/uploads/';
            // Each PDF registered once. Cross-filters applied per approved packages.
            // Display order follows the general priority: range overviews & general brochures,
            // equipment brochures, application guides, then product leaflets.
            $documents = [
                ['title' => 'Professional Laundry Range Overview', 'type' => 'Range Overview',
                 'equipment' => ['Laundry Range & Line 6000','Commercial Washers','Barrier Washers','Tumble Dryers','Heat Pump Dryers','Drying Cabinets','Hot Cylinder Ironers','Finishing Equipment','Wet Cleaning','Dosing & Detergents'],
                 'sector' => [], 'pdf' => $tb.'RO/EPR_RO_Professional%20Laundry_ENG_01072025.pdf?version=1784915295'],

                ['title' => 'Line 6000 Washers', 'type' => 'Brochure',
                 'equipment' => ['Commercial Washers','Wet Cleaning'], 'sector' => [],
                 'pdf' => $tb.'BRO/EPR_Line%206000%20Washers%20brochure-01072025_EN.pdf?version=1784915295'],

                ['title' => 'Line 6000 Washers & Dryers', 'type' => 'Brochure',
                 'equipment' => ['Commercial Washers','Tumble Dryers','Heat Pump Dryers','Wet Cleaning'], 'sector' => ['Commercial & Industrial'],
                 'pdf' => $tb.'BRO/EPR_Line%206000%20Washers%20%26%20Dryers%20brochure-01072025_EN.pdf'],

                ['title' => 'Line 6000 Dryers', 'type' => 'Brochure',
                 'equipment' => ['Tumble Dryers','Heat Pump Dryers'], 'sector' => ['Healthcare','Care Facilities','Commercial & Industrial'],
                 'pdf' => $tb.'BRO/EPR-Line6000-DryersBrochure-01072025_EN.pdf'],

                ['title' => 'Line 6000 Evolution Barrier Washers', 'type' => 'Brochure',
                 'equipment' => ['Barrier Washers'], 'sector' => ['Healthcare','Care Facilities','Commercial Laundries','Firefighters','Clean Rooms'],
                 'pdf' => $tb.'BRO/EPR-brochure-Line%206000%20Evolution%20Barrier%20Washers-20241119-EN.pdf'],

                ['title' => 'Line 6000 Hot Cylinder Ironers', 'type' => 'Brochure',
                 'equipment' => ['Laundry Range & Line 6000','Hot Cylinder Ironers'], 'sector' => ['Healthcare','Care Facilities','Hospitality','Commercial Laundries','Commercial & Industrial'],
                 'pdf' => $tb.'BRO/EPR-Brochure%20Line%206000-Hot_Cylinder_Ironers-ENG-2023_LR.pdf'],

                ['title' => 'Cleanroom Laundry Solutions', 'type' => 'Brochure',
                 'equipment' => ['Barrier Washers','Tumble Dryers'], 'sector' => ['Clean Rooms'],
                 'pdf' => $tb.'BRO/EPR-Cleanroom%20Brochure-20250327-EN.pdf?version=1755506536'],

                ['title' => 'Firefighters Laundry Solutions', 'type' => 'Brochure',
                 'equipment' => ['Commercial Washers','Barrier Washers','Tumble Dryers','Drying Cabinets'], 'sector' => ['Firefighters'],
                 'pdf' => $tb.'BRO/EPR_brochure_firefighters_16042025_EN.pdf'],

                ['title' => 'Line 6000 lagoon® Advanced Care', 'type' => 'Brochure',
                 'equipment' => ['Wet Cleaning'], 'sector' => ['Hospitality'],
                 'pdf' => $tb.'BRO/EPR-LAC-brochure-19022025_EN.pdf'],

                ['title' => 'myPRO Range', 'type' => 'Brochure',
                 'equipment' => ['myPRO','myPROzip'], 'sector' => ['Hospitality'],
                 'pdf' => $tb.'BRO/EPR_myPRO-RANGE-BROCHURE_A4-one%20page%20view_03072026_EN.pdf?version=1785005343'],

                ['title' => 'Clean, Sanitize, Decontaminate: How to Choose Your Solution', 'type' => 'White Paper',
                 'equipment' => ['Commercial Washers','Barrier Washers'], 'sector' => ['Healthcare','Care Facilities','Hospitality','Commercial & Industrial','Firefighters','Clean Rooms'],
                 'pdf' => $wp.'2020/04/Electrolux_WhitePaper_CleaningSolution.pdf'],

                ['title' => 'Healthcare & Care Laundry', 'type' => 'Application Guide',
                 'equipment' => ['Commercial Washers','Tumble Dryers'], 'sector' => ['Healthcare','Care Facilities'],
                 'pdf' => $tb.'CLFL/Line%206000%20Washers%20and%20Dryers_Care%20segment_LR.pdf?version=1770273779'],

                ['title' => 'Multi-Housing Laundry', 'type' => 'Application Guide',
                 'equipment' => ['Commercial Washers','Tumble Dryers','Heat Pump Dryers'], 'sector' => ['Multi-Housing'],
                 'pdf' => $tb.'CLFL/Line%206000%20Washers%20and%20Dryers%20Multi-housing%20segment-LR.pdf?version=1784915295'],

                ['title' => 'Self-Service Laundries', 'type' => 'Application Guide',
                 'equipment' => ['Commercial Washers','Tumble Dryers','Heat Pump Dryers'], 'sector' => ['Self-Service'],
                 'pdf' => $tb.'CLFL/Line%206000%20Washers%20and%20Dryers%20Self%20service%20laundries-LR.pdf?version=1784915295'],

                ['title' => 'On-Premises Laundry', 'type' => 'Application Guide',
                 'equipment' => ['Commercial Washers','Tumble Dryers','Heat Pump Dryers'], 'sector' => ['On-Premises Laundry'],
                 'pdf' => $tb.'CLFL/Line%206000%20Washers%20and%20Dryers%20On-premises%20laundries-LR.pdf?version=1784915295'],

                ['title' => 'Heavy-Duty Laundries', 'type' => 'Application Guide',
                 'equipment' => ['Commercial Washers','Tumble Dryers','Heat Pump Dryers'], 'sector' => ['Commercial Laundries','Heavy-Duty Laundries'],
                 'pdf' => $tb.'CLFL/Line%206000%20Washers%20and%20Dryers%20Heavy%20duty%20laundries-LR.pdf?version=1784915295'],

                ['title' => 'Facility Management', 'type' => 'Application Guide',
                 'equipment' => ['Commercial Washers','Tumble Dryers','Heat Pump Dryers'], 'sector' => ['Facility Management'],
                 'pdf' => $tb.'CLFL/Line%206000%20Washers%20and%20Dryers%20Facility%20management-LR.pdf?version=1784915295'],

                ['title' => 'Professional Cleaning Shops', 'type' => 'Application Guide',
                 'equipment' => ['Commercial Washers','Tumble Dryers','Heat Pump Dryers'], 'sector' => ['Professional Cleaning Shops'],
                 'pdf' => $tb.'CLFL/Line%206000%20Washers%20and%20Dryers%20Cleaning%20shops%20segment-LR.pdf?version=1784915295'],

                ['title' => 'Hospitality Laundry', 'type' => 'Application Guide',
                 'equipment' => ['Commercial Washers','Tumble Dryers','Heat Pump Dryers'], 'sector' => ['Hospitality'],
                 'pdf' => $tb.'CLFL/Line%206000%20Washers%20and%20Dryers%20HoReCa%20segment-LR.pdf?version=1784915295'],

                ['title' => 'High-Spin Washers & Heat Pump Dryers', 'type' => 'Product Leaflet',
                 'equipment' => ['Commercial Washers','Tumble Dryers','Heat Pump Dryers'], 'sector' => [],
                 'pdf' => $tb.'CLFL/EPR_leaflet_Line%206000%20HS%20Washers%20%26%20HP%20Dryers_ENG_LR_web.pdf?version=1784915295'],

                ['title' => 'Line 6000 Heat Pump Dryers', 'type' => 'Product Leaflet',
                 'equipment' => ['Tumble Dryers','Heat Pump Dryers'], 'sector' => ['Multi-Housing','On-Premises Laundry','Marine'],
                 'pdf' => $tb.'CLFL/EPR-leaflet-heat-pump-dryer-04092024-EN-one%20page%20view.pdf?version=1738618424'],

                ['title' => 'TD6-11 with Heat Pump', 'type' => 'Product Leaflet',
                 'equipment' => ['Tumble Dryers','Heat Pump Dryers'], 'sector' => ['Multi-Housing','Self-Service'],
                 'pdf' => $wp.'2024/09/EPR-TD6-11-with-Heat-Pump-Leaflet_04092024_EN-singlepage.pdf'],

                ['title' => 'Line 6000 Pullman Barrier Washers', 'type' => 'Product Leaflet',
                 'equipment' => ['Barrier Washers'], 'sector' => ['Healthcare','Care Facilities','Hospitality','Commercial Laundries','Clean Rooms'],
                 'pdf' => $wp.'2023/10/EPR-leaflet-pullman-barrier-washer-EN-20230919-LR.pdf'],

                ['title' => 'Line 6000 FFS Vibe Ironers', 'type' => 'Product Leaflet',
                 'equipment' => ['Laundry Range & Line 6000','Hot Cylinder Ironers'], 'sector' => ['Healthcare','Care Facilities','Hospitality','Commercial Laundries','Commercial & Industrial'],
                 'pdf' => $wp.'2023/11/EPR-leaflet-IronerFFS-EN-20231122-LR-singlePage.pdf'],

                ['title' => 'Serenity Cabinet', 'type' => 'Product Leaflet',
                 'equipment' => ['Finishing Equipment'], 'sector' => [],
                 'pdf' => $tb.'CLFL/EPR_Serenity_Cabinet_leaflet_ENG_LR.pdf?version=1784938173'],

                ['title' => 'Line 6000 Drying Cabinets', 'type' => 'Product Leaflet',
                 'equipment' => ['Drying Cabinets'], 'sector' => ['Hospitality','Commercial Laundries','Firefighters','Education','Sport & Fitness'],
                 'pdf' => $tb.'CLFL/EPR-Drying%20Cabinets%20Leaflet-20250710-EN.pdf'],

                ['title' => 'myPRO XL Laundry Solutions', 'type' => 'Product Leaflet',
                 'equipment' => ['myPRO XL'], 'sector' => ['Hospitality'],
                 'pdf' => $tb.'CLFL/EPR-leaflet-General-myPRO-XL_2021-eng-lr.pdf?version=1785004820'],

                ['title' => 'The Professional heart for small Hotels, Bed & Breakfasts and Restaurants', 'type' => 'Product Leaflet',
                 'equipment' => ['myPRO'], 'sector' => ['Hospitality'],
                 'pdf' => $tb.'CLFL/EPR-leaflet-mypro-B%26B_2021%20ENG_LR.pdf?version=1779086791'],

                ['title' => 'myPROzip - Beach - Holidays segment', 'type' => 'Product Leaflet',
                 'equipment' => ['myPROzip'], 'sector' => ['Hospitality'],
                 'pdf' => $tb.'CLFL/EPR_leaflet-myproZip-BEACH-new-logo_LR.pdf?version=1785005343'],

                ['title' => 'myPROzip - InfoFlyer Campsite', 'type' => 'Product Leaflet',
                 'equipment' => ['myPROzip'], 'sector' => ['Hospitality'],
                 'pdf' => $tb.'CLFL/EPR_leaflet-myproZip-CAMPSITE-LR.pdf?version=1785005343'],

                ['title' => 'myPROzip - infoflyer - Countryside', 'type' => 'Product Leaflet',
                 'equipment' => ['myPROzip'], 'sector' => ['Hospitality'],
                 'pdf' => $tb.'CLFL/EPR_leaflet-myproZip-Countryside-LR.pdf?version=1785005343'],

                ['title' => 'Detergents, Dosing Systems & Storage', 'type' => 'Product Leaflet',
                 'equipment' => ['Dosing & Detergents','Accessories & Consumables'], 'sector' => ['Commercial & Industrial'],
                 'pdf' => $tb.'CLFL/EPR-leaflet-DetergentsDosingSystems-Storage_singlepageview.pdf'],

                ['title' => 'lagoon Advanced Care Essential Set - Line 6000', 'type' => 'Product Leaflet',
                 'equipment' => ['Wet Cleaning','Commercial Washers','Dosing & Detergents'], 'sector' => [],
                 'pdf' => $tb.'CLFL/EPR%20lagoon%20Advanced%20Care_Essential%20set%20Line%206000%2017022025_EN.pdf'],

                ['title' => 'lagoon Advanced Care Detergents', 'type' => 'Product Leaflet',
                 'equipment' => ['Wet Cleaning','Dosing & Detergents','Accessories & Consumables'], 'sector' => [],
                 'pdf' => $tb.'CLFL/EPR_lagoon%20detergents%20leaflet_17022025_EN.pdf?version=1748548690'],

                ['title' => 'Line 6000 Detergents - Ecolabel Certified', 'type' => 'Product Leaflet',
                 'equipment' => ['Dosing & Detergents','Accessories & Consumables'], 'sector' => [],
                 'pdf' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/EPR-Detergents-Ecolabel-Leaflet-GB-Web.pdf'],

                ['title' => 'Efficient Dosing', 'type' => 'Product Leaflet',
                 'equipment' => ['Dosing & Detergents','Accessories & Consumables'], 'sector' => [],
                 'pdf' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2017/09/Efficient-Dosing-Brochure-2017.pdf'],

                ['title' => 'CMIS 5 — Certus Management Information System®', 'type' => 'Management Systems & Software',
                 'equipment' => [], 'sector' => [],
                 'pdf' => $tb.'PDS/PDS_CMIS_438919493_EN.pdf?version=1755564401'],

                ['title' => 'Laundry Program Manager — LPM', 'type' => 'Management Systems & Software',
                 'equipment' => [], 'sector' => [],
                 'pdf' => $tb.'PDS/PDS_LPM_438919528_EN.pdf?version=1754961459'],

                ['title' => 'Payment Systems', 'type' => 'Payment Systems',
                 'equipment' => [], 'sector' => [],
                 'pdf' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2017/05/Payment-Systems-2017.pdf'],
            ];

            // Facet order (canonical); only families with at least one document are shown.
            $equipOrder  = ['Laundry Range & Line 6000','Commercial Washers','Barrier Washers','Tumble Dryers','Heat Pump Dryers','Drying Cabinets','Hot Cylinder Ironers','Finishing Equipment','Wet Cleaning','myPRO','myPRO XL','myPROzip','Dosing & Detergents','Accessories & Consumables'];
            $sectorOrder = ['Healthcare','Care Facilities','Hospitality','Commercial & Industrial'];
            $typeOrder   = ['Brochure','Range Overview','Application Guide','Product Leaflet','White Paper','Management Systems & Software','Payment Systems'];

            $pE = []; $pS = []; $pT = [];
            foreach ($documents as $d) {
                foreach ($d['equipment'] as $e) { $pE[$e] = 1; }
                foreach (($d['sector'] ?? []) as $s) { $pS[$s] = 1; }
                $pT[$d['type']] = 1;
            }
            $equipFilters  = array_values(array_filter($equipOrder,  fn($e) => isset($pE[$e])));
            $sectorFilters = array_values(array_filter($sectorOrder, fn($e) => isset($pS[$e])));
            $typeFilters   = array_values(array_filter($typeOrder,   fn($e) => isset($pT[$e])));
        @endphp

        <div x-data="{
                q: '', equip: 'All Documents', sector: 'All', type: 'All Types', shown: 6,
                docs: {{ \Illuminate\Support\Js::from($documents) }},
                match(d) {
                    const e = this.equip === 'All Documents' || d.equipment.includes(this.equip);
                    const s = this.sector === 'All' || (d.sector || []).includes(this.sector);
                    const t = this.type === 'All Types' || d.type === this.type;
                    let ok = true;
                    const query = this.q.trim().toLowerCase();
                    if (query) {
                        const hay = (d.title + ' ' + d.equipment.join(' ') + ' ' + (d.sector || []).join(' ') + ' ' + d.type).toLowerCase();
                        ok = hay.includes(query);
                    }
                    return e && s && t && ok;
                },
                get filtered() { return this.docs.filter(d => this.match(d)); },
                get visible() { return this.filtered.slice(0, this.shown); },
                get hasFilters() { return this.q.trim() !== '' || this.equip !== 'All Documents' || this.sector !== 'All' || this.type !== 'All Types'; },
                clearAll() { this.q = ''; this.equip = 'All Documents'; this.sector = 'All'; this.type = 'All Types'; this.shown = 6; },
             }"
             x-init="$watch('q', () => shown = 6); $watch('equip', () => shown = 6); $watch('sector', () => shown = 6); $watch('type', () => shown = 6);">

            {{-- Search --}}
            <div class="relative max-w-xl mb-6 reveal">
                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/></svg>
                <input type="text" x-model="q" placeholder="Search by document, equipment or sector"
                       class="w-full border border-gray-200 rounded-lg pl-11 pr-4 py-3.5 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-[#148af4] transition-colors bg-white">
            </div>

            {{-- Filter groups --}}
            <div class="space-y-4 mb-8">
                {{-- Equipment & Systems --}}
                <div>
                    <p class="font-heading font-bold text-navy text-xs uppercase tracking-[0.22em] mb-2.5">By Equipment &amp; Systems</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(array_merge(['All Documents'], $equipFilters) as $e)
                        <button type="button" @click="equip = '{{ $e }}'"
                                :class="equip === '{{ $e }}' ? 'bg-[#148af4] border-[#148af4] text-white' : 'bg-white border-gray-200 text-gray-600 hover:text-navy hover:border-gray-300'"
                                class="cursor-pointer font-body font-bold text-xs px-4 py-2 rounded-full border transition-colors duration-200">{{ $e }}</button>
                        @endforeach
                    </div>
                </div>
                {{-- Sector & Application --}}
                <div>
                    <p class="font-heading font-bold text-navy text-xs uppercase tracking-[0.22em] mb-2.5">By Sector &amp; Application</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(array_merge(['All'], $sectorFilters) as $s)
                        <button type="button" @click="sector = '{{ $s }}'"
                                :class="sector === '{{ $s }}' ? 'bg-[#148af4] border-[#148af4] text-white' : 'bg-white border-gray-200 text-gray-600 hover:text-navy hover:border-gray-300'"
                                class="cursor-pointer font-body font-bold text-xs px-4 py-2 rounded-full border transition-colors duration-200">{{ $s === 'All' ? 'All Sectors' : $s }}</button>
                        @endforeach
                    </div>
                </div>
                {{-- Document Type --}}
                <div>
                    <p class="font-heading font-bold text-navy text-xs uppercase tracking-[0.22em] mb-2.5">By Document Type</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(array_merge(['All Types'], $typeFilters) as $t)
                        <button type="button" @click="type = '{{ $t }}'"
                                :class="type === '{{ $t }}' ? 'bg-[#148af4] border-[#148af4] text-white' : 'bg-white border-gray-200 text-gray-600 hover:text-navy hover:border-gray-300'"
                                class="cursor-pointer font-body font-bold text-xs px-4 py-2 rounded-full border transition-colors duration-200">{{ $t }}</button>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Result count + Clear --}}
            <div class="flex items-center justify-between mb-6">
                <span class="font-body text-sm text-gray-500"><span x-text="filtered.length"></span> <span x-text="filtered.length === 1 ? 'document' : 'documents'"></span></span>
                <button type="button" x-show="hasFilters" @click="clearAll()" class="font-body font-bold text-sm text-[#148af4] hover:underline">Clear filters</button>
            </div>

            {{-- Document cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <template x-for="d in visible" :key="d.title">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-col">
                        <div class="relative mb-5 rounded-xl overflow-hidden flex items-center justify-center" style="height:120px; background:linear-gradient(135deg,#011E41 0%,#0d3568 100%);">
                            <span class="absolute top-3 left-3 bg-[#148af4] text-white font-heading font-bold text-xs px-2.5 py-1 rounded-full uppercase tracking-wide" x-text="d.type"></span>
                            <svg class="w-10 h-10 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.3"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                        </div>
                        <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-5 flex-1" x-text="d.title"></h3>
                        <a :href="d.pdf" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-2 font-body font-bold text-sm text-[#148af4] hover:underline py-1.5 -my-1.5 w-fit">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            Download PDF
                        </a>
                    </div>
                </template>
            </div>

            {{-- Load More --}}
            <div class="text-center mt-10" x-show="visible.length < filtered.length" x-cloak>
                <button type="button" @click="shown += 6"
                        class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold text-sm px-8 py-4 rounded-lg transition-colors">
                    Load More
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </button>
            </div>

            {{-- No results --}}
            <div class="text-center py-16" x-show="filtered.length === 0" x-cloak>
                <h3 class="font-heading font-bold text-navy text-xl mb-2">No documents found</h3>
                <p class="font-body text-gray-500 text-base mb-6">Try changing the filters or request the document you need.</p>
                <a href="#request-a-resource" class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold text-sm px-7 py-3.5 rounded-lg transition-colors">
                    Request a Resource
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     5. VIDEO TUTORIALS
═══════════════════════════════════════ --}}
<section id="video-tutorials" class="py-16 lg:py-24 bg-white border-t border-gray-100 scroll-mt-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Video Tutorials</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Watch guidance for <span style="color:#148af4;">selected equipment and controls</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Access official tutorials and user guidance for selected Electrolux Professional laundry ranges.
            </p>
        </div>

        @php
        $myproVideoGroups = [
            ['group' => 'Installation', 'videos' => [
                ['id' => 'sc1IOSVYNEA', 'title' => 'Installing the machine with drain valve'],
                ['id' => 'CsdAuR8lJuQ', 'title' => 'Installing the stacking kit'],
            ]],
            ['group' => 'Daily use', 'videos' => [
                ['id' => 'ESPBN2YmyxA', 'title' => 'Select programs and start the machines'],
                ['id' => 'sTAlhKw8-bE', 'title' => "Cleaning the washing machine's pump filter"],
                ['id' => 'QZlDLCAjf1E', 'title' => "Cleaning the dryer's lint filter and condense unit"],
            ]],
        ];
        @endphp

        <div class="space-y-10 reveal">
            @foreach($myproVideoGroups as $grp)
            <div>
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-5">myPRO &amp; myPROzip — {{ $grp['group'] }}</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($grp['videos'] as $v)
                    <div class="rounded-2xl overflow-hidden bg-navy border border-gray-100 shadow-sm">
                        <div class="relative w-full aspect-video">
                            <iframe class="absolute inset-0 w-full h-full"
                                    src="https://www.youtube.com/embed/{{ $v['id'] }}"
                                    title="{{ $v['title'] }}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="px-5 py-4">
                            <p class="font-heading font-bold text-white text-sm leading-snug">{{ $v['title'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════
     6. SUPPORT STRIP
═══════════════════════════════════════ --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">

    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover"
             style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>

    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 sm:py-16 lg:py-24 w-full max-w-full lg:max-w-[66%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Resource Help</p>
        <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3 [@media(min-width:1460px)]:whitespace-nowrap">
            Not sure which resource you need?
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-7 max-w-2xl">
            Tell us the equipment, sector or document you are looking for and our team will point you to the appropriate resource.
        </p>
        <a href="#request-a-resource"
           class="inline-flex items-center gap-2 bg-white text-navy font-body font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors">
            Ask Our Team
        </a>
    </div>

</section>

{{-- ═══════════════════════════════════════
     7. REQUEST A RESOURCE
═══════════════════════════════════════ --}}
<section id="request-a-resource" class="py-16 lg:py-24 bg-white border-t border-gray-100 scroll-mt-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Request a Resource</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                    Can&rsquo;t find the <span style="color:#148af4;">document you need?</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed max-w-md">
                    Tell us the equipment, model, sector or topic you are looking for and our team will identify the appropriate resource.
                </p>
            </div>

            <div class="reveal reveal-right">
                @if ($errors->any())
                <div class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3">
                    <p class="font-body font-bold text-red-700 text-sm mb-1">Please check the form</p>
                    <ul class="list-disc list-inside font-body text-red-600 text-xs space-y-0.5">
                        @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" data-utm class="bg-gray-50 border border-gray-100 rounded-2xl p-6 lg:p-8 space-y-4">
                    @csrf
                    <input type="hidden" name="request_type" value="parts">
                    <input type="hidden" name="urgency" value="planning">
                    <input type="hidden" name="page_source" value="resources_request">
                    <input type="hidden" name="utm_source"><input type="hidden" name="utm_medium"><input type="hidden" name="utm_campaign"><input type="hidden" name="utm_content"><input type="hidden" name="utm_term">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Name <span class="text-red-400">*</span></label>
                            <input type="text" name="name" required value="{{ old('name') }}" placeholder="Your name"
                                   class="w-full bg-white border border-gray-200 rounded-lg px-4 py-3 font-body text-sm text-navy focus:outline-none focus:border-[#148af4] placeholder-gray-400 transition-all">
                        </div>
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Organisation <span class="text-red-400">*</span></label>
                            <input type="text" name="company" required value="{{ old('company') }}" placeholder="Organisation name"
                                   class="w-full bg-white border border-gray-200 rounded-lg px-4 py-3 font-body text-sm text-navy focus:outline-none focus:border-[#148af4] placeholder-gray-400 transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Work Email <span class="text-red-400">*</span></label>
                            <input type="email" name="email" required value="{{ old('email') }}" placeholder="you@company.ie"
                                   class="w-full bg-white border border-gray-200 rounded-lg px-4 py-3 font-body text-sm text-navy focus:outline-none focus:border-[#148af4] placeholder-gray-400 transition-all">
                        </div>
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Phone <span class="text-red-400">*</span></label>
                            <input type="tel" name="phone" required value="{{ old('phone') }}" placeholder="+353 (0)..."
                                   class="w-full bg-white border border-gray-200 rounded-lg px-4 py-3 font-body text-sm text-navy focus:outline-none focus:border-[#148af4] placeholder-gray-400 transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Sector <span class="text-red-400">*</span></label>
                            <select name="sector" required
                                    class="w-full bg-white border border-gray-200 rounded-lg px-4 py-3 font-body text-sm text-navy focus:outline-none focus:border-[#148af4] cursor-pointer transition-all">
                                <option value="">Select sector</option>
                                <option value="healthcare"  {{ old('sector') === 'healthcare'  ? 'selected' : '' }}>Healthcare</option>
                                <option value="care"        {{ old('sector') === 'care'        ? 'selected' : '' }}>Care Facilities</option>
                                <option value="hospitality" {{ old('sector') === 'hospitality' ? 'selected' : '' }}>Hospitality</option>
                                <option value="commercial"  {{ old('sector') === 'commercial'  ? 'selected' : '' }}>Commercial &amp; Industrial</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Site location <span class="text-red-400">*</span></label>
                            <input type="text" name="location" required value="{{ old('location') }}" placeholder="e.g. Dublin, Cork..."
                                   class="w-full bg-white border border-gray-200 rounded-lg px-4 py-3 font-body text-sm text-navy focus:outline-none focus:border-[#148af4] placeholder-gray-400 transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Equipment or model</label>
                            <input type="text" name="equipment" value="{{ old('equipment') }}" placeholder="e.g. WH6-20, TD6-14..."
                                   class="w-full bg-white border border-gray-200 rounded-lg px-4 py-3 font-body text-sm text-navy focus:outline-none focus:border-[#148af4] placeholder-gray-400 transition-all">
                        </div>
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Resource or topic required</label>
                            <input type="text" name="part_required" value="{{ old('part_required') }}" placeholder="Brochure, data sheet, manual..."
                                   class="w-full bg-white border border-gray-200 rounded-lg px-4 py-3 font-body text-sm text-navy focus:outline-none focus:border-[#148af4] placeholder-gray-400 transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Message</label>
                        <textarea name="message" rows="4" placeholder="Anything else that would help us find the right document."
                                  class="w-full bg-white border border-gray-200 rounded-lg px-4 py-3 font-body text-sm text-navy focus:outline-none focus:border-[#148af4] placeholder-gray-400 resize-none leading-relaxed transition-all">{{ old('message') }}</textarea>
                    </div>

                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" name="gdpr_consent" required value="1" {{ old('gdpr_consent') ? 'checked' : '' }}
                               class="mt-0.5 w-4 h-4 rounded border-gray-300 text-navy focus:ring-navy/30 flex-shrink-0 cursor-pointer">
                        <span class="font-body text-xs text-gray-500 leading-relaxed">
                            I agree to the Privacy Policy and to Irish Laundry Systems using my details to respond to this enquiry. <span class="text-red-400">*</span>
                            <a href="{{ route('privacy') }}" class="underline hover:text-navy transition-colors" target="_blank">Privacy Policy</a>.
                        </span>
                    </label>
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" name="marketing_consent" value="1" {{ old('marketing_consent') ? 'checked' : '' }}
                               class="mt-0.5 w-4 h-4 rounded border-gray-300 text-navy focus:ring-navy/30 flex-shrink-0 cursor-pointer">
                        <span class="font-body text-xs text-gray-400 leading-relaxed">
                            I would like to receive occasional updates from Irish Laundry Systems. Optional.
                        </span>
                    </label>

                    <div class="pt-2">
                        <button type="submit" data-ga-cta="form-request-resource"
                                class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold text-sm px-8 py-4 rounded-lg transition-colors w-full sm:w-auto">
                            Request a Resource
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/></svg>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
