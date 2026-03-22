@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
            Get a Quote
        </a>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- FILTERS + PRODUCTS GRID -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Filter Sidebar -->
            <aside class="lg:w-64 flex-shrink-0">
                <div class="bg-white border border-border rounded-xl p-5 sticky top-24" x-data="{ typeOpen: true, capacityOpen: true, sectorOpen: true }">
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
                    @php
                    $products = [
                        ['name' => 'WH6-10 10kg Washer', 'capacity' => '10kg', 'sectors' => ['Healthcare', 'Hospitality'], 'slug' => 'wh6-10-10kg-washer'],
                        ['name' => 'WH6-18 18kg Washer', 'capacity' => '18kg', 'sectors' => ['Healthcare', 'Care'], 'slug' => 'wh6-18-18kg-washer'],
                        ['name' => 'WH6-35 35kg Washer', 'capacity' => '35kg', 'sectors' => ['Commercial'], 'slug' => 'wh6-35-35kg-washer'],
                        ['name' => 'WB6-18 Barrier Washer', 'capacity' => '18kg', 'sectors' => ['Healthcare', 'Care'], 'slug' => 'wb6-18-barrier-washer'],
                        ['name' => 'WB6-35 Barrier Washer', 'capacity' => '35kg', 'sectors' => ['Healthcare'], 'slug' => 'wb6-35-barrier-washer'],
                        ['name' => 'WH6-55 55kg Washer', 'capacity' => '55kg', 'sectors' => ['Commercial'], 'slug' => 'wh6-55-55kg-washer'],
                    ];
                    @endphp
                    @foreach ($products as $product)
                    <a href="{{ route('equipment.product', [$categorySlug, $product['slug']]) }}"
                       class="group bg-white border border-border rounded-xl overflow-hidden hover:border-navy hover:shadow-card-hover transition-all duration-200">
                        <!-- Placeholder product image -->
                        <div class="aspect-video bg-bg border-b border-border flex items-center justify-center">
                            <svg class="w-16 h-16 text-muted" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-heading font-bold text-navy text-base mb-1 group-hover:text-steel transition-colors">{{ $product['name'] }}</h3>
                            <p class="font-body text-gray-500 text-xs mb-2">Capacity: {{ $product['capacity'] }}</p>
                            <div class="flex flex-wrap gap-1 mb-3">
                                @foreach ($product['sectors'] as $sec)
                                <span class="text-xs font-body bg-muted text-navy px-2 py-0.5 rounded-full">{{ $sec }}</span>
                                @endforeach
                            </div>
                            <span class="inline-flex items-center gap-1 text-steel text-xs font-body font-semibold">
                                View details <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            </span>
                        </div>
                    </a>
                    @endforeach
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
