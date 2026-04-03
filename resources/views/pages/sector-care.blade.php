@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led laundry support for nursing homes and care facilities across Ireland — structured maintenance, documented records, and priority response for HIQA-compliant operations.">
@endsection

@section('content')

@include('components.sector-tabs')

<!-- 1. HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Left: copy -->
            <div class="reveal reveal-left">
                <x-pretitle label="Care Facility Laundry Support" />
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-6">
                    Care facility laundry can't stop. Neither can the service behind it.
                </h1>
                <p class="font-body text-gray-300 text-lg leading-relaxed mb-8">
                    Engineering-led laundry support for nursing homes and care facilities — structured maintenance, documented records, and priority response when it matters.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Assessment
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

            <!-- Right: 2-col image grid -->
            <div class="grid grid-cols-2 gap-3 reveal reveal-right">
                <!-- Hero main — spans both columns -->
                <div class="col-span-2 rounded-2xl overflow-hidden h-56 bg-white/5">
                    <img src="/images/care/hero-main.jpg" alt="Care facility laundry installation" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
                <!-- Hero panel -->
                <div class="rounded-2xl overflow-hidden h-40 bg-white/5">
                    <img src="/images/care/hero-panel.jpg" alt="Laundry control panel" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
                <!-- Info card -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-5 h-40 flex flex-col justify-center">
                    <p class="font-heading font-bold text-white text-sm leading-snug">Care environments need documentation, continuity, and engineers who understand the urgency of the setting.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 2. PROOF BAR -->
@include('components.proof-bar')

<!-- 3. SPLIT STATEMENT -->
<section class="py-16 lg:py-24 bg-white border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-6xl leading-tight">
                    We'll keep your critical laundry equipment running — every day of the week.
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-700 text-xl leading-relaxed mb-4">
                    ILS supports care facilities and nursing homes across Ireland — reducing equipment failure, supporting HIQA compliance, and keeping laundry operations continuous.
                </p>
                <p class="font-body text-gray-500 leading-relaxed mb-8">
                    Whatever your site requires, we'll take care of it.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Request a Care Facility Assessment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 4. WHY CARE FACILITIES ARE DIFFERENT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Left: headline + bullets + CTA -->
            <div class="reveal reveal-left">
                <x-pretitle label="Why Care Facility Laundry Is Different" />
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-3">
                    Why do care facilities choose ILS for their laundry maintenance?
                </h2>
                <p class="font-body text-gray-500 text-sm mb-8">The main reasons are:</p>

                <ul class="space-y-5 mb-10">
                    @foreach([
                        'Produces the documented maintenance history care facilities need for HIQA inspection.',
                        'Specific experience with barrier washer maintenance and infection control workflows.',
                        'Priority response when faults occur — care environments cannot wait for standard call-out windows.',
                        'Reduces equipment failure frequency through structured preventive maintenance.',
                        'Multi-site care group arrangements available under a single consistent contract.',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                        <span class="font-body text-gray-600 text-sm leading-relaxed">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 border-2 border-navy text-navy hover:bg-navy hover:text-white font-body font-bold px-7 py-3.5 rounded-lg text-sm transition-colors duration-200">
                    Talk to our team for a customised solution
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Right: image grid — 2 stacked left, 1 tall right -->
            <div class="grid grid-cols-2 gap-3 reveal reveal-right">
                <div class="flex flex-col gap-3">
                    <div class="rounded-2xl overflow-hidden h-52 bg-gray-200">
                        <img src="/images/care/resident.jpg" alt="Care facility resident" class="w-full h-full object-cover" onerror="this.style.display='none'">
                    </div>
                    <div class="rounded-2xl overflow-hidden h-52 bg-gray-200">
                        <img src="/images/care/operator.jpg" alt="Care facility operator" class="w-full h-full object-cover" onerror="this.style.display='none'">
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden min-h-[424px] bg-gray-200">
                    <img src="/images/care/engineer.jpg" alt="ILS engineer on site" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 5. STATEMENT SECTION -->
<section class="relative min-h-[480px] flex items-center py-20 lg:py-28 overflow-hidden"
         style="background-color:#011E41; background-image:linear-gradient(90deg,rgba(1,30,65,0.93) 0%,rgba(1,30,65,0.80) 55%,rgba(1,30,65,0.30) 100%), url('/images/care/statement-bg.jpg'); background-size:cover; background-position:right center;">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-2xl reveal reveal-left">
            <h2 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-8">
                A laundry fault in a care setting is not a routine operational issue.
            </h2>
            <ul class="space-y-4 mb-10">
                @foreach([
                    'Resident linen, personal clothing, and staff uniforms must be processed every single day.',
                    'Equipment failure disrupts resident routines and creates infection control risk.',
                    'HIQA inspection readiness depends on documented, consistent maintenance records.',
                    'ILS treats care environments with the same urgency as acute healthcare settings.',
                ] as $point)
                <li class="flex items-start gap-3 font-body text-gray-300 text-base leading-relaxed">
                    <span class="mt-1.5 w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                    {{ $point }}
                </li>
                @endforeach
            </ul>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Request an Assessment
            </a>
        </div>
    </div>
</section>

<!-- 6. HOW ILS SUPPORTS CARE FACILITIES -->
<section class="py-16 lg:py-24 bg-white border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-2xl mb-10 reveal">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">How ILS supports care facility operations</h2>
            <p class="font-body text-gray-500 text-lg">Our services mapped to the specific demands of care and nursing home laundry.</p>
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
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Scheduled preventive maintenance with written service records after every visit — supporting operational continuity and HIQA compliance documentation.</p>
                <a href="{{ route('service-contracts') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    View service contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Barrier Washer Support -->
            <div class="bg-bg border border-border rounded-2xl p-6 flex flex-col card-hover reveal">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Barrier Washer Support</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">ILS has specific experience with barrier washer maintenance in care environments — a fault on this machine is a compliance and care risk, not a routine breakdown.</p>
                <a href="{{ route('repairs') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Barrier washer support
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
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Fast engineer dispatch when faults occur — caring environments need resolution, not just acknowledgement.</p>
                <a href="{{ route('repairs') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Repairs &amp; call-outs
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
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Structured rental for care facilities replacing aging equipment — inclusive of maintenance support, without capital outlay.</p>
                <a href="{{ route('rental') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Equipment rental
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 7. EQUIPMENT -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-2xl mb-10 reveal">
            <x-pretitle label="Care Facility Equipment" />
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">
                Equipment suited to the hygiene requirements of care environments.
            </h2>
            <p class="font-body text-gray-500 text-lg">
                Electrolux Professional equipment — specified, installed, and maintained by ILS.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-10">

            @foreach([
                [
                    'title' => 'Barrier Washer-Extractors',
                    'desc'  => 'Physical separation of soiled and clean zones — the infection control standard for care and nursing home environments.',
                ],
                [
                    'title' => 'High-Capacity Washers',
                    'desc'  => 'Machines sized to continuous resident linen demand — processing clothing, bedding and staff uniforms without bottleneck.',
                ],
                [
                    'title' => 'Commercial Tumble Dryers',
                    'desc'  => 'Fast-cycle drying to maintain uninterrupted linen flow across a seven-day operation.',
                ],
                [
                    'title' => 'Flatwork Ironers',
                    'desc'  => 'Finishing equipment for care facilities maintaining consistent linen standards for residents and staff.',
                ],
            ] as $item)
            <a href="{{ route('equipment') }}" class="bg-bg border border-border rounded-2xl overflow-hidden card-hover flex flex-col reveal">
                <div class="h-48 bg-bg flex items-center justify-center border-b border-border">
                    <span class="font-body text-xs text-gray-400">Equipment image</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="font-heading font-semibold text-navy text-base mb-2">{{ $item['title'] }}</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">{{ $item['desc'] }}</p>
                </div>
            </a>
            @endforeach

        </div>

        <div class="flex flex-col sm:flex-row gap-5 items-start sm:items-center">
            <a href="{{ route('equipment') }}"
               class="inline-flex items-center gap-2 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                Browse all care facility equipment
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 text-[#148af4] font-body font-semibold text-sm hover:underline transition-colors">
                Not sure what you need? Talk to an engineer
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</section>

<!-- 8. PROOF POINTS -->
<section class="py-16 lg:py-20 bg-white border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

            <!-- White: HIQA Ready -->
            <div class="border border-border rounded-2xl p-6 flex flex-col reveal">
                <h3 class="font-heading font-bold text-navy text-lg mb-2">HIQA Ready</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Documented service records after every visit — ready for inspection.</p>
            </div>

            <!-- Navy: Priority Response -->
            <div class="bg-navy rounded-2xl p-6 flex flex-col reveal">
                <h3 class="font-heading font-bold text-white text-lg mb-2">Priority Response</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">Care environments get the same urgency as healthcare — no standard call-out windows.</p>
            </div>

            <!-- White: Barrier Washers -->
            <div class="border border-border rounded-2xl p-6 flex flex-col reveal">
                <h3 class="font-heading font-bold text-navy text-lg mb-2">Barrier Washers</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Specific experience with the infection-control-critical machine in your setting.</p>
            </div>

            <!-- Navy: Multi-Site -->
            <div class="bg-navy rounded-2xl p-6 flex flex-col reveal">
                <h3 class="font-heading font-bold text-white text-lg mb-2">Multi-Site</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">Single contract covering all care homes in your group — consistent standards across every site.</p>
            </div>

        </div>
    </div>
</section>

<!-- 9. CARE ROUTE -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            <!-- Equipment Route -->
            <a href="{{ route('equipment') }}" class="border border-border rounded-2xl p-6 flex flex-col card-hover reveal">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-1">Care-ready laundry equipment</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Barrier washers and machines matched to care facility hygiene requirements.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm">
                    View equipment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <!-- Service Route -->
            <a href="{{ route('service-contracts') }}" class="border border-border rounded-2xl p-6 flex flex-col card-hover reveal">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-1">Service contracts for care facilities</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Planned maintenance, written records, and priority response — built for compliance-sensitive environments.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm">
                    View service contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <!-- Engineering Route -->
            <a href="{{ route('contact') }}" class="border border-border rounded-2xl p-6 flex flex-col card-hover reveal">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-1">Site assessment and engineering support</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">One conversation covering your site, your equipment, and the right service structure.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm">
                    Request assessment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

        </div>
    </div>
</section>

<!-- 10. ASSESSMENT FORM -->
<section id="care-assessment" class="py-16 lg:py-24 bg-white border-t border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">

            <!-- Left navy card -->
            <div class="bg-navy rounded-2xl p-8 lg:p-10 flex flex-col reveal reveal-left">
                <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-4">
                    Request a care facility assessment.
                </h2>
                <p class="font-body text-gray-300 text-base leading-relaxed mb-8">
                    Site context, equipment review, HIQA documentation support, and the right service structure — one conversation.
                </p>
                <div class="mt-auto flex flex-col gap-4">
                    <button type="submit" form="care-form"
                            class="w-full bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold py-4 rounded-lg text-sm transition-colors text-center">
                        Request Assessment
                    </button>
                    <a href="tel:+353000000000"
                       class="w-full border-2 border-white/30 hover:border-white text-white font-body font-semibold py-3.5 rounded-lg text-sm transition-colors text-center">
                        Talk to an Engineer
                    </a>
                </div>
            </div>

            <!-- Right white form -->
            <div class="reveal reveal-right">
                <form id="care-form" action="#" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="care_name" class="block font-body text-sm font-semibold text-navy mb-1.5">Name</label>
                        <input type="text" id="care_name" name="name" placeholder="Your name" autocomplete="name"
                               class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#148af4]">
                    </div>
                    <div>
                        <label for="care_facility" class="block font-body text-sm font-semibold text-navy mb-1.5">Facility Name</label>
                        <input type="text" id="care_facility" name="facility_name" placeholder="Name of care facility or group"
                               class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#148af4]">
                    </div>
                    <div>
                        <label for="care_phone" class="block font-body text-sm font-semibold text-navy mb-1.5">Phone</label>
                        <input type="tel" id="care_phone" name="phone" placeholder="Your phone number" autocomplete="tel"
                               class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#148af4]">
                    </div>
                    <div>
                        <label for="care_email" class="block font-body text-sm font-semibold text-navy mb-1.5">Email</label>
                        <input type="email" id="care_email" name="email" placeholder="Your email address" autocomplete="email"
                               class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#148af4]">
                    </div>
                    <div>
                        <label for="care_message" class="block font-body text-sm font-semibold text-navy mb-1.5">Message</label>
                        <textarea id="care_message" name="message" rows="5" placeholder="Tell us about your site, current equipment, or service requirements"
                                  class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#148af4] resize-none"></textarea>
                    </div>
                    <button type="submit"
                            class="w-full bg-navy hover:bg-steel text-white font-body font-bold py-3 rounded-lg text-sm transition-colors">
                        Send Assessment Request
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- 11. CTA BAND -->
@include('components.cta-band', [
    'heading'     => 'Talk to ILS about your care facility operation.',
    'subheading'  => 'We will assess your site, review your current equipment and service arrangements, and propose a contract structure that supports both operational continuity and compliance readiness.',
    'primaryText' => 'Request Assessment',
    'primaryHref' => route('contact'),
])

@endsection
