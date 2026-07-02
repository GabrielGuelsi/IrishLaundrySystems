@extends('layouts.app')

@section('pageTitle', 'Resources | Guides, Checklists & Industry Insights | ILS')
@section('metaDescription', 'Practical guides, checklists and reference material to help commercial laundry operators manage equipment, reduce downtime and stay compliant.')

@section('content')

{{-- ═══════════════════════════════════════
     1. HERO — image background, left-aligned
═══════════════════════════════════════ --}}
<section class="relative overflow-hidden flex flex-col min-h-[420px] lg:min-h-[520px]">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial laundry resources"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.78) 42%, rgba(1,30,65,0.4) 65%, rgba(1,30,65,0.15) 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-20 lg:py-28">
            <div class="max-w-3xl reveal reveal-left">

                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Resources</p>

                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    Resources for <br class="hidden lg:block"><span style="color:#148af4;">smarter laundry operations</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Guides, checklists and reference material to help operators manage equipment, reduce downtime and stay compliant.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#resources-library"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Browse the Library
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Talk to Our Team
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

@include('components.partner-strip')

{{-- ═══════════════════════════════════════
     2. FEATURED RESOURCE
═══════════════════════════════════════ --}}
<section id="resources-library" class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="flex items-center justify-between mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em]">Featured Resource</p>
            <a href="{{ route('contact') }}" class="font-body font-bold text-[#148af4] text-sm hover:underline">Request any guide →</a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 rounded-2xl overflow-hidden border border-gray-100 shadow-sm reveal" style="min-height:380px;">

            {{-- Image --}}
            <div class="lg:col-span-3 overflow-hidden relative" style="min-height:280px;">
                <img src="{{ asset('images/healthcare/service-contracts-hero.png') }}"
                     alt="Service Contract Buyer's Guide"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-r from-transparent to-gray-50/30 hidden lg:block"></div>
                {{-- Floating badge --}}
                <div class="absolute top-5 left-5">
                    <span class="bg-[#148af4] text-white font-heading font-bold text-xs px-3 py-1.5 rounded-full">Featured</span>
                </div>
            </div>

            {{-- Content --}}
            <div class="lg:col-span-2 flex flex-col justify-center p-8 lg:p-12 bg-gray-50">
                <div class="flex items-center gap-3 mb-5">
                    <span class="font-heading font-bold text-xs px-3 py-1.5 rounded-full bg-[#148af4]/10 text-[#148af4]">Guide</span>
                    <span class="text-gray-400 text-xs font-body flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        8 min read
                    </span>
                </div>
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-snug mb-4">
                    Service Contract<br>Buyer's Guide
                </h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-7">
                    What to look for in a commercial laundry service contract — and the questions you should be asking your provider before signing anything.
                </p>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold text-sm px-6 py-3.5 rounded-lg transition-colors duration-200">
                        Request a Copy
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <span class="font-body text-gray-400 text-xs">Healthcare · Hospitality · Care</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     3. GUIDES GRID
═══════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 reveal">
            <div>
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Library</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Guides</h2>
                <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">Practical reference material for operators and facilities managers</p>
            </div>
            <a href="{{ route('contact') }}" class="font-body font-bold text-[#148af4] text-sm hover:underline whitespace-nowrap">Request a guide →</a>
        </div>

        @php
        $guides = [
            [
                'title'  => 'Preventive Maintenance Basics',
                'desc'   => 'An overview of what a preventive maintenance programme for commercial laundry should include — and why it matters.',
                'sector' => 'All machines',
                'tag'    => 'Guide',
                'read'   => '6 min',
                'img'    => 'images/healthcare/repairs-callouts.jpg',
            ],
            [
                'title'  => 'Barrier Washer Guide',
                'desc'   => 'Understanding barrier washer operation, infection control benefits and maintenance requirements.',
                'sector' => 'Barrier Washers',
                'tag'    => 'Guide',
                'read'   => '10 min',
                'img'    => 'images/healthcare/render-double-page_72dpi.jpg',
            ],
            [
                'title'  => 'Equipment Lifecycle Planning',
                'desc'   => 'When to repair and when to replace — a practical guide to commercial laundry equipment lifecycle decisions.',
                'sector' => 'All machines',
                'tag'    => 'Guide',
                'read'   => '7 min',
                'img'    => 'images/healthcare/repairs-hero.jpg',
            ],
            [
                'title'  => 'Rental vs Purchase Decision Guide',
                'desc'   => 'A structured guide to deciding whether equipment rental or outright purchase makes more sense for your operation.',
                'sector' => 'All machines',
                'tag'    => 'Guide',
                'read'   => '5 min',
                'img'    => 'images/equipment/td6-multihousing-room.jpg',
            ],
            [
                'title'  => 'Tumble Dryer Maintenance Guide',
                'desc'   => 'Key maintenance points, airflow checks and safety requirements for commercial tumble dryers in operational settings.',
                'sector' => 'Tumble Dryers',
                'tag'    => 'Guide',
                'read'   => '8 min',
                'img'    => 'images/equipment/Tumble-dryers_Heat-Pump_1-1.webp',
            ],
            [
                'title'  => 'Ironer Setup & Throughput Guide',
                'desc'   => 'How to size, set up and get consistent throughput from a flatwork ironer in a commercial laundry environment.',
                'sector' => 'Ironers',
                'tag'    => 'Guide',
                'read'   => '9 min',
                'img'    => 'images/equipment/line6000-ironer.webp',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($guides as $i => $guide)
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition-shadow duration-300 flex flex-col reveal" style="transition-delay:{{ ($i % 3) * 80 }}ms;">

                {{-- Cover image --}}
                <div class="overflow-hidden relative" style="height:210px;">
                    <img src="{{ asset($guide['img']) }}" alt="{{ $guide['title'] }}"
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    {{-- Category badge on image --}}
                    <div class="absolute top-4 left-4">
                        <span class="bg-[#148af4] text-white font-heading font-bold text-xs px-3 py-1.5 rounded-full">
                            {{ $guide['tag'] }}
                        </span>
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="font-body text-gray-400 text-xs flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            {{ $guide['read'] }} read
                        </span>
                        <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                        <span class="font-body text-gray-400 text-xs">{{ $guide['sector'] }}</span>
                    </div>

                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-3 flex-1">{{ $guide['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $guide['desc'] }}</p>

                    <div class="pt-4 border-t border-gray-100">
                        <a href="{{ route('request-assessment') }}"
                           class="inline-flex items-center gap-1.5 font-body font-bold text-[#148af4] text-sm hover:underline">
                            Request Guide
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════
     4. CHECKLISTS
═══════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 reveal">
            <div>
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Ready to use</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Checklists</h2>
                <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">Print-ready and digital checklists for operators and engineers</p>
            </div>
        </div>

        @php
        $checklists = [
            [
                'title'   => 'Monthly Operator Checks — Washers',
                'desc'    => 'Routine checks your operators should carry out monthly on commercial washers to catch early signs of wear.',
                'machine' => 'Washers',
                'icon'    => 'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z',
            ],
            [
                'title'   => 'Monthly Operator Checks — Dryers',
                'desc'    => 'Essential monthly safety and performance checks for commercial tumble dryers — lint filters, temperatures, door seals.',
                'machine' => 'Tumble Dryers',
                'icon'    => 'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z',
            ],
            [
                'title'   => 'Barrier Washer Operator Checks',
                'desc'    => 'Monthly checks for barrier washer operation — door seals, programme completion, cycle logs and hygiene documentation.',
                'machine' => 'Barrier Washers',
                'icon'    => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766m0 0l3.024 3.024c.37-.14.716-.363 1.002-.67L21 11.25a2.25 2.25 0 00-2.25-2.25H15M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163.036 1.548.537l1.009 1.34c.386.5.393 1.187.02 1.695l-.007.01',
            ],
            [
                'title'   => 'Ironer Pre-Start Safety Checklist',
                'desc'    => 'Safety and readiness checks before starting a flatwork ironer — chest temperature, ribbon condition, feed alignment.',
                'machine' => 'Ironers',
                'icon'    => 'M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($checklists as $i => $item)
            <div class="bg-bg border border-gray-100 rounded-2xl p-7 flex flex-col hover:shadow-lg transition-shadow duration-300 reveal" style="transition-delay:{{ $i * 60 }}ms;">

                {{-- Icon --}}
                <div class="w-12 h-12 rounded-lg bg-[#148af4]/10 flex items-center justify-center mb-5 flex-shrink-0">
                    <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/>
                    </svg>
                </div>

                {{-- Tag --}}
                <div class="flex items-center gap-2 mb-4">
                    <span class="font-heading font-bold text-xs px-2.5 py-1 rounded-full bg-[#148af4]/10 text-[#148af4]">Checklist</span>
                    <span class="font-body text-gray-400 text-xs">{{ $item['machine'] }}</span>
                </div>

                <h3 class="font-heading font-bold text-navy text-sm leading-snug mb-3">{{ $item['title'] }}</h3>
                <p class="font-body text-gray-500 text-xs leading-relaxed flex-1 mb-6">{{ $item['desc'] }}</p>

                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center gap-1.5 font-body font-bold text-[#148af4] text-xs hover:underline">
                    Request Checklist
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>

            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════
     4b. RESOURCE HELP STRIP
═══════════════════════════════════════ --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">

    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover"
             style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>

    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 sm:py-16 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Resource Help</p>
        <h2 class="font-heading font-bold text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
            <span class="text-white">Not sure which <span style="color:#011E41;">guide or checklist</span></span><br class="hidden lg:block">
            <span class="text-white">fits your site?</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6">
            Tell us what you are trying to manage, maintain or decide — Irish Laundry Systems will point you to the right resource or practical advice for the site.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Guides', 'Checklists', 'Sector resources', 'Practical advice'] as $i => $pt)
            @if($i > 0)<span class="text-white/40">|</span>@endif
            <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
            @endforeach
        </div>
        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-body font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors">
            Talk to Our Team
        </a>
    </div>

</section>

{{-- ═══════════════════════════════════════
     5. BY MACHINE — equipment card pattern
═══════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">By Machine</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Resources by <span style="color:#148af4;">machine type</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Each machine type has its own maintenance requirements, operator checks and service considerations — find resources specific to your equipment.
            </p>
        </div>

        @php
        $machines = [
            [
                'href'  => route('equipment.category', 'washers'),
                'title' => 'Washers',
                'desc'  => 'Washer-extractors and commercial washing machines. Drum checks, programme faults, bearing wear and parts continuity.',
                'img'   => 'images/equipment/commercialwasher.webp',
            ],
            [
                'href'  => route('equipment.category', 'tumble-dryers'),
                'title' => 'Tumble Dryers',
                'desc'  => 'Commercial tumble dryers. Lint management, airflow checks, temperature calibration and door seal maintenance.',
                'img'   => 'images/equipment/Tumble-dryers_Heat-Pump_1-1.webp',
            ],
            [
                'href'  => route('equipment.category', 'barrier-washers'),
                'title' => 'Barrier Washers',
                'desc'  => 'Infection control washers for healthcare and care. Cycle logs, hygiene validation, door seal checks and compliance records.',
                'img'   => 'images/equipment/line6000-barrier-washer.webp',
            ],
            [
                'href'  => route('equipment.category', 'ironers'),
                'title' => 'Ironers',
                'desc'  => 'Flatwork ironers and chest ironers. Chest temperature, ribbon condition, feed alignment and throughput planning.',
                'img'   => 'images/equipment/line6000-ironer.webp',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($machines as $i => $machine)
            <div class="flex flex-col gap-6 h-full reveal" style="transition-delay:{{ $i * 80 }}ms;">

                <div>
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $machine['title'] }}</p>
                    <p class="font-body text-gray-500 text-base leading-relaxed">{{ $machine['desc'] }}</p>
                </div>

                <div class="w-full flex items-end justify-center mt-auto" style="height:300px;">
                    <img src="{{ asset($machine['img']) }}"
                         alt="{{ $machine['title'] }}"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="max-width:100%; max-height:100%; object-fit:contain;">
                </div>

                <a href="{{ $machine['href'] }}"
                   class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold text-base px-5 py-4 rounded-lg transition-colors">
                    View Resources
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>

            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════
     5b. SPECIALIST SOLUTIONS — marine & firefighters brochures
═══════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Specialist Solutions</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Brochures for <span style="color:#148af4;">marine and specialist environments</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Official Electrolux Professional material for specialist environments Irish Laundry Systems can supply and support.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            @foreach([
                ['title' => 'Marine Solutions', 'desc' => 'Laundry and galley solutions for vessels — marine-ready washers, dryers and cooking lines.', 'brochures' => [
                    ['l' => 'Line 6000 Washers & Dryers brochure', 'h' => '/pdfs/EPR_Line 6000 Washers and Dryers brochure-01072025_EN.pdf'],
                    ['l' => 'SkyLine Marine segment brochure', 'h' => '/pdfs/EPR-Brochure SkyLine Segmento Marine-EN-20251007-LR.pdf'],
                    ['l' => 'thermaline Modular 90 Marine brochure', 'h' => '/pdfs/EPR_bro_thermaline Modular 90 Marine_ENG_26032024.pdf'],
                ]],
                ['title' => 'Firefighters & PPE Care', 'desc' => 'Decontamination-focused laundry solutions for fire services and protective equipment care.', 'brochures' => [
                    ['l' => 'Firefighters laundry solutions brochure', 'h' => '/pdfs/EPR_brochure_firefighters_16042025_EN.pdf'],
                ]],
            ] as $spec)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8 flex flex-col reveal">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $spec['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">{{ $spec['desc'] }}</p>
                <div class="flex flex-col gap-2.5 mt-auto">
                    @foreach($spec['brochures'] as $b)
                    <a href="{{ $b['h'] }}" target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 font-body font-bold text-sm text-[#148af4] hover:underline">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                        {{ $b['l'] }}
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     6. NOTIFY / NEWSLETTER CTA
═══════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-24 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="rounded-2xl overflow-hidden bg-gray-50 border border-gray-100 reveal">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                {{-- Left content --}}
                <div class="p-10 lg:p-16 flex flex-col justify-center">
                    <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Stay Informed</p>
                    <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                        Get new resources as they're published
                    </h2>
                    <p class="font-body text-gray-500 text-base leading-relaxed max-w-md mb-8">
                        New guides, checklists and technical references — sent directly when available. No marketing, no frequency commitments.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 max-w-md">
                        <input type="email"
                               placeholder="Your email address"
                               class="flex-1 border border-border rounded-lg px-5 py-3.5 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-[#148af4] transition-colors bg-white">
                        <button class="bg-navy hover:bg-navy/90 text-white font-body font-bold text-sm px-7 py-3.5 rounded-lg transition-colors duration-200 whitespace-nowrap">
                            Notify Me
                        </button>
                    </div>
                    <p class="font-body text-gray-400 text-xs mt-3">No spam. Unsubscribe at any time.</p>
                </div>

                {{-- Right: resource type tiles --}}
                <div class="p-10 lg:p-16 flex items-center justify-center border-t lg:border-t-0 lg:border-l border-gray-100">
                    <div class="grid grid-cols-2 gap-4 w-full max-w-xs">
                        @foreach([
                            ['label'=>'Guides', 'count'=>'6', 'icon'=>'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25'],
                            ['label'=>'Checklists', 'count'=>'4', 'icon'=>'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['label'=>'Sector Guides', 'count'=>'4', 'icon'=>'M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21'],
                            ['label'=>'Coming Soon', 'count'=>'+8', 'icon'=>'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ] as $tile)
                        <div class="bg-white rounded-2xl p-5 border border-gray-100 flex flex-col items-center text-center">
                            <div class="w-10 h-10 rounded-lg bg-[#148af4]/10 flex items-center justify-center mb-3">
                                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $tile['icon'] }}"/>
                                </svg>
                            </div>
                            <span class="font-heading font-bold text-navy text-xl leading-none mb-1">{{ $tile['count'] }}</span>
                            <span class="font-body text-gray-500 text-xs">{{ $tile['label'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

@include('components.proof-bar')

{{-- ═══════════════════════════════════════
     7. CTA
═══════════════════════════════════════ --}}
@include('components.cta-downtime-form', [
    'pageSource' => 'resources_cta',
    'heading'    => 'Need a guide or resource for <span style="color:#148af4;">your laundry operation</span>?',
    'body'       => 'Tell Irish Laundry Systems what you are trying to manage, maintain or decide. We will send the right guide, checklist or practical advice for your site.',
    'formTitle'  => 'Request a Resource',
    'buttonText' => 'Request Resource',
])

@endsection
