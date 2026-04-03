@extends('layouts.app')

@section('meta')
<meta name="description" content="ILS provides engineering-led commercial laundry support for high-throughput and industrial operations across Ireland — service contracts, reactive repairs, equipment supply and lifecycle planning.">
@endsection

@section('content')

@include('components.sector-tabs')

<!-- 1. HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="reveal reveal-left">
                <x-pretitle label="Commercial & Industrial Laundry Support" />
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-6">
                    Commercial laundry downtime has a direct cost to throughput and output.
                </h1>
                <p class="font-body text-gray-300 text-lg leading-relaxed mb-8">
                    Structured preventive maintenance, fast breakdown response, and equipment lifecycle planning — built around the throughput demands of commercial and industrial laundry operations.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Talk to an Engineer
                    </a>
                    <a href="tel:+353000000000"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                        </svg>
                        Call an Engineer
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3 reveal reveal-right">
                <div class="col-span-2 rounded-2xl overflow-hidden h-56 bg-white/5">
                    <img src="/images/commercial/hero-main.jpg" alt="Commercial laundry operation" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
                <div class="rounded-2xl overflow-hidden h-40 bg-white/5">
                    <img src="/images/commercial/hero-panel.jpg" alt="Laundry equipment panel" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
                <div class="bg-white/5 border border-white/10 rounded-2xl p-5 flex flex-col justify-center h-40">
                    <p class="font-heading font-bold text-white text-sm leading-snug">In a commercial laundry operation, machine utilisation drives output. Every hour of unplanned downtime creates a backlog that costs time and money to recover from.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 2. PROOF BAR -->
@include('components.proof-bar')

<!-- 3. SPLIT STATEMENT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-6xl leading-tight">
                    We'll keep your commercial operation at full throughput.
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-700 text-xl leading-relaxed mb-4">
                    ILS supports commercial and industrial laundry operations across Ireland — reducing breakdown frequency, extending equipment life, and building the maintenance history that makes lifecycle decisions easier.
                </p>
                <p class="font-body text-gray-500 leading-relaxed mb-8">
                    Whatever the production schedule demands, we'll take care of it.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Talk to an Engineer
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 4. WHY COMMERCIAL IS DIFFERENT -->
<section class="py-16 lg:py-24 bg-white border-t border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">

            <div class="reveal reveal-left">
                <x-pretitle label="Why Commercial Laundry Maintenance Is Different" />
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                    Why do commercial operators choose ILS for their laundry maintenance?
                </h2>
                <p class="font-body text-gray-600 leading-relaxed mb-6">The main reasons are:</p>
                <ul class="space-y-4 mb-8">
                    @foreach ([
                        'Prevents the backlog that unplanned machine downtime creates across a high-volume operation.',
                        'Builds the documented service history needed to make justified maintain-versus-replace decisions.',
                        'Experienced engineers with genuine Electrolux Professional parts — focused on first-visit resolution.',
                        'Structured preventive maintenance reduces failure frequency and extends equipment service life.',
                        'Multi-site arrangements available for operations running across multiple locations.',
                    ] as $bullet)
                    <li class="flex items-start gap-3">
                        <span class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </span>
                        <span class="font-body text-gray-700 text-sm leading-relaxed">{{ $bullet }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 border-2 border-navy text-navy hover:bg-navy hover:text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                    Talk to our team about your operation
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-3 reveal reveal-right">
                <div class="flex flex-col gap-3">
                    <div class="rounded-2xl overflow-hidden h-52 bg-gray-200">
                        <img src="/images/commercial/plant.jpg" alt="Commercial laundry plant" class="w-full h-full object-cover" onerror="this.style.display='none'">
                    </div>
                    <div class="rounded-2xl overflow-hidden h-52 bg-gray-200">
                        <img src="/images/commercial/operator.jpg" alt="Laundry operator at work" class="w-full h-full object-cover" onerror="this.style.display='none'">
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden bg-gray-200" style="min-height:424px;">
                    <img src="/images/commercial/engineer.jpg" alt="ILS engineer on site" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 5. STATEMENT SECTION -->
<section class="min-h-[480px] flex items-center py-20 lg:py-28 relative overflow-hidden"
    style="background-color:#011E41; background-image:linear-gradient(90deg,rgba(1,30,65,0.93) 0%,rgba(1,30,65,0.80) 55%,rgba(1,30,65,0.30) 100%), url('/images/commercial/statement-bg.jpg'); background-size:cover; background-position:right center;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-2xl relative z-10 reveal reveal-left">
            <h2 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-8">
                Reactive maintenance is the most expensive way to run a commercial laundry.
            </h2>
            <ul class="space-y-4 mb-10">
                @foreach ([
                    'Every unplanned breakdown creates a backlog that takes hours or days to recover.',
                    'Without a maintenance record, the maintain-versus-replace decision is made blind.',
                    'Aging equipment costs more per year in repairs than a replacement — but only structured records prove it.',
                    'ILS gives commercial operators the data, the support, and the response to make better decisions.',
                ] as $point)
                <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-2 h-2 rounded-full bg-[#148af4] mt-2"></span>
                    <span class="font-body text-gray-300 leading-relaxed">{{ $point }}</span>
                </li>
                @endforeach
            </ul>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Talk to an Engineer
            </a>
        </div>
    </div>
</section>

<!-- 6. HOW ILS SUPPORTS COMMERCIAL OPERATIONS -->
<section class="py-16 lg:py-24 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10 reveal">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">How ILS supports commercial operations</h2>
            <p class="font-body text-gray-500 text-lg max-w-2xl">Our services mapped to throughput, lifecycle, and operational demands.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Service Contracts -->
            <div class="bg-bg border border-border rounded-2xl p-6 flex flex-col card-hover reveal">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Service Contracts</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Structured preventive maintenance — documented per machine, reducing failure frequency and producing the service history that supports lifecycle decisions.</p>
                <a href="{{ route('service-contracts') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    View service contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Repairs & Call-outs -->
            <div class="bg-bg border border-border rounded-2xl p-6 flex flex-col card-hover reveal">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Repairs &amp; Call-outs</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Fast triage and engineer dispatch with genuine Electrolux Professional parts — focused on first-visit resolution to get throughput back without extended backlog.</p>
                <a href="{{ route('repairs') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Repairs &amp; call-outs
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Equipment Supply -->
            <div class="bg-bg border border-border rounded-2xl p-6 flex flex-col card-hover reveal">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Equipment Supply</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Commercial laundry equipment from the Electrolux Professional range — supplied, installed, and commissioned for your site by engineers who understand high-throughput operations.</p>
                <a href="{{ route('equipment') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Browse equipment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Equipment Rental -->
            <div class="bg-bg border border-border rounded-2xl p-6 flex flex-col card-hover reveal">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Equipment Rental</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Access to new commercial equipment without capital outlay — inclusive of maintenance support, a practical path for sites where the maintain-versus-replace calculation is shifting.</p>
                <a href="{{ route('rental') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Equipment rental
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 7. EQUIPMENT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10 reveal">
            <x-pretitle label="Commercial Equipment" />
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">Equipment built for commercial throughput.</h2>
            <p class="font-body text-gray-500 text-lg max-w-2xl">Electrolux Professional equipment — specified, installed, and maintained by ILS.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-10">

            @foreach ([
                [
                    'title' => 'High-Capacity Washers',
                    'desc'  => 'Large-format washer-extractors for continuous high-volume operation — matched to the throughput requirements of commercial laundry sites running full shift patterns.',
                ],
                [
                    'title' => 'Industrial Tumble Dryers',
                    'desc'  => 'High-capacity dryers to maintain linen flow at production pace — keeping throughput consistent and preventing drying-stage bottlenecks.',
                ],
                [
                    'title' => 'Finishing & Ironing Equipment',
                    'desc'  => 'Flatwork ironers and finishing systems for commercial-scale linen processing — handling volume at the final stage without creating a queue.',
                ],
                [
                    'title' => 'Washer-Extractors',
                    'desc'  => 'High-spin extraction reducing drying time and energy cost — essential for operations where cycle time directly affects daily throughput.',
                ],
            ] as $item)
            <div class="bg-bg border border-border rounded-2xl overflow-hidden card-hover reveal">
                <div class="h-48 bg-bg flex items-center justify-center border-b border-border">
                    <span class="font-body text-xs text-gray-400">Equipment image</span>
                </div>
                <div class="p-6">
                    <h3 class="font-heading font-semibold text-navy text-base mb-2">{{ $item['title'] }}</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed mb-4">{{ $item['desc'] }}</p>
                    <a href="{{ route('equipment') }}" class="inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                        View equipment
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
        <div class="flex flex-col sm:flex-row gap-4 items-center reveal">
            <a href="{{ route('equipment') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200">
                Browse all commercial equipment
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
            <a href="{{ route('contact') }}" class="font-body text-navy font-semibold text-sm hover:text-steel transition-colors">
                Not sure what you need? Talk to an engineer &rarr;
            </a>
        </div>
    </div>
</section>

<!-- 8. PROOF POINTS -->
<section class="py-16 lg:py-20 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

            <!-- White -->
            <div class="bg-white border border-border rounded-2xl p-6 reveal">
                <h3 class="font-heading font-bold text-navy text-lg mb-2">Throughput First</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Maintenance structured around your shift patterns and production schedule.</p>
            </div>

            <!-- Navy -->
            <div class="bg-navy rounded-2xl p-6 reveal">
                <h3 class="font-heading font-bold text-white text-lg mb-2">First Visit Fix</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">Engineers dispatched with genuine OEM parts — focused on resolution, not callbacks.</p>
            </div>

            <!-- White -->
            <div class="bg-white border border-border rounded-2xl p-6 reveal">
                <h3 class="font-heading font-bold text-navy text-lg mb-2">Lifecycle Data</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Service history per machine — making the maintain-versus-replace decision visible.</p>
            </div>

            <!-- Navy -->
            <div class="bg-navy rounded-2xl p-6 reveal">
                <h3 class="font-heading font-bold text-white text-lg mb-2">Multi-Site</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">One contract covering all your locations — consistent standards, single point of contact.</p>
            </div>

        </div>
    </div>
</section>

<!-- 9. COMMERCIAL ROUTE -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            <a href="{{ route('equipment') }}" class="block bg-white border border-border rounded-2xl p-6 card-hover reveal">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>
                    </svg>
                </div>
                <p class="font-body text-xs font-semibold text-[#148af4] uppercase tracking-wide mb-1">Equipment Route</p>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Commercial laundry equipment</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">High-capacity machines matched to commercial throughput and shift pattern demands.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Browse equipment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <a href="{{ route('service-contracts') }}" class="block bg-white border border-border rounded-2xl p-6 card-hover reveal">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/>
                    </svg>
                </div>
                <p class="font-body text-xs font-semibold text-[#148af4] uppercase tracking-wide mb-1">Service Route</p>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Service contracts for commercial operations</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Preventive maintenance, machine-level records, and priority response — structured for production environments.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    View service contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <a href="{{ route('contact') }}" class="block bg-white border border-border rounded-2xl p-6 card-hover reveal">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"/>
                    </svg>
                </div>
                <p class="font-body text-xs font-semibold text-[#148af4] uppercase tracking-wide mb-1">Engineering Route</p>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Site assessment and lifecycle planning</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Engineering advice on current equipment, maintenance cost, and the right point to invest in replacement.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Talk to an engineer
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

        </div>
    </div>
</section>

<!-- 10. ASSESSMENT FORM -->
<section id="commercial-assessment" class="py-16 lg:py-24 bg-bg border-t border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">

            <!-- Left navy card -->
            <div class="bg-navy rounded-2xl p-8 lg:p-10 reveal reveal-left">
                <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight mb-4">
                    Talk to an ILS engineer about your operation.
                </h2>
                <p class="font-body text-gray-300 leading-relaxed mb-8">
                    Site review, equipment assessment, and a maintenance structure matched to your throughput and lifecycle requirements.
                </p>
                <div class="flex flex-col gap-3">
                    <button type="submit" form="commercial-form"
                            class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Assessment
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </button>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Talk to an Engineer
                    </a>
                </div>
            </div>

            <!-- Right white form -->
            <div class="bg-white border border-border rounded-2xl p-8 lg:p-10 reveal reveal-right">
                <form id="commercial-form" action="#" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block font-body text-sm font-semibold text-gray-700 mb-1.5" for="commercial-name">Name</label>
                            <input type="text" id="commercial-name" name="name" placeholder="Your name"
                                   class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#148af4]">
                        </div>
                        <div>
                            <label class="block font-body text-sm font-semibold text-gray-700 mb-1.5" for="commercial-company">Company Name</label>
                            <input type="text" id="commercial-company" name="company" placeholder="Your company"
                                   class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#148af4]">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block font-body text-sm font-semibold text-gray-700 mb-1.5" for="commercial-phone">Phone</label>
                            <input type="tel" id="commercial-phone" name="phone" placeholder="Your phone number"
                                   class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#148af4]">
                        </div>
                        <div>
                            <label class="block font-body text-sm font-semibold text-gray-700 mb-1.5" for="commercial-email">Email</label>
                            <input type="email" id="commercial-email" name="email" placeholder="Your email address"
                                   class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#148af4]">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block font-body text-sm font-semibold text-gray-700 mb-1.5" for="commercial-message">Message</label>
                        <textarea id="commercial-message" name="message" rows="5" placeholder="Tell us about your operation — number of machines, shift patterns, current maintenance arrangements…"
                                  class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#148af4] resize-none"></textarea>
                    </div>
                    <button type="submit"
                            class="w-full bg-navy hover:bg-steel text-white font-body font-bold py-3 rounded-lg text-sm transition-colors">
                        Submit Enquiry
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- 11. CTA BAND -->
@include('components.cta-band', [
    'heading'     => 'Talk to an ILS engineer about your commercial operation.',
    'subheading'  => 'We will assess your site, review your current maintenance arrangements and equipment profile, and help you build a service structure that reduces downtime and controls lifecycle cost.',
    'primaryText' => 'Talk to an Engineer',
    'primaryHref' => route('contact'),
])

@endsection
