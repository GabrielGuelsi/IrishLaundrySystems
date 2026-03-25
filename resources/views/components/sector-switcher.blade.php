{{--
    Sector Switcher — Interactive folder-tab component
    Used on: homepage (replaces static sector grid), sectors hub page.
    UX goal: visitor self-identifies their sector in one click and sees
    the relevant services and path forward immediately.
    Healthcare is the cornerstone sector — active by default.
--}}
<section class="py-16 lg:py-24 bg-white" x-data="{ active: 'healthcare' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section header -->
        <div class="text-center mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">Choose Your Sector</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                Each sector has different compliance needs, load patterns and downtime risk. Start with your environment to see the right route.
            </p>
        </div>

        <!-- Folder tabs — full-width 4-column grid -->
        <div class="grid grid-cols-2 lg:grid-cols-4" role="tablist">

            <!-- Healthcare -->
            <button @click="active = 'healthcare'"
                    role="tab" :aria-selected="active === 'healthcare'"
                    :class="active === 'healthcare'
                        ? 'bg-navy text-white border-navy z-10'
                        : 'bg-muted text-gray-600 border-border hover:bg-white hover:text-navy'"
                    class="relative flex flex-col items-center justify-center gap-2 py-5 lg:py-7 px-4 border-2 border-b-0 rounded-tl-xl font-body font-semibold text-sm lg:text-base transition-all duration-150 cursor-pointer">
                <svg class="w-7 h-7 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                </svg>
                <span>Healthcare</span>
                <!-- active indicator dot -->
                <span x-show="active === 'healthcare'" class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 w-3 h-3 bg-orange rounded-full border-2 border-white"></span>
            </button>

            <!-- Hospitality -->
            <button @click="active = 'hospitality'"
                    role="tab" :aria-selected="active === 'hospitality'"
                    :class="active === 'hospitality'
                        ? 'bg-navy text-white border-navy z-10'
                        : 'bg-muted text-gray-600 border-border hover:bg-white hover:text-navy'"
                    class="relative flex flex-col items-center justify-center gap-2 py-5 lg:py-7 px-4 border-2 border-b-0 border-l-0 font-body font-semibold text-sm lg:text-base transition-all duration-150 cursor-pointer">
                <svg class="w-7 h-7 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                </svg>
                <span>Hospitality</span>
                <span x-show="active === 'hospitality'" class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 w-3 h-3 bg-orange rounded-full border-2 border-white"></span>
            </button>

            <!-- Care Facilities -->
            <button @click="active = 'care'"
                    role="tab" :aria-selected="active === 'care'"
                    :class="active === 'care'
                        ? 'bg-navy text-white border-navy z-10'
                        : 'bg-muted text-gray-600 border-border hover:bg-white hover:text-navy'"
                    class="relative flex flex-col items-center justify-center gap-2 py-5 lg:py-7 px-4 border-2 border-b-0 border-l-0 font-body font-semibold text-sm lg:text-base transition-all duration-150 cursor-pointer lg:rounded-none rounded-tr-xl">
                <svg class="w-7 h-7 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                </svg>
                <span>Care Facilities</span>
                <span x-show="active === 'care'" class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 w-3 h-3 bg-orange rounded-full border-2 border-white"></span>
            </button>

            <!-- Commercial & Industrial -->
            <button @click="active = 'commercial'"
                    role="tab" :aria-selected="active === 'commercial'"
                    :class="active === 'commercial'
                        ? 'bg-navy text-white border-navy z-10'
                        : 'bg-muted text-gray-600 border-border hover:bg-white hover:text-navy'"
                    class="relative flex flex-col items-center justify-center gap-2 py-5 lg:py-7 px-4 border-2 border-b-0 border-l-0 rounded-tr-xl font-body font-semibold text-sm lg:text-base transition-all duration-150 cursor-pointer">
                <svg class="w-7 h-7 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>
                </svg>
                <span class="text-center leading-tight">Commercial &amp; Industrial</span>
                <span x-show="active === 'commercial'" class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 w-3 h-3 bg-orange rounded-full border-2 border-white"></span>
            </button>

        </div>
        <!-- End tab bar -->

        <!-- Panel container — connected directly to tab bar -->
        <div class="border-2 border-navy rounded-b-xl bg-white shadow-card-hover overflow-hidden relative z-0">

            <!-- ── HEALTHCARE ── -->
            <div x-show="active === 'healthcare'"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 translate-y-1"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                <!-- Red left accent bar -->
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-red-500 rounded-bl-xl"></div>

                <!-- Left: sector info -->
                <div class="p-8 lg:p-10 border-b lg:border-b-0 lg:border-r border-border pl-8 lg:pl-12">
                    <div class="inline-flex items-center gap-2 bg-red-50 border border-red-100 rounded-full px-3 py-1 mb-5">
                        <svg class="w-3.5 h-3.5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                        </svg>
                        <span class="text-xs font-body font-semibold text-red-700 uppercase tracking-wide">Healthcare Sector</span>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-4 leading-tight">
                        Healthcare Laundry Systems You Can Rely On
                    </h3>
                    <p class="font-body text-gray-600 leading-relaxed mb-6">
                        ILS supports hospitals, nursing homes and care groups where laundry uptime is operationally critical. We reduce downtime risk through preventive maintenance contracts, responsive call-outs and genuine parts support.
                    </p>
                    <ul class="space-y-2.5 mb-8">
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700">
                            <svg class="w-4 h-4 text-red-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            Uptime-first contracts aligned to infection control expectations
                        </li>
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700">
                            <svg class="w-4 h-4 text-red-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            Service records and maintenance logs for audit and governance
                        </li>
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700">
                            <svg class="w-4 h-4 text-red-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            Multi-site group coverage under a single service arrangement
                        </li>
                    </ul>
                    <a href="{{ route('sectors.healthcare') }}"
                       class="inline-flex items-center gap-2 bg-navy hover:bg-navy-light text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                        Explore healthcare support
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>

                <!-- Right: service cards -->
                <div class="p-8 lg:p-10 bg-bg space-y-4">
                    <p class="text-xs font-body font-semibold text-gray-400 uppercase tracking-widest mb-5">Services for this sector</p>
                    <a href="{{ route('service-contracts') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center flex-shrink-0 group-hover:bg-steel/20 transition-colors">
                            <svg class="w-5 h-5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/></svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between gap-2">
                                <span class="font-body font-semibold text-navy text-sm">Service Contracts</span>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            </div>
                            <p class="text-xs font-body text-gray-500 mt-0.5">Preventive maintenance with compliance documentation support</p>
                        </div>
                    </a>
                    <a href="{{ route('repairs') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-orange/10 flex items-center justify-center flex-shrink-0 group-hover:bg-orange/20 transition-colors">
                            <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/></svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between gap-2">
                                <span class="font-body font-semibold text-navy text-sm">Repairs &amp; Call-outs</span>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            </div>
                            <p class="text-xs font-body text-gray-500 mt-0.5">Priority response for critical healthcare environments</p>
                        </div>
                    </a>
                    <a href="{{ route('equipment') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center flex-shrink-0 group-hover:bg-navy/20 transition-colors">
                            <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 2.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/></svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between gap-2">
                                <span class="font-body font-semibold text-navy text-sm">Equipment &amp; Rental</span>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            </div>
                            <p class="text-xs font-body text-gray-500 mt-0.5">Barrier washers, dryers and full Electrolux Professional range</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- ── HOSPITALITY ── -->
            <div x-show="active === 'hospitality'" x-cloak
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 translate-y-1"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="grid grid-cols-1 lg:grid-cols-2 gap-0 relative">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-steel rounded-bl-xl"></div>
                <div class="p-8 lg:p-10 border-b lg:border-b-0 lg:border-r border-border pl-8 lg:pl-12">
                    <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-100 rounded-full px-3 py-1 mb-5">
                        <svg class="w-3.5 h-3.5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/></svg>
                        <span class="text-xs font-body font-semibold text-steel uppercase tracking-wide">Hospitality Sector</span>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-4 leading-tight">Laundry Support for Hotels &amp; Hospitality</h3>
                    <p class="font-body text-gray-600 leading-relaxed mb-6">In hospitality, laundry downtime impacts rooms, turnaround times and guest experience. ILS helps reduce disruption through preventive maintenance and responsive call-outs matched to your peak seasons.</p>
                    <ul class="space-y-2.5 mb-8">
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700"><svg class="w-4 h-4 text-steel mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Planned maintenance around peak occupancy periods</li>
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700"><svg class="w-4 h-4 text-steel mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Rapid call-out response to protect guest operations</li>
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700"><svg class="w-4 h-4 text-steel mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Predictable uptime to protect guest experience and reputation</li>
                    </ul>
                    <a href="{{ route('sectors.hospitality') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy-light text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200">Explore hospitality support<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></a>
                </div>
                <div class="p-8 lg:p-10 bg-bg space-y-4">
                    <p class="text-xs font-body font-semibold text-gray-400 uppercase tracking-widest mb-5">Services for this sector</p>
                    <a href="{{ route('service-contracts') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center flex-shrink-0 group-hover:bg-steel/20 transition-colors"><svg class="w-5 h-5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/></svg></div>
                        <div class="flex-1 min-w-0"><div class="flex items-center justify-between gap-2"><span class="font-body font-semibold text-navy text-sm">Service Contracts</span><svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></div><p class="text-xs font-body text-gray-500 mt-0.5">Maintenance plans matched to occupancy and peak season load</p></div>
                    </a>
                    <a href="{{ route('repairs') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-orange/10 flex items-center justify-center flex-shrink-0 group-hover:bg-orange/20 transition-colors"><svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/></svg></div>
                        <div class="flex-1 min-w-0"><div class="flex items-center justify-between gap-2"><span class="font-body font-semibold text-navy text-sm">Repairs &amp; Call-outs</span><svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></div><p class="text-xs font-body text-gray-500 mt-0.5">Responsive breakdown support to minimise guest disruption</p></div>
                    </a>
                    <a href="{{ route('rental') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center flex-shrink-0 group-hover:bg-navy/20 transition-colors"><svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 2.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/></svg></div>
                        <div class="flex-1 min-w-0"><div class="flex items-center justify-between gap-2"><span class="font-body font-semibold text-navy text-sm">Equipment &amp; Rental</span><svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></div><p class="text-xs font-body text-gray-500 mt-0.5">Rental and lease options to manage capex and maintenance costs</p></div>
                    </a>
                </div>
            </div>

            <!-- ── CARE FACILITIES ── -->
            <div x-show="active === 'care'" x-cloak
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 translate-y-1"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="grid grid-cols-1 lg:grid-cols-2 gap-0 relative">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-green-600 rounded-bl-xl"></div>
                <div class="p-8 lg:p-10 border-b lg:border-b-0 lg:border-r border-border pl-8 lg:pl-12">
                    <div class="inline-flex items-center gap-2 bg-green-50 border border-green-100 rounded-full px-3 py-1 mb-5">
                        <svg class="w-3.5 h-3.5 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                        <span class="text-xs font-body font-semibold text-green-800 uppercase tracking-wide">Care Facilities Sector</span>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-4 leading-tight">Laundry Reliability for Care Homes &amp; Facilities</h3>
                    <p class="font-body text-gray-600 leading-relaxed mb-6">Care homes depend on consistent, safe laundry operations every day. We provide engineering-led support that prioritises continuity, resident safety and practical response when it matters.</p>
                    <ul class="space-y-2.5 mb-8">
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700"><svg class="w-4 h-4 text-green-600 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Continuity and safety for daily resident care operations</li>
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700"><svg class="w-4 h-4 text-green-600 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Preventive maintenance to reduce unexpected breakdowns</li>
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700"><svg class="w-4 h-4 text-green-600 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Practical call-out support covering the Republic of Ireland</li>
                    </ul>
                    <a href="{{ route('sectors.care') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy-light text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200">Explore care facilities support<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></a>
                </div>
                <div class="p-8 lg:p-10 bg-bg space-y-4">
                    <p class="text-xs font-body font-semibold text-gray-400 uppercase tracking-widest mb-5">Services for this sector</p>
                    <a href="{{ route('service-contracts') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center flex-shrink-0 group-hover:bg-steel/20 transition-colors"><svg class="w-5 h-5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/></svg></div>
                        <div class="flex-1 min-w-0"><div class="flex items-center justify-between gap-2"><span class="font-body font-semibold text-navy text-sm">Service Contracts</span><svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></div><p class="text-xs font-body text-gray-500 mt-0.5">Structured preventive maintenance for predictable daily operations</p></div>
                    </a>
                    <a href="{{ route('repairs') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-orange/10 flex items-center justify-center flex-shrink-0 group-hover:bg-orange/20 transition-colors"><svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/></svg></div>
                        <div class="flex-1 min-w-0"><div class="flex items-center justify-between gap-2"><span class="font-body font-semibold text-navy text-sm">Repairs &amp; Call-outs</span><svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></div><p class="text-xs font-body text-gray-500 mt-0.5">Practical breakdown response when continuity matters most</p></div>
                    </a>
                    <a href="{{ route('equipment') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center flex-shrink-0 group-hover:bg-navy/20 transition-colors"><svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 2.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/></svg></div>
                        <div class="flex-1 min-w-0"><div class="flex items-center justify-between gap-2"><span class="font-body font-semibold text-navy text-sm">Equipment &amp; Rental</span><svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></div><p class="text-xs font-body text-gray-500 mt-0.5">Commercial washers, dryers and rental arrangements for care settings</p></div>
                    </a>
                </div>
            </div>

            <!-- ── COMMERCIAL & INDUSTRIAL ── -->
            <div x-show="active === 'commercial'" x-cloak
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 translate-y-1"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="grid grid-cols-1 lg:grid-cols-2 gap-0 relative">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-orange rounded-bl-xl"></div>
                <div class="p-8 lg:p-10 border-b lg:border-b-0 lg:border-r border-border pl-8 lg:pl-12">
                    <div class="inline-flex items-center gap-2 bg-orange-50 border border-orange-100 rounded-full px-3 py-1 mb-5">
                        <svg class="w-3.5 h-3.5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/></svg>
                        <span class="text-xs font-body font-semibold text-orange-800 uppercase tracking-wide">Commercial &amp; Industrial</span>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-4 leading-tight">Engineering Support for Commercial Laundry Operations</h3>
                    <p class="font-body text-gray-600 leading-relaxed mb-6">Commercial laundry operations demand throughput, reliability and tight lifecycle cost management. ILS brings engineering-led support focused on uptime, parts availability and long-term equipment performance.</p>
                    <ul class="space-y-2.5 mb-8">
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700"><svg class="w-4 h-4 text-orange mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Throughput-focused maintenance to protect production output</li>
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700"><svg class="w-4 h-4 text-orange mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Lifecycle cost planning and parts availability strategy</li>
                        <li class="flex items-start gap-2.5 text-sm font-body text-gray-700"><svg class="w-4 h-4 text-orange mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Equipment supply, installation and ongoing engineering support</li>
                    </ul>
                    <a href="{{ route('sectors.commercial') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy-light text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200">Explore commercial support<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></a>
                </div>
                <div class="p-8 lg:p-10 bg-bg space-y-4">
                    <p class="text-xs font-body font-semibold text-gray-400 uppercase tracking-widest mb-5">Services for this sector</p>
                    <a href="{{ route('service-contracts') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center flex-shrink-0 group-hover:bg-steel/20 transition-colors"><svg class="w-5 h-5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/></svg></div>
                        <div class="flex-1 min-w-0"><div class="flex items-center justify-between gap-2"><span class="font-body font-semibold text-navy text-sm">Service Contracts</span><svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></div><p class="text-xs font-body text-gray-500 mt-0.5">Planned maintenance to protect throughput and reduce reactive cost</p></div>
                    </a>
                    <a href="{{ route('repairs') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-orange/10 flex items-center justify-center flex-shrink-0 group-hover:bg-orange/20 transition-colors"><svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/></svg></div>
                        <div class="flex-1 min-w-0"><div class="flex items-center justify-between gap-2"><span class="font-body font-semibold text-navy text-sm">Repairs &amp; Call-outs</span><svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></div><p class="text-xs font-body text-gray-500 mt-0.5">Fast triage and repair to minimise production downtime</p></div>
                    </a>
                    <a href="{{ route('equipment') }}" class="flex items-start gap-4 p-4 bg-white rounded-xl border border-border hover:border-navy hover:shadow-card-hover transition-all duration-150 group">
                        <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center flex-shrink-0 group-hover:bg-navy/20 transition-colors"><svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 2.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/></svg></div>
                        <div class="flex-1 min-w-0"><div class="flex items-center justify-between gap-2"><span class="font-body font-semibold text-navy text-sm">Equipment &amp; Rental</span><svg class="w-4 h-4 text-gray-400 group-hover:text-navy transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></div><p class="text-xs font-body text-gray-500 mt-0.5">High-capacity commercial washers, dryers and finishing equipment</p></div>
                    </a>
                </div>
            </div>

        </div>
        {{-- End panel container --}}

    </div>
</section>
