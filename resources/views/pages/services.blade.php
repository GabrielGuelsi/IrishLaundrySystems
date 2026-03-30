@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                </svg>
                <span class="text-sm font-body text-gray-200">Engineering-led commercial laundry</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-6">
                Commercial Laundry Services Built Around Your Operation
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 font-semibold leading-relaxed">
                Structured, engineered and delivered around operational continuity.
            </p>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8 max-w-2xl">
                Irish Laundry Systems provides engineering-led commercial laundry services across the Republic of Ireland. From structured service contracts and emergency call-outs to equipment rental and parts support — we keep critical operations running.
            </p>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                Request Service Assessment
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- SERVICE ROUTE CARDS -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Three Core Services</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto">The three service pathways that underpin every ILS customer relationship — structured around preventing and resolving downtime.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="border-t-4 border-steel bg-bg rounded-xl p-6 lg:p-8">
                <div class="w-11 h-11 rounded-lg bg-steel/10 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-3">Service Contracts</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-5">Structured preventive maintenance contracts — Core, Priority and Assured tiers. Scheduled visits, service reporting and remote support built around your operation's risk profile.</p>
                <a href="{{ route('service-contracts') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold text-sm hover:text-navy transition-colors">
                    View contracts <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="border-t-4 border-orange bg-bg rounded-xl p-6 lg:p-8">
                <div class="w-11 h-11 rounded-lg bg-orange/10 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-3">Repairs &amp; Call-outs</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-5">Breakdown response and reactive repairs across the Republic of Ireland. Experienced engineers, triage-first process, genuine parts and clear communication on every job.</p>
                <a href="{{ route('repairs') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold text-sm hover:text-navy transition-colors">
                    Repairs &amp; call-outs <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="border-t-4 border-navy bg-bg rounded-xl p-6 lg:p-8">
                <div class="w-11 h-11 rounded-lg bg-navy/10 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-3">Equipment Rental</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-5">Commercial laundry equipment supplied, installed and supported — including the Electrolux Professional range. Structured rental arrangements with maintenance included, for managed cost and continuity.</p>
                <a href="{{ route('rental') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold text-sm hover:text-navy transition-colors">
                    Rental options <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- PARTS & AFTERCARE -->
<section id="parts" class="py-16 lg:py-20 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Parts &amp; Aftercare</h2>
                <p class="font-body text-gray-600 text-lg leading-relaxed mb-6">
                    As an Authorised Electrolux Professional Partner, ILS has access to genuine manufacturer parts and technical documentation — supporting faster diagnosis and first-visit resolution across equipment brands we service.
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-steel mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="font-body text-gray-600">Genuine Electrolux Professional parts</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-steel mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="font-body text-gray-600">Preferential parts rates for contract customers</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-steel mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="font-body text-gray-600">Technical documentation and service history</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-steel mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="font-body text-gray-600">Parts supply for both contract and non-contract customers</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                    Request Service Assessment
                </a>
            </div>
            <div class="bg-white border border-border rounded-xl p-8 shadow-card">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-lg">Authorised Electrolux Professional Partner</h3>
                </div>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-4">
                    Access to the Electrolux Professional parts network means ILS engineers can source, supply and fit manufacturer-approved components — reducing second visits and supporting equipment lifecycle.
                </p>
                <a href="{{ route('electrolux') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold text-sm hover:text-navy transition-colors">
                    About the partnership <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Start with the right conversation',
    'subheading' => 'Tell us about your operation and we will recommend the right service structure.',
])

@endsection
