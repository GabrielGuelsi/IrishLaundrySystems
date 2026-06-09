{{--
    Electrolux Partner Strip
    Compact strip matching home page style — logo, divider, 3 icons, Learn more button.
    Use directly below the hero section on every page.
--}}
<div class="bg-white border-b border-gray-200">
    <div class="max-w-screen-2xl mx-auto px-6 lg:pl-[52px] lg:pr-[62px] py-2 lg:py-2.5 flex items-center justify-center lg:justify-between flex-wrap gap-4">

        <!-- Logo -->
        <div class="flex-shrink-0">
            <img src="/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg"
                 alt="Electrolux Professional Authorized Partner"
                 class="h-16 lg:h-20 w-auto">
        </div>

        <!-- Vertical divider -->
        <div class="hidden lg:block w-px h-14 bg-gray-200"></div>

        <!-- Trust line -->
        <p class="hidden lg:block font-body text-navy text-sm leading-snug max-w-[240px]">
            Authorised Electrolux Professional Partner. Irish engineering expertise since 1987.
        </p>

        <!-- Vertical divider -->
        <div class="hidden lg:block w-px h-14 bg-gray-200"></div>

        <!-- 3 feature icons -->
        <div class="hidden lg:flex items-center gap-20">

            <div class="flex flex-col items-center gap-1.5 text-center">
                <div class="w-7 h-7 text-navy [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                    {!! file_get_contents(public_path('images/icons/brand/Ativo 1.svg')) !!}
                </div>
                <span class="text-sm font-body text-gray-700 leading-snug whitespace-nowrap">Safe Electric registered</span>
            </div>

            <div class="flex flex-col items-center gap-1.5 text-center">
                <div class="w-7 h-7 text-navy [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                    {!! file_get_contents(public_path('images/icons/brand/Ativo 5.svg')) !!}
                </div>
                <span class="text-sm font-body text-gray-700 leading-snug whitespace-nowrap">Registered Gas Installer contractors</span>
            </div>

            <div class="flex flex-col items-center gap-1.5 text-center">
                <div class="w-7 h-7 text-navy [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                    {!! file_get_contents(public_path('images/icons/brand/Ativo 15.svg')) !!}
                </div>
                <span class="text-sm font-body text-gray-700 leading-snug whitespace-nowrap">100+ clients supported</span>
            </div>

        </div>

        <!-- Learn more button -->
        <a href="{{ route('electrolux') }}"
           class="hidden md:inline-flex items-center gap-2 border border-navy/20 hover:border-navy text-navy/70 hover:text-navy font-body font-bold px-4 py-2 text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap rounded">
            Learn More
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
            </svg>
        </a>

    </div>
</div>
