@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex items-center gap-2 mb-4">
            <a href="{{ route('equipment') }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">Equipment</a>
            <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            <span class="text-gray-300 text-sm font-body">{{ $category }}</span>
        </div>
        <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl mb-5">{{ $category }} Equipment</h1>
        <p class="font-body text-blue-200 text-lg max-w-2xl leading-relaxed mb-6">
            Commercial {{ strtolower($category) }} equipment supplied, installed and supported by Irish Laundry Systems. Electrolux Professional range available.
        </p>
        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer">
            Request Equipment Quote
        </a>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

@if($categorySlug === 'washers')
<!-- LINE 6000 COMMERCIAL WASHERS INTRO -->
<section class="py-14 lg:py-20 bg-white border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Split: text left, image right --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center mb-14">
            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                    Line 6000 Commercial Washers
                </h2>
                <p class="font-body text-gray-500 text-lg leading-relaxed mb-3">
                    Commercial Washers, built for people and the planet.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    High productivity front-load washers designed to make laundry operations safe, fast and cost controlled.
                </p>
                <a href="#products"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold px-7 py-3.5 rounded-lg text-sm tracking-wide transition-colors">
                    GO TO PRODUCTS
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            <div class="flex justify-center reveal reveal-right">
                <img src="{{ asset('images/equipment/commercialwasher.webp') }}"
                     alt="Line 6000 Commercial Washer"
                     class="w-full max-w-md object-contain drop-shadow-xl">
            </div>
        </div>

        {{-- Green stat band --}}
        <div class="rounded-2xl px-8 py-6 flex flex-col sm:flex-row items-center gap-6 reveal" style="background-color: #c8d8a8;">
            {{-- Badge --}}
            <div class="flex-shrink-0 w-20 h-20 rounded-full border-4 border-white/60 flex items-center justify-center" style="background-color: #a8bc7a;">
                <span class="font-heading font-bold text-white text-lg leading-none text-center">40%<br><span class="text-xs font-body font-normal">Energy<br>Saving</span></span>
            </div>
            <div>
                <p class="font-heading font-bold text-navy text-lg mb-1">Energy savings</p>
                <p class="font-body text-navy/80 text-sm leading-relaxed">
                    Reduce your operational expenditure by up to 40% without compromising on productivity with built-in technologies to optimize utilisation.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ULTIMATE PEACE OF MIND -->
<section class="py-14 lg:py-20 bg-bg border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10 reveal">
            Ultimate peace of mind
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Left: 3 features --}}
            <div class="lg:col-span-2 flex flex-col gap-8">
                @foreach([
                    [
                        'title' => 'Intuitive operation',
                        'body'  => 'Effortless user experience with ClarusVibe control',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122"/>',
                    ],
                    [
                        'title' => 'Long-term savings & productivity',
                        'body'  => 'Automatically adjust water and detergents to keep operational expenditure to a minimum',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>',
                    ],
                    [
                        'title' => 'Certified ergonomics',
                        'body'  => "Reduce absenteeism by improving operators' well-being",
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>',
                    ],
                ] as $feat)
                <div class="flex items-start gap-5 reveal">
                    <div class="flex-shrink-0 w-14 h-14 rounded-full border-2 border-navy flex items-center justify-center">
                        <svg class="w-7 h-7 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">{!! $feat['icon'] !!}</svg>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-lg mb-1">{{ $feat['title'] }}</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $feat['body'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Right: Download + Discover --}}
            <div class="flex flex-col gap-5 reveal reveal-right">

                {{-- Download --}}
                <div class="bg-navy rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-white text-base mb-4">Download</h4>
                    <ul class="space-y-4">
                        @foreach([
                            ['label' => 'Line 6000 Washers & Dryers brochure',          'file' => 'EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
                            ['label' => 'Discover the full range of Ecolabel Detergents','file' => ''],
                            ['label' => 'Line 6000 High Spin Washers & Heat Pump Dryers','file' => 'EPR-Line6000-DryersBrochure-01072025_EN.pdf'],
                        ] as $pdf)
                        <li>
                            @if($pdf['file'])
                            <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-start gap-2 font-body text-sm text-white/80 hover:text-white transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                                {{ $pdf['label'] }}
                            </a>
                            @else
                            <span class="flex items-start gap-2 font-body text-sm text-white/40">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                                {{ $pdf['label'] }}
                            </span>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Discover --}}
                <div class="bg-white border border-border rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-navy text-base mb-4">Discover</h4>
                    <ul class="space-y-4">
                        @foreach([
                            ['label' => "What's in your detergents and cleaning products?", 'href' => '#'],
                            ['label' => 'Ensuring Profitability With Efficient On-Premises Laundry', 'href' => '#'],
                            ['label' => 'Essentia: the heart of customer service', 'href' => route('contact')],
                        ] as $link)
                        <li>
                            <a href="{{ $link['href'] }}" class="flex items-start gap-2 font-body text-sm text-navy hover:text-orange font-bold transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                                {{ $link['label'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
@endif

<!-- FILTERS + PRODUCTS GRID -->
<section id="products" class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Filter Sidebar -->
            <aside class="lg:w-64 flex-shrink-0">
                <div class="bg-white border border-border rounded-2xl p-5 sticky top-24" x-data="{ typeOpen: true, capacityOpen: true, sectorOpen: true }">
                    <h3 class="font-heading font-semibold text-navy text-base mb-4">Filter Equipment</h3>

                    <!-- Type filter -->
                    <div class="mb-4">
                        <button @click="typeOpen = !typeOpen" class="flex items-center justify-between w-full text-sm font-body font-semibold text-navy mb-2 cursor-pointer">
                            Equipment Type
                            <svg class="w-4 h-4 transition-transform" :class="typeOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div x-show="typeOpen" class="space-y-1.5">
                            @foreach (['All Types', 'Freestanding', 'Built-In / Pass-Through', 'High Capacity', 'Standard Capacity'] as $type)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="rounded border-border text-steel cursor-pointer">
                                <span class="text-sm font-body text-gray-600">{{ $type }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <hr class="border-border my-3">

                    <!-- Capacity filter -->
                    <div class="mb-4">
                        <button @click="capacityOpen = !capacityOpen" class="flex items-center justify-between w-full text-sm font-body font-semibold text-navy mb-2 cursor-pointer">
                            Capacity
                            <svg class="w-4 h-4 transition-transform" :class="capacityOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div x-show="capacityOpen" class="space-y-1.5">
                            @foreach (['Up to 10kg', '10–18kg', '18–30kg', '30kg+'] as $cap)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="rounded border-border text-steel cursor-pointer">
                                <span class="text-sm font-body text-gray-600">{{ $cap }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <hr class="border-border my-3">

                    <!-- Sector filter -->
                    <div>
                        <button @click="sectorOpen = !sectorOpen" class="flex items-center justify-between w-full text-sm font-body font-semibold text-navy mb-2 cursor-pointer">
                            Sector
                            <svg class="w-4 h-4 transition-transform" :class="sectorOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div x-show="sectorOpen" class="space-y-1.5">
                            @foreach (['Healthcare', 'Hospitality', 'Care Facilities', 'Commercial'] as $sector)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="rounded border-border text-steel cursor-pointer">
                                <span class="text-sm font-body text-gray-600">{{ $sector }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-4 pt-4 border-t border-border">
                        <a href="{{ route('contact') }}" class="block w-full text-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-4 py-2.5 rounded-lg text-sm transition-colors cursor-pointer">
                            Get a Quote
                        </a>
                    </div>
                </div>
            </aside>

            <!-- Products Grid -->
            <div class="flex-1">
                <div class="flex items-center justify-between mb-6">
                    <p class="font-body text-gray-600 text-sm">Showing equipment in <strong class="text-navy">{{ $category }}</strong></p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5">
                    @forelse ($products as $product)
                    <a href="{{ route('equipment.product', [$categorySlug, $product->slug]) }}"
                       class="group bg-white border border-border rounded-2xl overflow-hidden hover:border-navy hover:shadow-card-hover transition-all duration-200">
                        <!-- Product image -->
                        <div class="aspect-video bg-bg border-b border-border flex items-center justify-center overflow-hidden">
                            @if ($product->image_path)
                            <img src="{{ asset('storage/' . $product->image_path) }}"
                                 alt="{{ $product->name }}"
                                 class="w-full h-full object-cover">
                            @else
                            <svg class="w-16 h-16 text-muted" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            @endif
                        </div>
                        <div class="p-4">
                            <h3 class="font-heading font-bold text-navy text-base mb-1 group-hover:text-steel transition-colors">{{ $product->name }}</h3>
                            @if ($product->capacity)
                            <p class="font-body text-gray-500 text-xs mb-2">Capacity: {{ $product->capacity }}</p>
                            @endif
                            <div class="flex flex-wrap gap-1 mb-3">
                                @foreach ($product->sectors ?? [] as $sec)
                                <span class="text-xs font-body bg-muted text-navy px-2 py-0.5 rounded-full">{{ $sec }}</span>
                                @endforeach
                            </div>
                            <span class="inline-flex items-center gap-1 text-steel text-xs font-body font-semibold">
                                View details <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            </span>
                        </div>
                    </a>
                    @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="font-body text-gray-500">No equipment available in this category yet. <a href="{{ route('contact') }}" class="text-steel font-semibold hover:underline">Contact us</a> for availability.</p>
                    </div>
                    @endforelse
                </div>
                <div class="mt-8 text-center">
                    <p class="font-body text-gray-500 text-sm mb-4">Looking for a specific model or capacity? We can advise on the right specification for your operation.</p>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-semibold px-6 py-3 rounded-lg transition-colors cursor-pointer">
                        Talk to an Engineer
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Need spec advice?',
    'subheading' => 'Our engineers can advise on the right equipment for your operation — capacity, configuration and support options.',
    'primaryText' => 'Get a Quote',
    'primaryHref' => '/contact',
])

@endsection
