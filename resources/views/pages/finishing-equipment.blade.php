@extends('layouts.app')

@section('pageTitle', 'Commercial Finishing Equipment | Ironing Tables, Presses & Steam | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial finishing equipment for care homes, hospitality and garment care. Irish Laundry Systems connects ironing tables, steam support, presses and form finishers with advice, installation and support across Ireland.">
@endsection

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden flex flex-col min-h-[520px] lg:min-h-[560px] lg:h-[720px]">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial finishing equipment"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-12 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Finishing Equipment</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                    Improve garment presentation with<br class="hidden lg:block"> <span style="color:#148af4;">the right ironing, steam and pressing setup</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional finishing equipment for care facilities, hospitality sites, garment care settings and smaller laundry rooms across Ireland.
                </p>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Choose ironing tables, steam support, presses, form finishers or specialist finishing equipment around item type, room fit, finish quality, installation and aftercare.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Finishing Equipment Advice
                    </a>
                    <a href="{{ route('equipment.category', 'ironers') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        View Commercial Ironers
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Finishing Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Cleaner final finishing for <span style="color:#148af4;">garments, uniforms and smaller daily items</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5">
                    Finishing equipment supports shirts, trousers, uniforms, guest garments, resident clothing and touch-up work where presentation matters every day.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    For sites that do not need a hot cylinder ironer for every finishing task, Irish Laundry Systems reviews item type, finish requirement, room fit, steam or electrical needs, installation and aftercare before recommending the right setup.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Talk to Our Team
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- FINISHING EQUIPMENT OPTIONS (4 cards) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Finishing Equipment Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose the right finishing setup for <span style="color:#148af4;">the work handled every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with the items your team needs to finish, then match the setup to the room, presentation standard and aftercare needs.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach([
                ['icon' => '30', 'title' => 'Ironing Tables',                 'copy' => 'For everyday garments, uniforms, resident clothing and smaller items that need a cleaner final finish.', 'cta' => 'View Ironing Tables',    'href' => '#ironing-tables'],
                ['icon' => '16', 'title' => 'Steam Irons & Steam Boiler Support', 'copy' => 'For hand-finishing, touch-ups and garment presentation where steam quality matters.', 'cta' => 'View Steam Support',     'href' => '#steam-support'],
                ['icon' => '5',  'title' => 'Presses & Form Finishers',        'copy' => 'For stronger consistency, garment shape and a more professional finish than manual ironing alone.', 'cta' => 'View Presses & Finishers', 'href' => '#presses'],
                ['icon' => '26', 'title' => 'Shirt & Trouser Finishing',       'copy' => 'For shirts, trousers, uniforms and garments where shape, creases, pleats and finish quality matter.', 'cta' => 'View Garment Finishing', 'href' => '#garment-finishing'],
            ] as $card)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 shadow-card flex flex-col h-full reveal">
                <img src="/images/icons/{{ $card['icon'] }}.png" alt="" class="w-20 h-20 object-contain mb-5">
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-3">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6 flex-1">{{ $card['copy'] }}</p>
                <a href="{{ $card['href'] }}" class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline mt-auto">
                    {{ $card['cta'] }}
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- DETAIL SECTIONS (1-4) --}}
@php
    $detailSections = [
        [
            'id'       => 'ironing-tables',
            'eyebrow'  => 'Ironing Tables',
            'heading'  => 'Practical finishing for <span style="color:#148af4;">garments, uniforms and smaller items</span>',
            'body'     => 'Ironing tables give care facilities, hospitality sites and smaller laundry rooms a practical way to improve presentation without a larger ironer setup.',
            'points'   => ['Daily finishing', 'Cleaner finish', 'Room fit'],
            'primary'  => 'Ask About Ironing Tables',
            'img'      => '/images/equipment/Strip1.jpeg',
        ],
        [
            'id'       => 'steam-support',
            'eyebrow'  => 'Steam Support',
            'heading'  => 'Give hand-finishing work <span style="color:#148af4;">the right steam setup</span>',
            'body'     => 'Steam irons and steam boiler support give teams a flexible way to finish garments, uniforms, touch-ups and presentation-led items.',
            'points'   => ['Hand finishing', 'Garment care', 'Steam setup'],
            'primary'  => 'Ask About Steam Support',
            'img'      => '/images/healthcare/commercial-industrial.jpg',
        ],
        [
            'id'       => 'presses',
            'eyebrow'  => 'Presses & Form Finishers',
            'heading'  => 'More consistent finishing for <span style="color:#148af4;">presentation-led garments</span>',
            'body'     => 'Presses and form finishers support shirts, jackets, coats, dresses, uniforms and customer-facing garments that need a sharper, more consistent finish.',
            'points'   => ['Consistent finish', 'Garment shape', 'Daily productivity'],
            'primary'  => 'Ask About Presses & Finishers',
            'img'      => '/images/equipment/line6000-ironer.webp',
        ],
        [
            'id'       => 'garment-finishing',
            'eyebrow'  => 'Shirt & Trouser Finishing',
            'heading'  => 'Support garment presentation where <span style="color:#148af4;">shape and finish matter</span>',
            'body'     => 'Shirts, trousers and uniforms often need clean shape, controlled creases, neat pleats and consistent garment presentation.',
            'points'   => ['Shirt finish', 'Trouser finish', 'Uniform care'],
            'primary'  => 'Ask About Garment Finishing',
            'img'      => '/images/equipment/Strip1.jpeg',
        ],
    ];
@endphp

@foreach($detailSections as $i => $d)
<section id="{{ $d['id'] }}" class="py-16 lg:py-24 scroll-mt-28 {{ $i % 2 === 0 ? 'bg-white' : 'bg-bg' }} border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Text column (alternates side) --}}
            <div class="reveal {{ $i % 2 === 0 ? 'reveal-left lg:order-1' : 'reveal-right lg:order-2' }}">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">{{ $d['eyebrow'] }}</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                    {!! $d['heading'] !!}
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                    {{ $d['body'] }}
                </p>
                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 mb-8">
                    @foreach($d['points'] as $pi => $pt)
                    @if($pi > 0)<span class="text-gray-300">|</span>@endif
                    <span class="inline-flex items-center gap-2 font-body text-navy text-sm font-bold">
                        <span class="text-[#148af4]">&#9656;</span> {{ $pt }}
                    </span>
                    @endforeach
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        {{ $d['primary'] }}
                    </a>
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Product Details
                    </a>
                </div>
            </div>

            {{-- Supporting visual column --}}
            <div class="reveal {{ $i % 2 === 0 ? 'reveal-right lg:order-2' : 'reveal-left lg:order-1' }}">
                <div class="relative overflow-hidden rounded-2xl border border-gray-100 h-[260px] sm:h-[320px] lg:h-[380px]">
                    <img src="{{ $d['img'] }}" alt="{{ $d['eyebrow'] }}"
                         class="absolute inset-0 w-full h-full {{ str_ends_with($d['img'], '.webp') ? 'object-contain bg-bg p-8' : 'object-cover' }}">
                    @if(!str_ends_with($d['img'], '.webp'))
                    <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(1,30,65,0.35) 0%, rgba(1,30,65,0.05) 50%, transparent 100%);"></div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>
@endforeach

{{-- FINISHING EQUIPMENT RANGE (product grid) --}}
<section id="finishing-range" class="py-16 lg:py-24 bg-white border-t border-gray-100 scroll-mt-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Finishing Equipment Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Selected Electrolux Professional <span style="color:#148af4;">finishing equipment</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Finishers, ironing tables, presses, spotting equipment and steam support. Tell Irish Laundry Systems what the site needs to finish each day and the team can confirm the right model, specification and installation route.
            </p>
        </div>

        @php
            // Per-model images live in public/images/equipment/finishing/ named by model code
            // (FIT1 keeps its existing path). Each card shows its real photo the moment the file
            // is dropped in; until then it falls back to the Electrolux Professional placeholder.
            $finPlaceholder = '/images/logo/electrolux-partner.png';
            // Resolve a model image from images/equipment/finishing/ or images/equipment/,
            // trying common extensions. Returns null (→ placeholder) when nothing is found.
            $finResolve = function ($code) {
                foreach (['images/equipment/finishing/', 'images/equipment/'] as $dir) {
                    foreach (['jpg', 'jpeg', 'png', 'webp'] as $ext) {
                        if (file_exists(public_path($dir . $code . '.' . $ext))) {
                            return '/' . $dir . $code . '.' . $ext;
                        }
                    }
                }
                return null;
            };
            // One card per TYPE; size/version variants are listed as the type's models.
            $finishingGroups = [
                ['group' => 'Form & Shirt Finishers', 'items' => [
                    ['cat' => 'Traditional Form Finishers', 'models' => ['FF1', 'FF2', 'FF3']],
                    ['cat' => 'Multi-Form Finishers',       'models' => ['FFM1', 'FFM2']],
                    ['cat' => 'Tensioning Form Finishers',  'models' => ['FFT6-WC']],
                    ['cat' => 'Shirt Finisher',             'models' => ['FSF2', 'FSF3']],
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

            // Short, factual description shared by every model in a category.
            $finCatDesc = [
                'Traditional Form Finishers'           => 'Form finishers that shape and finish jackets, coats and garments on a heated, inflated form.',
                'Multi-Form Finishers'                 => 'Multi-form finishers for higher-volume garment shaping across a wider range of garment types.',
                'Tensioning Form Finishers'            => 'Tensioning form finishers that stretch and finish garments for a sharper, more uniform result.',
                'Shirt Finisher'                       => 'Dedicated shirt finishers for fast, consistent shirt presentation in garment-led laundries.',
                'Vacuum Ironing Tables'                => 'Heated vacuum ironing tables for everyday linen, uniforms and garment finishing.',
                'Wet Cleaning Ironing Tables'          => 'Vacuum ironing tables set up for wet cleaning and delicate textile finishing.',
                'Vac / Blow / Steaming Ironing Tables' => 'Ironing tables with vacuum, blowing and steaming for more demanding garment finishing.',
                'Rectangular Vacuum Ironing Tables'    => 'Large rectangular vacuum tables for higher-volume flat and garment finishing.',
                'Vacuum / Blowing Ironing Tables'      => 'Vacuum and blowing ironing tables for shaping and finishing a wide range of garments.',
                'Dry Work Presses · Air Operated'      => 'Air-operated presses for fast, consistent pressing of dry-cleaned garments.',
                'Dry Work Presses · Manually Operated' => 'Manually operated presses for dry work where a compact, lower-cost press fits the room.',
                'Laundry Presses · Air Operated'       => 'Air-operated laundry presses for high-output pressing of washed garments and workwear.',
                'Laundry Presses · Manually Operated'  => 'Manually operated laundry presses for steady pressing in smaller laundry rooms.',
                'Finishing Cabinets'                   => 'Finishing cabinets that steam, dry and refresh garments without manual ironing.',
                'Rotary Finishing Cabinets'            => 'Rotary finishing cabinets for higher-capacity garment steaming and finishing.',
                'Spotting Tables'                      => 'Spotting tables for targeted stain removal and pre-treatment ahead of cleaning.',
                'Spotting Cabinet'                     => 'Spotting cabinets with integrated extraction for safe, contained stain treatment.',
                'Steam Boilers'                        => 'Steam boilers that supply consistent steam to presses, tables and finishing equipment.',
                'Trouser Topper'                       => 'Trouser toppers that finish the upper trouser section quickly and consistently.',
                'Trouser Topper · Creased Trousers'    => 'Trouser toppers set up to finish creased trousers with a sharp, defined line.',
            ];

            // Flatten the groups into one filterable list + derive the Type facet.
            $finProducts = [];
            foreach ($finishingGroups as $grp) {
                foreach ($grp['items'] as $it) {
                    $finProducts[] = ['group' => $grp['group'], 'cat' => $it['cat'], 'models' => $it['models']];
                }
            }
            $finTypeOrder = array_map(fn ($g) => $g['group'], $finishingGroups);
            $finTypeOpts = [];
            foreach ($finProducts as $p) { $finTypeOpts[$p['group']] = ($finTypeOpts[$p['group']] ?? 0) + 1; }
            $finJs = array_map(fn ($p) => ['group' => $p['group']], $finProducts);
        @endphp

        <div x-data="{
                type: [],
                families: {{ \Illuminate\Support\Js::from($finJs) }},
                matches(f) { return this.type.length === 0 || this.type.includes(f.group); },
                get count() { return this.families.filter(f => this.matches(f)).length; },
                clearAll() { this.type = []; },
             }"
             class="grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-8 lg:gap-10 items-start">

            {{-- LEFT: filter sidebar --}}
            <aside class="lg:sticky lg:top-28 self-start border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <span class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em]">Filter Products</span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Reset all</button>
                </div>

                {{-- Type --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Type</p>
                    <div class="space-y-2.5">
                        @foreach($finTypeOrder as $val)
                        @if(isset($finTypeOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="type" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $finTypeOpts[$val] }}</span>
                        </label>
                        @endif
                        @endforeach
                    </div>
                </div>

                {{-- Footer count + clear --}}
                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'range' : 'ranges'"></span></span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Clear filters</button>
                </div>
            </aside>

            {{-- RIGHT: product cards (floating images) --}}
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-6 gap-y-10">
                    @foreach($finProducts as $f)
                    @php
                        $src = null; foreach ($f['models'] as $m) { if ($src = $finResolve($m)) break; }
                        $desc = $finCatDesc[$f['cat']] ?? '';
                        $detailUrl = route('equipment.product', ['category' => 'finishing-equipment', 'product' => \Illuminate\Support\Str::slug($f['cat'])]);
                    @endphp
                    <div x-show="matches({{ \Illuminate\Support\Js::from(['group' => $f['group']]) }})" class="flex flex-col">
                        <a href="{{ $detailUrl }}" class="flex items-center justify-center h-44 lg:h-48 mb-5">
                            @if($src)
                            <img src="{{ $src }}" alt="{{ $f['cat'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                            @else
                            <img src="{{ $finPlaceholder }}" alt="Electrolux Professional" title="Product image coming soon" class="max-w-[160px] w-auto object-contain opacity-25 transition-transform duration-300 hover:-translate-y-1.5">
                            @endif
                        </a>
                        <p class="font-body text-xs mb-1.5"><span class="font-bold text-[#148af4]">{{ $f['group'] }}</span></p>
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2"><a href="{{ $detailUrl }}" class="hover:text-[#148af4] transition-colors">{{ $f['cat'] }}</a></h3>
                        @if($desc)<p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $desc }}</p>@endif
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            @foreach($f['models'] as $m)
                            <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $m }}</span>
                            @endforeach
                        </div>
                        <div class="mt-auto flex flex-col gap-2.5">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                Request Advice on This Model
                            </a>
                            <a href="{{ $detailUrl }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                View Details
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Empty state --}}
                <div x-show="count === 0" x-cloak class="text-center py-16">
                    <p class="font-body text-gray-500 text-base">No products match that filter. <button @click="clearAll()" class="text-[#148af4] font-bold hover:underline">Clear filters</button> or <a href="{{ route('contact') }}" class="text-[#148af4] font-bold hover:underline">talk to our team</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- SPECIALIST FINISHING --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Specialist Finishing</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                    Specialist finishing equipment for <span style="color:#148af4;">more specific garment care needs</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                    Selected laundry rooms and garment care operations may need spotting units, spotting cabinets, finishing cabinets or other specialist finishing equipment where the work requires it.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                    Ask About Specialist Finishing
                </a>
            </div>

            <div class="reveal reveal-right">
                <div class="bg-bg border border-gray-100 rounded-2xl p-7">
                    <p class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em] mb-4">Specialist Options</p>
                    <div class="flex flex-col gap-3">
                        @foreach([
                            'Spotting Units & Cabinets',
                            'Finishing Cabinets',
                            'Rotary Finishing Cabinets',
                            'Specialist finishing equipment on request',
                        ] as $opt)
                        <span class="inline-flex items-center gap-3 font-body text-navy text-sm font-semibold bg-white border border-gray-100 rounded-full px-5 py-3">
                            <span class="text-[#148af4]">&#9656;</span> {{ $opt }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- PLANNING & SUPPORT (blue strip) --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-16 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Planning & Support</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Choose finishing equipment around <span style="color:#011E41;">room fit, item type and steam needs</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            Finishing equipment should match the room, the items handled every day and the steam or electrical setup required for the work.
        </p>
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 mb-7">
            @foreach([
                ['t' => 'Room fit',                'd' => 'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75'],
                ['t' => 'Item type',               'd' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z'],
                ['t' => 'Steam needs', 'd' => 'M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z'],
                ['t' => 'Installation and support', 'd' => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z'],
            ] as $pt)
            <span class="inline-flex items-center gap-2">
                <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $pt['d'] }}"/></svg>
                <span class="font-body text-white text-sm font-bold">{{ $pt['t'] }}</span>
            </span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Finishing Equipment Advice
        </a>
    </div>
</section>

{{-- WHERE IT FITS (4 cards) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where It Fits</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Useful where <span style="color:#148af4;">presentation still matters every day</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach([
                ['title' => 'Care homes and nursing homes',       'copy' => 'For resident clothing, uniforms and everyday items where cleaner presentation supports daily standards.', 'img' => '/images/CareFacilities/carefacilitiesheroimage.jpg', 'pos' => 'center center'],
                ['title' => 'Hospitality sites',                  'copy' => 'For guest garments, uniforms and touch-up work around presentation-led daily routines.', 'img' => '/images/Hospitallity/hospitallityhero.png', 'pos' => 'center center'],
                ['title' => 'Smaller laundry rooms',              'copy' => 'For sites that need more than domestic ironing equipment without moving into a full ironer setup.', 'img' => '/images/equipment/td6-multihousing-room.jpg', 'pos' => 'center center'],
                ['title' => 'Garment and wet cleaning',          'copy' => 'For specialist textile care where cleaning, drying and finishing need to work together.', 'img' => '/images/healthcare/customer-care-line6000.jpg', 'pos' => 'center center'],
            ] as $card)
            <div class="group relative overflow-hidden rounded-2xl" style="height:380px;">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] ?? 'center center' }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background:linear-gradient(to top, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.45) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background:rgba(1,30,65,0.90);"></div>
                <div class="absolute inset-0 p-7 flex flex-col justify-end z-10">
                    <p class="font-body text-white/80 text-sm leading-relaxed overflow-hidden max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-0 group-hover:mb-4">{{ $card['copy'] }}</p>
                    <h3 class="font-heading font-bold text-white text-xl leading-snug">{{ $card['title'] }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- RELATED EQUIPMENT (4 cards) --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Related Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Equipment and products used around <span style="color:#148af4;">the same finishing room</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Finishing equipment may sit alongside ironers, wet cleaning, dryers and selected laundry products, depending on what the site needs to wash, dry and finish.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach([
                ['title' => 'Commercial Ironers',        'copy' => 'For higher-output flatwork finishing where working width, room fit and daily output matter.', 'cta' => 'View Ironers',      'route' => route('equipment.category', 'ironers'), 'img' => '/images/equipment/line6000-ironer.webp'],
                ['title' => 'Wet Cleaning',              'copy' => 'For specialist textile care where garments need a controlled cleaning process before finishing.',          'cta' => 'View Wet Cleaning', 'route' => route('equipment.category', 'wet-cleaning'), 'img' => '/images/equipment/FC48.jpg'],
                ['title' => 'Commercial Dryers',         'copy' => 'For drying performance before garment finishing, touch-ups or daily presentation work.',                 'cta' => 'View Dryers',       'route' => route('equipment.category', 'tumble-dryers'), 'img' => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp'],
                ['title' => 'Accessories & Consumables', 'copy' => 'For laundry products and accessories used around washing, drying and finishing.',                           'cta' => 'View Accessories',  'route' => route('equipment.category', 'accessories'), 'img' => '/images/healthcare/MultisaveEQUIP.webp'],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl overflow-hidden flex flex-col h-full">
                <div class="bg-white flex items-center justify-center p-5 border-b border-gray-100" style="height:170px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" class="max-h-full w-auto object-contain">
                </div>
                <div class="p-7 flex flex-col flex-1">
                    <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-3">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-6 flex-1">{{ $card['copy'] }}</p>
                    <a href="{{ $card['route'] }}" class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline mt-auto">
                        {{ $card['cta'] }}
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Finishing Equipment FAQs',
    'heading' => 'Clear answers before <span style="color:#148af4;">your finishing equipment choice</span>',
    'faqs' => [
        ['question' => 'Is finishing equipment the same as a commercial ironer?', 'answer' => 'No. Commercial ironers are usually used for higher-output flatwork finishing. Finishing equipment includes ironing tables, steam irons, presses, form finishers and garment-finishing support.'],
        ['question' => 'Do care homes and nursing homes need finishing equipment?', 'answer' => 'Some do. Where resident clothing, uniforms or smaller daily items need a cleaner final finish, finishing equipment can be a practical option.'],
        ['question' => 'Can finishing equipment support hospitality sites?', 'answer' => 'Yes. Hospitality sites may use finishing equipment for uniforms, guest garments, touch-ups and presentation-led finishing work.'],
        ['question' => 'Do I need ironing tables or a full ironer?', 'answer' => 'That depends on item type, volume, room layout and the finish required. Irish Laundry Systems reviews whether finishing equipment, a commercial ironer or another option is the better fit.'],
        ['question' => 'Can Irish Laundry Systems supply product details?', 'answer' => 'Yes. Irish Laundry Systems can provide product details and official Electrolux Professional resources for selected finishing equipment where available.'],
        ['question' => 'Can this work with wet cleaning?', 'answer' => 'Yes. Finishing equipment can support garment and textile care where wet cleaning, drying and finishing need to work together.'],
    ],
])

{{-- PRODUCT DETAILS --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Product Details</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Need specifications for <span style="color:#148af4;">finishing equipment?</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with the finishing work your laundry room needs to handle. Irish Laundry Systems reviews item type, room fit and finish requirement before sharing product details or official Electrolux Professional resources where available.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            @foreach([
                ['title' => 'Product specifications', 'copy' => 'Ask for product details on ironing tables, steam support, presses, form finishers or specialist finishing equipment.', 'cta' => 'Request Product Details'],
                ['title' => 'Need to compare finishing options?', 'copy' => 'Tell Irish Laundry Systems what the site needs to finish each day. Irish Laundry Systems reviews whether finishing equipment, a commercial ironer or another laundry option is the better fit.', 'cta' => 'Request Equipment Advice'],
            ] as $block)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 shadow-card flex flex-col h-full">
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-3">{{ $block['title'] }}</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6 flex-1">{{ $block['copy'] }}</p>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 w-fit">
                    {{ $block['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Request Finishing Equipment Advice</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Need the right finishing setup for <span style="color:#148af4;">your site?</span>
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Tell Irish Laundry Systems what your laundry room needs to finish each day. Irish Laundry Systems reviews ironing tables, steam support, presses, form finishers or specialist finishing equipment around item type, room fit, installation and aftercare.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Request Finishing Equipment Advice
            </a>
            <a href="{{ route('equipment.category', 'ironers') }}"
               class="inline-flex items-center justify-center gap-2 border-2 border-white/60 hover:border-white text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                View Commercial Ironers
            </a>
        </div>
    </div>
</section>

@endsection
