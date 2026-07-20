@extends('layouts.app')

@section('pageTitle', 'Commercial Finishing Equipment | Ironing Tables, Presses & Steam | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial finishing equipment for care homes, hospitality and garment care. Irish Laundry Systems supplies, installs and supports Electrolux Professional ironing tables, steam support, presses and form finishers across Ireland.">
@endsection

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden flex flex-col min-h-[520px] lg:min-h-[560px] lg:h-[720px]">
    <img src="/images/shared/Line 6000 solutions products_72dpi.jpg" alt="Commercial finishing equipment"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-12 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Finishing Equipment</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    <span class="block lg:whitespace-nowrap">Choose the right finishing equipment for</span>
                    <span class="block lg:whitespace-nowrap" style="color:#148af4;">professional garment care</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Compare ironing tables, presses and specialist finishing equipment to suit your laundry, available space and daily workload.
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
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Finishing Performance</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Plan finishing around <span style="color:#148af4;">the scale of your business</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    The right setup should balance garment quality, operator time and capacity, from smaller operations to higher production volumes.
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

{{-- FINISHING EQUIPMENT OPTIONS (visual selector — main card-based selector) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal max-w-4xl">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Finishing Equipment Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare finishing equipment by <span style="color:#148af4;">task, space and workload</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Review ironing tables, steam systems, presses and garment finishers before selecting the right combination for your site.
            </p>
        </div>

        @php
            $detailSections = [
                [
                    'id'       => 'ironing-tables',
                    'title'    => 'Ironing Tables',
                    'body'     => 'For everyday garments, uniforms, resident clothing and smaller items that need a cleaner final finish.',
                    'points'   => ['Daily finishing', 'Garment care', 'Room fit'],
                    'primary'  => 'Ask About Ironing Tables',
                    'img'      => '/images/pages/finishing-equipment/FIT1.jpg',
                ],
                [
                    'id'       => 'steam-support',
                    'title'    => 'Steam Boilers & Steam Support',
                    'body'     => 'For hand-finishing, touch-ups and garment presentation where steady steam support matters.',
                    'points'   => ['Hand finishing', 'Steam support', 'Flexible use'],
                    'primary'  => 'Ask About Steam Support',
                    'img'      => '/images/pages/finishing-equipment/FSB3.3.jpeg',
                ],
                [
                    'id'       => 'presses',
                    'title'    => 'Presses & Form Finishers',
                    'body'     => 'For garments that need stronger shape, sharper presentation and more consistency than manual ironing alone.',
                    'points'   => ['Garment shape', 'Consistent finish', 'Professional presentation'],
                    'primary'  => 'Ask About Presses & Finishers',
                    'img'      => '/images/pages/finishing-equipment/FPA1-D.jpg',
                ],
                [
                    'id'       => 'garment-finishing',
                    'title'    => 'Shirt & Trouser Finishing',
                    'body'     => 'For shirts, trousers and uniforms where shape, creases, pleats and finish quality matter.',
                    'points'   => ['Shirt finish', 'Trouser finish', 'Uniform care'],
                    'primary'  => 'Ask About Garment Finishing',
                    'img'      => '/images/pages/finishing-equipment/FF1.jpg',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
            @foreach($detailSections as $d)
            <div id="{{ $d['id'] }}" class="scroll-mt-28 bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-col h-full reveal">
                <div class="w-full flex items-center justify-center" style="height:280px;">
                    <img src="{{ $d['img'] }}" alt="{{ $d['title'] }}"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="max-width:100%; max-height:280px; object-fit:contain;">
                </div>
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2 mt-4">{{ $d['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $d['body'] }}</p>
                <div class="flex flex-wrap items-center gap-x-3 gap-y-1.5 mb-5">
                    @foreach($d['points'] as $pi => $pt)
                    @if($pi > 0)<span class="text-gray-300">|</span>@endif
                    <span class="inline-flex items-center gap-1.5 font-body text-navy text-xs font-bold">
                        <span class="text-[#148af4]">&#9656;</span> {{ $pt }}
                    </span>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-1.5 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold text-sm px-5 py-3 rounded-lg transition-colors duration-200 mt-auto w-fit">
                    {{ $d['primary'] }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- white spacer between the finishing equipment options and the resources bar --}}
<div class="bg-white h-10 lg:h-14"></div>

{{-- COMPACT RESOURCES BAR (brochures + resources — before the product range) --}}
<section class="py-8 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-10">
            @foreach([
                ['title' => 'Official Resources',  'links' => [['l' => 'Hot Cylinder Ironers brochure', 'h' => '/pdfs/EPR-Brochure%20Line%206000-Hot_Cylinder_Ironers-ENG-2023_LR.pdf'], ['l' => 'Product resources', 'h' => route('resources')]]],
                ['title' => 'Browse Finishing',    'links' => [['l' => 'Ironing Tables', 'h' => '#ironing-tables'], ['l' => 'Steam Support', 'h' => '#steam-support'], ['l' => 'Presses & Finishers', 'h' => '#presses']]],
                ['title' => 'Related Equipment',   'links' => [['l' => 'Commercial Ironers', 'h' => route('equipment.category', 'ironers')], ['l' => 'Wet Cleaning', 'h' => route('equipment.category', 'wet-cleaning')], ['l' => 'Commercial Dryers', 'h' => route('equipment.category', 'tumble-dryers')]]],
            ] as $grp)
            <div class="{{ !$loop->last ? 'sm:border-r sm:border-gray-200 sm:pr-6 lg:pr-10' : '' }}">
                <p class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em] mb-3">{{ $grp['title'] }}</p>
                <div class="flex flex-wrap gap-x-4 gap-y-2">
                    @foreach($grp['links'] as $lk)
                    <a href="{{ $lk['h'] }}" class="inline-flex items-center gap-1.5 font-body text-sm text-gray-600 hover:text-[#148af4] transition-colors">
                        <svg class="w-3.5 h-3.5 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        {{ $lk['l'] }}
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FINISHING EQUIPMENT RANGE (product grid) --}}
<section id="finishing-range" class="py-16 lg:py-24 bg-white border-t border-gray-100 scroll-mt-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Finishing Equipment Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Explore selected Electrolux Professional <span style="color:#148af4;">finishing equipment</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Browse finishers, ironing tables, presses, spotting equipment and steam boilers. Irish Laundry Systems can confirm the right model and specification for your site.
            </p>
        </div>

        @php
            // Per-model images live in public/images/pages/finishing-equipment/ named by model code
            // (FIT1 keeps its existing path). Each card shows its real photo the moment the file
            // is dropped in; until then it falls back to the Electrolux Professional placeholder.
            $finPlaceholder = '/images/logo/electrolux-partner.png';
            // Resolve a model image from images/pages/finishing-equipment/,
            // trying common extensions. Returns null (→ placeholder) when nothing is found.
            $finResolve = function ($code) {
                foreach (['images/pages/finishing-equipment/'] as $dir) {
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
                    Specialist equipment for <span style="color:#148af4;">specific finishing tasks</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                    Explore spotting units, finishing cabinets and other specialist equipment for more specific garment-care requirements.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.86 9.86 0 0 1-4-.8L3 21l1.9-3.8A7.6 7.6 0 0 1 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8Z"/></svg>
                    Ask About Specialist Finishing
                </a>
            </div>

            <div class="reveal reveal-right grid grid-cols-2 lg:grid-cols-4">
                @foreach([
                    ['label' => 'Spotting Units<br>&amp; Cabinets',   'img' => '235'],
                    ['label' => 'Finishing<br>Cabinets',              'img' => '236'],
                    ['label' => 'Rotary<br>Finishing Cabinets',       'img' => '237'],
                    ['label' => 'Other Specialist<br>Equipment',      'img' => '238'],
                ] as $opt)
                <a href="{{ route('contact') }}"
                   class="group px-5 py-2 {{ $loop->first ? '' : 'border-l border-gray-200' }}">
                    <img src="/images/icons/{{ $opt['img'] }}.png" alt="" aria-hidden="true" class="w-20 h-20 object-contain mb-5">
                    <p class="font-heading font-bold text-navy text-base leading-snug mb-4">{!! $opt['label'] !!}</p>
                    <span class="inline-flex text-[#148af4] group-hover:translate-x-1 transition-transform duration-200">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </span>
                </a>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ONGOING SUPPORT --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Ongoing Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support for finishing equipment <span style="color:#148af4;">beyond installation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Repairs, preventive maintenance, Equipment Rental and aftercare are available to support your equipment over time.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-Outs',
                    'text'  => 'Service and breakdown support when finishing equipment faults interrupt garment presentation or daily output.',
                    'cta'   => 'Request Call-Out',
                    'route' => route('repairs'),
                    'img'   => '/images/shared/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned servicing to reduce unexpected repairs and keep finishing equipment condition visible.',
                    'cta'   => 'View Maintenance Options',
                    'route' => route('service-contracts'),
                    'img'   => '/images/shared/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Lower upfront cost for finishing equipment replacement, capacity planning or expansion where rental is the right fit.',
                    'cta'   => 'See Rental Options',
                    'route' => route('rental'),
                    'img'   => '/images/shared/td6-11-multihousing-room-front.jpg',
                    'pos'   => '66% center',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Service history, follow-up guidance and parts access where needed after installation, rental, repair or inspection.',
                    'cta'   => 'Explore Support Options',
                    'route' => route('parts-aftercare'),
                    'img'   => '/images/shared/services-overview-hero-portrait.jpg',
                    'pos'   => 'center center',
                ],
            ] as $card)
            <a href="{{ $card['route'] }}"
               class="group relative overflow-hidden rounded-2xl block"
               style="height:400px;">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.4) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.88);"></div>
                <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-4">
                        <p class="font-body text-white/80 text-sm leading-relaxed">{!! $card['text'] !!}</p>
                    </div>
                    <h3 class="font-heading font-bold text-white text-xl leading-tight mb-4 lg:whitespace-nowrap">{!! $card['title'] !!}</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center gap-2 bg-white/15 group-hover:bg-orange border border-white/30 group-hover:border-orange text-white font-body font-bold text-xs uppercase tracking-wide px-4 py-2.5 rounded-full transition-colors duration-200">
                            {!! $card['cta'] !!}
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- WHERE IT FITS (4 cards) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where It Fits</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Finishing equipment for <span style="color:#148af4;">different laundry businesses</span>
            </h2>
        </div>

        @php
        $fitCards = [
            ['title' => 'Care Facilities',        'copy' => 'For resident clothing, staff garments and other items that need individual finishing.', 'img' => '/images/pages/sectors/carefacilitiesheroimage.jpg', 'pos' => 'center center'],
            ['title' => 'Commercial Laundries',   'copy' => 'For businesses handling varied garment types and regular production volumes.', 'img' => '/images/shared/td6-multihousing-room.jpg', 'pos' => 'center center'],
            ['title' => 'Wet Cleaning Businesses','copy' => 'For delicate garments that need professional washing, drying and finishing.', 'img' => '/images/shared/customer-care-line6000.jpg', 'pos' => 'center center'],
            ['title' => 'Hotels &amp; Hospitality',   'copy' => 'For guest garments, staff clothing and valet or in-house laundry services.', 'img' => '/images/pages/sectors/hospitallityhero.png', 'pos' => 'center center'],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: {{ count($fitCards) }},
                perView: 4,
                timer: null,
                get maxIndex() { return Math.max(0, this.count - this.perView); },
                next()  { this.active = this.active >= this.maxIndex ? 0 : this.active + 1; this.restart(); },
                prev()  { this.active = this.active <= 0 ? this.maxIndex : this.active - 1; this.restart(); },
                go(i)   { this.active = Math.min(i, this.maxIndex); this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.next(), 6000); },
                init() {
                    const calc = () => { this.perView = window.innerWidth < 640 ? 1 : (window.innerWidth < 1024 ? 2 : 4); if (this.active > this.maxIndex) this.active = this.maxIndex; };
                    calc();
                    window.addEventListener('resize', calc);
                    this.timer = setInterval(() => this.next(), 6000);
                },
            }"
            class="relative reveal"
        >
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out -mx-2.5"
                     :style="`transform: translateX(-${active * (100 / perView)}%)`">
                    @foreach($fitCards as $card)
                    <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-2.5">
                        <div class="group relative overflow-hidden rounded-2xl" style="height:320px;">
                            <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                                 class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                 style="object-position: {{ $card['pos'] ?? 'center center' }};">
                            <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                                 style="background:linear-gradient(to top, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.45) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                 style="background:rgba(1,30,65,0.90);"></div>
                            <div class="absolute inset-0 p-7 flex flex-col justify-end z-10">
                                <p class="font-body text-white/80 text-sm leading-relaxed overflow-hidden max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-0 group-hover:mb-4">{{ $card['copy'] }}</p>
                                <h3 class="font-heading font-bold text-white text-xl leading-snug">{!! $card['title'] !!}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Dots centered + arrows bottom-right --}}
            <div class="relative mt-8 flex items-center justify-center">
                <div class="flex items-center gap-2">
                    <template x-for="i in (maxIndex + 1)" :key="i">
                        <button @click="go(i - 1)"
                                :class="active === (i - 1) ? 'bg-navy w-2.5 h-2.5' : 'bg-navy/25 hover:bg-navy/50 w-2.5 h-2.5'"
                                class="rounded-full transition-all duration-300"></button>
                    </template>
                </div>
                <div class="absolute right-0 flex gap-2">
                    <button @click="prev()"
                            class="w-11 h-11 rounded-full bg-navy text-white hover:bg-navy/90 transition-colors flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
                    </button>
                    <button @click="next()"
                            class="w-11 h-11 rounded-full bg-navy text-white hover:bg-navy/90 transition-colors flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                    </button>
                </div>
            </div>
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

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['title' => 'Commercial Ironers',        'copy' => 'For higher-output flatwork finishing where working width, room fit and daily output matter.', 'cta' => 'View Ironers',      'route' => route('equipment.category', 'ironers'), 'img' => '/images/shared/line6000-ironer.webp'],
                ['title' => 'Wet Cleaning',              'copy' => 'For specialist textile care where garments need a controlled cleaning process before finishing.',          'cta' => 'View Wet Cleaning', 'route' => route('equipment.category', 'wet-cleaning'), 'img' => '/images/pages/finishing-equipment/FC48.jpg'],
                ['title' => 'Commercial Dryers',         'copy' => 'For drying performance before garment finishing, touch-ups or daily presentation work.',                 'cta' => 'View Dryers',       'route' => route('equipment.category', 'tumble-dryers'), 'img' => '/images/pages/dryers/Tumble-dryers_Heat-Pump_1-1.webp'],
                ['title' => 'Accessories & Consumables', 'copy' => 'For laundry products and accessories used around washing, drying and finishing.',                           'cta' => 'View Accessories',  'route' => route('equipment.category', 'accessories'), 'img' => '/images/shared/MultisaveEQUIP.webp'],
            ] as $card)
            <div class="flex flex-col gap-5 h-full">
                <div style="min-height:120px;">
                    <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $card['copy'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:200px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="max-width:100%; max-height:200px; object-fit:contain;">
                </div>
                <a href="{{ $card['route'] }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-heading font-bold text-sm px-5 py-3.5 rounded-lg transition-colors mt-auto">
                    {{ $card['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
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
