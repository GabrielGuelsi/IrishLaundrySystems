<header class="sticky top-0 z-50 bg-white shadow-sm border-b border-gray-200" x-data="{ open: false, sectorsOpen: false, equipOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-18">

            <!-- Logo -->
            <div class="flex items-center gap-3 flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="/images/logo/ILS-LOGO-HORIZONTAL-BLUE.svg"
                         alt="Irish Laundry Systems"
                         class="h-9 w-auto"
                         onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                    <span style="display:none" class="flex flex-col leading-tight">
                        <span class="font-heading font-bold text-navy text-lg leading-tight tracking-tight">Irish Laundry Systems</span>
                        <span class="text-orange text-xs font-body tracking-wide">Commercial Laundry Engineering</span>
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-1" role="navigation" aria-label="Main navigation">

                <!-- Services Dropdown -->
                <div class="relative" x-data="{ servicesOpen: false }" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                    <button @click="servicesOpen = !servicesOpen"
                            class="flex items-center gap-1 text-navy hover:text-orange hover:bg-bg px-3 py-2 rounded-md text-sm font-body font-semibold transition-colors duration-150 whitespace-nowrap cursor-pointer"
                            aria-haspopup="true" :aria-expanded="servicesOpen">
                        Services
                        <svg class="w-4 h-4 transition-transform duration-200" :class="servicesOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="servicesOpen" x-cloak x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         class="absolute left-0 top-full pt-1 w-52 z-50">
                    <div class="bg-white rounded-lg shadow-xl border border-gray-200 py-1">
                        <a href="{{ route('services') }}" class="block px-4 py-2.5 text-sm font-body text-navy hover:bg-bg hover:text-orange font-semibold">Services Overview</a>
                        <a href="{{ route('service-contracts') }}" class="block px-4 py-2.5 text-sm font-body text-gray-700 hover:bg-bg hover:text-orange">Service Contracts</a>
                        <a href="{{ route('repairs') }}" class="block px-4 py-2.5 text-sm font-body text-gray-700 hover:bg-bg hover:text-orange">Repairs &amp; Call-outs</a>
                        <a href="{{ route('services') }}#parts" class="block px-4 py-2.5 text-sm font-body text-gray-700 hover:bg-bg hover:text-orange">Parts &amp; Aftercare</a>
                    </div></div>
                </div>

                <a href="{{ route('rental') }}"
                   class="text-navy hover:text-orange hover:bg-bg px-3 py-2 rounded-md text-sm font-body font-semibold transition-colors duration-150 whitespace-nowrap">
                    Rental
                </a>

                <!-- Equipment Dropdown -->
                <div class="relative" x-data="{ equipOpen: false }" @mouseenter="equipOpen = true" @mouseleave="equipOpen = false">
                    <button @click="equipOpen = !equipOpen"
                            class="flex items-center gap-1 text-navy hover:text-orange hover:bg-bg px-3 py-2 rounded-md text-sm font-body font-semibold transition-colors duration-150 whitespace-nowrap cursor-pointer"
                            aria-haspopup="true" :aria-expanded="equipOpen">
                        Equipment
                        <svg class="w-4 h-4 transition-transform duration-200" :class="equipOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="equipOpen" x-cloak x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         class="absolute left-0 top-full pt-1 w-52 z-50">
                    <div class="bg-white rounded-lg shadow-xl border border-gray-200 py-1">
                        <a href="{{ route('equipment') }}" class="block px-4 py-2.5 text-sm font-body text-navy hover:bg-bg hover:text-orange font-semibold">Equipment Hub</a>
                        <a href="{{ route('equipment.category', 'washers') }}" class="block px-4 py-2.5 text-sm font-body text-gray-700 hover:bg-bg hover:text-orange">Commercial Washers</a>
                        <a href="{{ route('equipment.category', 'dryers') }}" class="block px-4 py-2.5 text-sm font-body text-gray-700 hover:bg-bg hover:text-orange">Commercial Dryers</a>
                        <a href="{{ route('equipment.category', 'barrier-washers') }}" class="block px-4 py-2.5 text-sm font-body text-gray-700 hover:bg-bg hover:text-orange">Barrier Washers</a>
                        <a href="{{ route('equipment.category', 'ironers') }}" class="block px-4 py-2.5 text-sm font-body text-gray-700 hover:bg-bg hover:text-orange">Ironers</a>
                    </div></div>
                </div>

                <!-- Sectors Dropdown -->
                <div class="relative" x-data="{ sectorsOpen: false }" @mouseenter="sectorsOpen = true" @mouseleave="sectorsOpen = false">
                    <button @click="sectorsOpen = !sectorsOpen"
                            class="flex items-center gap-1 text-navy hover:text-orange hover:bg-bg px-3 py-2 rounded-md text-sm font-body font-semibold transition-colors duration-150 whitespace-nowrap cursor-pointer"
                            aria-haspopup="true" :aria-expanded="sectorsOpen">
                        Sectors
                        <svg class="w-4 h-4 transition-transform duration-200" :class="sectorsOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="sectorsOpen" x-cloak x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         class="absolute left-0 top-full pt-1 w-52 z-50">
                    <div class="bg-white rounded-lg shadow-xl border border-gray-200 py-1">
                        <a href="{{ route('sectors.healthcare') }}" class="block px-4 py-2.5 text-sm font-body text-gray-700 hover:bg-bg hover:text-orange">Healthcare</a>
                        <a href="{{ route('sectors.hospitality') }}" class="block px-4 py-2.5 text-sm font-body text-gray-700 hover:bg-bg hover:text-orange">Hospitality</a>
                        <a href="{{ route('sectors.care') }}" class="block px-4 py-2.5 text-sm font-body text-gray-700 hover:bg-bg hover:text-orange">Care Facilities</a>
                        <a href="{{ route('sectors.commercial') }}" class="block px-4 py-2.5 text-sm font-body text-gray-700 hover:bg-bg hover:text-orange">Commercial &amp; Industrial</a>
                    </div></div>
                </div>

                <a href="{{ route('about') }}"
                   class="text-navy hover:text-orange hover:bg-bg px-3 py-2 rounded-md text-sm font-body font-semibold transition-colors duration-150 whitespace-nowrap">
                    About
                </a>

                <a href="{{ route('resources') }}"
                   class="text-navy hover:text-orange hover:bg-bg px-3 py-2 rounded-md text-sm font-body font-semibold transition-colors duration-150 whitespace-nowrap">
                    Resources
                </a>

                <a href="{{ route('contact') }}"
                   class="text-navy hover:text-orange hover:bg-bg px-3 py-2 rounded-md text-sm font-body font-semibold transition-colors duration-150 whitespace-nowrap">
                    Contact
                </a>
            </nav>

            <!-- Desktop CTA + Phone -->
            <div class="hidden lg:flex items-center gap-3">
                <a href="tel:+353000000000"
                   class="flex flex-col items-end text-navy hover:text-orange transition-colors duration-150 group">
                    <span class="flex items-center gap-1.5 text-sm font-body font-semibold">
                        <svg class="w-4 h-4 text-orange group-hover:text-orange-dark transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                        </svg>
                        Talk to an Engineer
                    </span>
                    <span class="text-xs text-muted font-body tracking-wide">+353 01 123 4567</span>
                </a>
                <a href="{{ route('request-assessment') }}"
                   class="bg-orange hover:bg-orange-dark text-white font-body font-semibold px-5 py-2.5 rounded-lg text-sm transition-colors duration-200 cursor-pointer whitespace-nowrap"
                   data-ga-cta="header_request_assessment">
                    Request Service Assessment
                </a>
            </div>

            <!-- Mobile Hamburger -->
            <button @click="open = !open"
                    class="lg:hidden text-navy p-2 rounded-md hover:bg-bg transition-colors duration-150 cursor-pointer"
                    :aria-expanded="open" aria-label="Toggle menu">
                <svg x-show="!open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Drawer -->
    <div x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="lg:hidden bg-navy-dark border-t border-white/10 overflow-y-auto max-h-screen"
         @click.away="open = false">

        <!-- Electrolux badge -->
        <div class="px-4 py-2 border-b border-white/10">
            <span class="text-xs text-orange-light font-body">Authorised Electrolux Professional Partner</span>
        </div>

        <nav class="px-4 py-3 space-y-1 font-body">
            <!-- Mobile Services -->
            <div x-data="{ svOpen: false }">
                <button @click="svOpen = !svOpen" class="flex items-center justify-between w-full py-2.5 text-gray-200 hover:text-white font-semibold border-b border-white/5 cursor-pointer">
                    Services
                    <svg class="w-4 h-4 transition-transform" :class="svOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="svOpen" x-cloak class="pl-4 space-y-1 py-1">
                    <a href="{{ route('services') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Services Overview</a>
                    <a href="{{ route('service-contracts') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Service Contracts</a>
                    <a href="{{ route('repairs') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Repairs &amp; Call-outs</a>
                    <a href="{{ route('services') }}#parts" class="block py-2 text-sm text-gray-300 hover:text-white">Parts &amp; Aftercare</a>
                </div>
            </div>
            <a href="{{ route('rental') }}" class="block py-2.5 text-gray-200 hover:text-white font-semibold border-b border-white/5">Rental</a>

            <!-- Mobile Equipment -->
            <div x-data="{ eOpen: false }">
                <button @click="eOpen = !eOpen" class="flex items-center justify-between w-full py-2.5 text-gray-200 hover:text-white font-semibold border-b border-white/5 cursor-pointer">
                    Equipment
                    <svg class="w-4 h-4 transition-transform" :class="eOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="eOpen" x-cloak class="pl-4 space-y-1 py-1">
                    <a href="{{ route('equipment') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Equipment Hub</a>
                    <a href="{{ route('equipment.category', 'washers') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Commercial Washers</a>
                    <a href="{{ route('equipment.category', 'dryers') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Commercial Dryers</a>
                    <a href="{{ route('equipment.category', 'barrier-washers') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Barrier Washers</a>
                    <a href="{{ route('equipment.category', 'ironers') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Ironers</a>
                </div>
            </div>

            <!-- Mobile Sectors -->
            <div x-data="{ sOpen: false }">
                <button @click="sOpen = !sOpen" class="flex items-center justify-between w-full py-2.5 text-gray-200 hover:text-white font-semibold border-b border-white/5 cursor-pointer">
                    Sectors
                    <svg class="w-4 h-4 transition-transform" :class="sOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="sOpen" x-cloak class="pl-4 space-y-1 py-1">
                    <a href="{{ route('sectors.healthcare') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Healthcare</a>
                    <a href="{{ route('sectors.hospitality') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Hospitality</a>
                    <a href="{{ route('sectors.care') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Care Facilities</a>
                    <a href="{{ route('sectors.commercial') }}" class="block py-2 text-sm text-gray-300 hover:text-white">Commercial &amp; Industrial</a>
                </div>
            </div>

            <a href="{{ route('about') }}" class="block py-2.5 text-gray-200 hover:text-white font-semibold border-b border-white/5">About</a>
            <a href="{{ route('resources') }}" class="block py-2.5 text-gray-200 hover:text-white font-semibold border-b border-white/5">Resources</a>
            <a href="{{ route('contact') }}" class="block py-2.5 text-gray-200 hover:text-white font-semibold">Contact</a>
        </nav>

        <div class="px-4 py-4 border-t border-white/10 space-y-3">
            <a href="tel:+353000000000" class="flex items-center justify-center gap-2 w-full py-3 text-white border border-white/30 rounded-lg font-semibold font-body text-sm hover:bg-white/10 transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                </svg>
                Talk to an Engineer &mdash; +353 01 123 4567
            </a>
            <a href="{{ route('request-assessment') }}" class="flex items-center justify-center gap-2 w-full py-3 bg-orange hover:bg-orange-dark text-white rounded-lg font-semibold font-body text-sm transition-colors cursor-pointer"
               data-ga-cta="mobile_header_request_assessment">
                Request Service Assessment
            </a>
        </div>
    </div>

    <!-- Electrolux badge - desktop only -->
    <div class="hidden lg:block bg-bg border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-1 flex items-center justify-between">
            <span class="text-xs text-navy font-body">Authorised Electrolux Professional Partner &mdash; Engineering-led commercial laundry since 1987</span>
            <a href="{{ route('electrolux') }}" class="text-xs text-navy hover:text-orange font-body transition-colors">Learn about our partnership &rarr;</a>
        </div>
    </div>
</header>
