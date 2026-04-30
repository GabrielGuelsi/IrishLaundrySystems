{{--
    Electrolux Partner Strip
    Compact strip matching home page style — logo, divider, 3 icons, Learn more button.
    Use directly below the hero section on every page.
--}}
<div class="bg-white border-b border-gray-200">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16 py-2 lg:py-2.5 flex items-center justify-center gap-6 lg:gap-10 flex-wrap">

        <!-- Logo -->
        <div class="flex-shrink-0">
            <img src="/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg"
                 alt="Electrolux Professional Authorized Partner"
                 class="h-16 lg:h-20 w-auto">
        </div>

        <!-- Vertical divider -->
        <div class="hidden lg:block w-px h-14 bg-gray-200"></div>

        <!-- 3 feature icons -->
        <div class="hidden lg:flex flex-shrink-0 items-center gap-8">

            <div class="flex flex-col items-center gap-1.5 text-center">
                <div class="w-7 h-7 text-navy [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                    {!! file_get_contents(public_path('images/icons/brand/Ativo 13.svg')) !!}
                </div>
                <span class="text-[11px] font-body text-gray-600 leading-snug" style="max-width: 80px;">Local engineering execution</span>
            </div>

            <div class="flex flex-col items-center gap-1.5 text-center">
                <div class="w-7 h-7 text-navy [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                    {!! file_get_contents(public_path('images/icons/brand/Ativo 5.svg')) !!}
                </div>
                <span class="text-[11px] font-body text-gray-600 leading-snug" style="max-width: 80px;">Lifecycle support route</span>
            </div>

            <div class="flex flex-col items-center gap-1.5 text-center">
                <div class="w-7 h-7 text-navy [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                    {!! file_get_contents(public_path('images/icons/brand/Ativo 15.svg')) !!}
                </div>
                <span class="text-[11px] font-body text-gray-600 leading-snug" style="max-width: 80px;">Genuine parts continuity</span>
            </div>

        </div>

        <!-- Learn more button -->
        <a href="{{ route('electrolux') }}"
           class="hidden md:inline-flex items-center gap-2 border border-navy/20 hover:border-navy text-navy/70 hover:text-navy font-body font-semibold px-4 py-2 text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap rounded">
            Learn more
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
            </svg>
        </a>

    </div>
</div>
