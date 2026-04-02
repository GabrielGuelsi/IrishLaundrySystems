{{--
    Sector Tabs Sub-Nav
    Include at the top of @section('content') on sector pages only.
    Displays a sticky tab strip directly below the header so users can
    switch between sector views without going back to the sectors hub.
--}}
<div class="bg-navy-dark border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex overflow-x-auto scrollbar-hide -mb-px" aria-label="Sector navigation">

            <a href="{{ route('sectors.healthcare') }}"
               class="flex items-center gap-2 px-5 py-3 text-sm font-body font-semibold whitespace-nowrap border-b-2 transition-colors duration-150
                      {{ request()->routeIs('sectors.healthcare')
                          ? 'border-orange text-white'
                          : 'border-transparent text-steel-light hover:text-white hover:border-white/30' }}">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                </svg>
                Healthcare
            </a>

            <a href="{{ route('sectors.hospitality') }}"
               class="flex items-center gap-2 px-5 py-3 text-sm font-body font-semibold whitespace-nowrap border-b-2 transition-colors duration-150
                      {{ request()->routeIs('sectors.hospitality')
                          ? 'border-orange text-white'
                          : 'border-transparent text-steel-light hover:text-white hover:border-white/30' }}">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5"/>
                </svg>
                Hospitality
            </a>

            <a href="{{ route('sectors.care') }}"
               class="flex items-center gap-2 px-5 py-3 text-sm font-body font-semibold whitespace-nowrap border-b-2 transition-colors duration-150
                      {{ request()->routeIs('sectors.care')
                          ? 'border-orange text-white'
                          : 'border-transparent text-steel-light hover:text-white hover:border-white/30' }}">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                </svg>
                Care Facilities
            </a>

            <a href="{{ route('sectors.commercial') }}"
               class="flex items-center gap-2 px-5 py-3 text-sm font-body font-semibold whitespace-nowrap border-b-2 transition-colors duration-150
                      {{ request()->routeIs('sectors.commercial')
                          ? 'border-orange text-white'
                          : 'border-transparent text-steel-light hover:text-white hover:border-white/30' }}">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>
                </svg>
                Commercial &amp; Industrial
            </a>

        </nav>
    </div>
</div>
