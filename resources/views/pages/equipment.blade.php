@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                </svg>
                <span class="text-sm font-body text-gray-200">Authorised Electrolux Professional Partner</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Commercial Laundry Equipment — Supplied and Supported
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 font-semibold">Engineering-first supply, installation and long-term support.</p>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8 max-w-2xl">
                ILS supplies commercial laundry equipment including the full Electrolux Professional range — with expert installation, commissioning and ongoing service support built in. We don't just sell equipment; we support it.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                    Request Equipment Quote
                </a>
                <a href="{{ route('rental') }}"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer hover:bg-white/10">
                    Rental Options
                </a>
            </div>
        </div>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- EQUIPMENT CATEGORIES -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Equipment Categories</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto">The full range of commercial laundry equipment — supplied, installed and maintained by ILS.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <a href="{{ route('equipment.category', 'washers') }}" class="group bg-white border border-border rounded-2xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-2xl bg-steel/10 flex items-center justify-center mb-4 group-hover:bg-steel/20 transition-colors">
                    <svg class="w-7 h-7 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg mb-2 group-hover:text-steel transition-colors">Commercial Washers</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-3">Freestanding and built-in commercial washers — from 6kg to high-capacity industrial units. Electrolux Professional range available.</p>
                <span class="inline-flex items-center gap-1 text-steel text-sm font-body font-semibold">
                    View washers <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <a href="{{ route('equipment.category', 'dryers') }}" class="group bg-white border border-border rounded-2xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-2xl bg-orange/10 flex items-center justify-center mb-4 group-hover:bg-orange/20 transition-colors">
                    <svg class="w-7 h-7 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg mb-2 group-hover:text-steel transition-colors">Commercial Dryers</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-3">Gas and electric tumble dryers for commercial operations. Matched capacity to your washer fleet for optimised throughput.</p>
                <span class="inline-flex items-center gap-1 text-steel text-sm font-body font-semibold">
                    View dryers <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <a href="{{ route('equipment.category', 'barrier-washers') }}" class="group bg-white border border-border rounded-2xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-2xl bg-red-100 flex items-center justify-center mb-4 group-hover:bg-red-200 transition-colors">
                    <svg class="w-7 h-7 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg mb-2 group-hover:text-steel transition-colors">Barrier Washers</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-3">Pass-through barrier washers for healthcare and care environments — separating soiled and clean sides for infection control compliance.</p>
                <span class="inline-flex items-center gap-1 text-steel text-sm font-body font-semibold">
                    View barrier washers <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <a href="{{ route('equipment.category', 'ironers') }}" class="group bg-white border border-border rounded-2xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-2xl bg-navy/10 flex items-center justify-center mb-4 group-hover:bg-navy/20 transition-colors">
                    <svg class="w-7 h-7 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg mb-2 group-hover:text-steel transition-colors">Ironers</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-3">Commercial flatwork ironers and chest ironers — for linen, table linen and uniform finishing in hospitality and healthcare.</p>
                <span class="inline-flex items-center gap-1 text-steel text-sm font-body font-semibold">
                    View ironers <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <a href="{{ route('equipment.category', 'drying-cabinets') }}" class="group bg-white border border-border rounded-2xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-2xl bg-green-100 flex items-center justify-center mb-4 group-hover:bg-green-200 transition-colors">
                    <svg class="w-7 h-7 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg mb-2 group-hover:text-steel transition-colors">Drying Cabinets</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-3">Drying cabinets for garments, workwear and PPE — maintaining shape and finish while reducing tumble dryer throughput pressure.</p>
                <span class="inline-flex items-center gap-1 text-steel text-sm font-body font-semibold">
                    View drying cabinets <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- TWO PATHS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Two Ways to Access Equipment</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-bg border border-border rounded-2xl p-6 lg:p-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-navy flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-xl">Outright Purchase &amp; Supply</h3>
                </div>
                <p class="font-body text-gray-600 leading-relaxed mb-5">Buy equipment outright and own it. ILS supplies, delivers, installs and commissions — and can pair with a service contract for ongoing maintenance support.</p>
                <ul class="space-y-2 text-sm font-body text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Full ownership from day one</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Electrolux Professional range available</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Expert installation and commissioning</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Service contract available separately</li>
                </ul>
                <a href="{{ route('contact') }}" class="mt-5 inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-semibold px-5 py-2.5 rounded-lg text-sm transition-colors cursor-pointer">
                    Get a Quote
                </a>
            </div>
            <div class="bg-bg border-2 border-orange rounded-2xl p-6 lg:p-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-orange flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-xl">Rental &amp; Lease</h3>
                </div>
                <p class="font-body text-gray-600 leading-relaxed mb-5">Access equipment without capital outlay. Maintenance typically included. Predictable monthly cost for easier budgeting and reporting.</p>
                <ul class="space-y-2 text-sm font-body text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>No large capital outlay required</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Maintenance typically included</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Flexible terms discussed on enquiry</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Current Electrolux Professional equipment</li>
                </ul>
                <a href="{{ route('rental') }}" class="mt-5 inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-semibold px-5 py-2.5 rounded-lg text-sm transition-colors cursor-pointer">
                    Explore Rental
                </a>
            </div>
        </div>
    </div>
</section>

<!-- INSTALLATION SECTION -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-navy rounded-2xl p-8 lg:p-12 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="font-heading font-bold text-white text-3xl mb-4">Installation &amp; Commissioning</h2>
                <p class="font-body text-gray-300 leading-relaxed mb-4">
                    ILS engineers install and commission all equipment we supply. We don't just deliver — we ensure the equipment is set up correctly, running to specification, and that your team understands how to use it.
                </p>
                <ul class="space-y-3 text-sm font-body text-gray-300">
                    @foreach (['Site survey and utilities check before installation', 'Delivery, positioning and connection by ILS engineers', 'Commissioning and test cycles to confirm correct operation', 'Staff handover and operation guidance', 'Equipment added to service contract or maintenance plan'] as $item)
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-orange flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex flex-col gap-4">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-semibold px-6 py-3.5 rounded-lg transition-colors cursor-pointer">
                    Request an Equipment Quote
                </a>
                <a href="{{ route('service-contracts') }}"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-body font-semibold px-6 py-3.5 rounded-lg hover:bg-white/10 transition-colors cursor-pointer">
                    View Service Contracts
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Protect your equipment investment',
    'subheading' => 'Every ILS equipment supply can be paired with a service contract — giving you planned maintenance and priority call-out support from day one.',
    'primaryText' => 'Get an Equipment Quote',
    'primaryHref' => '/contact',
])

@endsection
