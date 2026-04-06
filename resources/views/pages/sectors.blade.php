@extends('layouts.app')

@section('pageTitle', 'Commercial Laundry Sectors Served | Healthcare, Hospitality, Care & Industrial | ILS')
@section('metaDescription', 'Explore sector-specific contracts, rental options and breakdown response — engineering-led and built around uptime.')

@section('content')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl mb-5">Commercial Laundry Support by Sector</h1>
        <p class="font-body text-blue-200 text-xl max-w-2xl mx-auto leading-relaxed mb-8">
            Choose your environment to see the right service model, risk factors and recommended next step.
        </p>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- SECTOR SWITCHER -->
@include('components.sector-switcher')

<!-- SECTOR CARDS -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="text-center font-body text-gray-500 text-sm mb-8 uppercase tracking-widest font-semibold">Or browse by sector</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

            <!-- Healthcare -->
            <a href="{{ route('sectors.healthcare') }}" class="group bg-white border border-border rounded-2xl p-6 lg:p-8 hover:border-navy hover:shadow-card-hover transition-all duration-200 flex flex-col">
                <div class="flex items-start gap-4 mb-5">
                    <div class="w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center flex-shrink-0 group-hover:bg-red-200 transition-colors">
                        <svg class="w-8 h-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h2 class="font-heading font-bold text-navy text-xl mb-1 group-hover:text-steel transition-colors">Healthcare</h2>
                        <p class="font-body text-gray-600 text-sm font-semibold">Hospitals, HSE sites &amp; healthcare groups</p>
                    </div>
                    <svg class="w-5 h-5 text-gray-300 group-hover:text-steel transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </div>
                <p class="font-body text-gray-600 leading-relaxed mb-5">
                    Uptime, hygiene compliance and governance — without the noise. We work with hospitals, HSE sites, nursing homes and multi-site healthcare groups across the Republic of Ireland.
                </p>
                <div class="mt-auto pt-4 border-t border-border flex flex-wrap gap-2">
                    <span class="text-xs font-body font-semibold bg-red-50 text-red-700 px-2.5 py-1 rounded-full">Priority support</span>
                    <span class="text-xs font-body font-semibold bg-red-50 text-red-700 px-2.5 py-1 rounded-full">Compliance docs</span>
                    <span class="text-xs font-body font-semibold bg-red-50 text-red-700 px-2.5 py-1 rounded-full">Multi-site contracts</span>
                </div>
            </a>

            <!-- Hospitality -->
            <a href="{{ route('sectors.hospitality') }}" class="group bg-white border border-border rounded-2xl p-6 lg:p-8 hover:border-navy hover:shadow-card-hover transition-all duration-200 flex flex-col">
                <div class="flex items-start gap-4 mb-5">
                    <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-200 transition-colors">
                        <svg class="w-8 h-8 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h2 class="font-heading font-bold text-navy text-xl mb-1 group-hover:text-steel transition-colors">Hospitality</h2>
                        <p class="font-body text-gray-600 text-sm font-semibold">Hotels, guesthouses &amp; leisure operators</p>
                    </div>
                    <svg class="w-5 h-5 text-gray-300 group-hover:text-steel transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </div>
                <p class="font-body text-gray-600 leading-relaxed mb-5">
                    Protect guest operations with predictable laundry uptime. Laundry failure in hospitality affects housekeeping, guest experience and reputation — ILS keeps operations moving.
                </p>
                <div class="mt-auto pt-4 border-t border-border flex flex-wrap gap-2">
                    <span class="text-xs font-body font-semibold bg-blue-50 text-blue-700 px-2.5 py-1 rounded-full">Planned maintenance</span>
                    <span class="text-xs font-body font-semibold bg-blue-50 text-blue-700 px-2.5 py-1 rounded-full">Emergency call-outs</span>
                    <span class="text-xs font-body font-semibold bg-blue-50 text-blue-700 px-2.5 py-1 rounded-full">Equipment supply</span>
                </div>
            </a>

            <!-- Care Facilities -->
            <a href="{{ route('sectors.care') }}" class="group bg-white border border-border rounded-2xl p-6 lg:p-8 hover:border-navy hover:shadow-card-hover transition-all duration-200 flex flex-col">
                <div class="flex items-start gap-4 mb-5">
                    <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center flex-shrink-0 group-hover:bg-green-200 transition-colors">
                        <svg class="w-8 h-8 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h2 class="font-heading font-bold text-navy text-xl mb-1 group-hover:text-steel transition-colors">Care Facilities</h2>
                        <p class="font-body text-gray-600 text-sm font-semibold">Nursing homes &amp; residential care</p>
                    </div>
                    <svg class="w-5 h-5 text-gray-300 group-hover:text-steel transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </div>
                <p class="font-body text-gray-600 leading-relaxed mb-5">
                    Continuity, safety and confidence. In residential care environments, laundry is a hygiene-critical service. ILS provides the structured support that care operators need to maintain standards.
                </p>
                <div class="mt-auto pt-4 border-t border-border flex flex-wrap gap-2">
                    <span class="text-xs font-body font-semibold bg-green-50 text-green-700 px-2.5 py-1 rounded-full">Hygiene focus</span>
                    <span class="text-xs font-body font-semibold bg-green-50 text-green-700 px-2.5 py-1 rounded-full">Service contracts</span>
                    <span class="text-xs font-body font-semibold bg-green-50 text-green-700 px-2.5 py-1 rounded-full">Barrier washers</span>
                </div>
            </a>

            <!-- Commercial & Industrial -->
            <a href="{{ route('sectors.commercial') }}" class="group bg-white border border-border rounded-2xl p-6 lg:p-8 hover:border-navy hover:shadow-card-hover transition-all duration-200 flex flex-col">
                <div class="flex items-start gap-4 mb-5">
                    <div class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-200 transition-colors">
                        <svg class="w-8 h-8 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h2 class="font-heading font-bold text-navy text-xl mb-1 group-hover:text-steel transition-colors">Commercial &amp; Industrial</h2>
                        <p class="font-body text-gray-600 text-sm font-semibold">Commercial laundries &amp; industrial operators</p>
                    </div>
                    <svg class="w-5 h-5 text-gray-300 group-hover:text-steel transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </div>
                <p class="font-body text-gray-600 leading-relaxed mb-5">
                    Throughput, lifecycle cost and uptime. Commercial laundry operations require maximum machine availability. We support operators with engineering-led maintenance and rapid reactive response.
                </p>
                <div class="mt-auto pt-4 border-t border-border flex flex-wrap gap-2">
                    <span class="text-xs font-body font-semibold bg-orange-50 text-orange-700 px-2.5 py-1 rounded-full">High throughput</span>
                    <span class="text-xs font-body font-semibold bg-orange-50 text-orange-700 px-2.5 py-1 rounded-full">Lifecycle focus</span>
                    <span class="text-xs font-body font-semibold bg-orange-50 text-orange-700 px-2.5 py-1 rounded-full">Equipment supply</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- HOW WE SUPPORT CRITICAL OPS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">How We Support Critical Operations</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex items-start gap-4 bg-bg border border-border rounded-2xl p-6">
                <div class="w-10 h-10 rounded-full bg-navy flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-semibold text-navy text-base mb-2">Structured service contracts</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">Preventive maintenance programmes that reduce reactive failures and build documented maintenance history.</p>
                </div>
            </div>
            <div class="flex items-start gap-4 bg-bg border border-border rounded-2xl p-6">
                <div class="w-10 h-10 rounded-full bg-navy flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-semibold text-navy text-base mb-2">Priority reactive response</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">Aiming for on-site attendance within 24 hours. Contract customers receive priority triage and dispatch.</p>
                </div>
            </div>
            <div class="flex items-start gap-4 bg-bg border border-border rounded-2xl p-6">
                <div class="w-10 h-10 rounded-full bg-navy flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-semibold text-navy text-base mb-2">Compliance documentation</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">Service records, maintenance logs and compliance support for regulated and inspected environments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Not sure which sector applies to you?',
    'subheading' => 'Contact us directly and we will point you to the right support structure for your operation.',
    'primaryText' => 'Request a Service Assessment',
])

@endsection
