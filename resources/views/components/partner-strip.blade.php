{{--
    Electrolux Partner Strip
    Compact strip matching home page style — logo, divider, 3 icons, Learn more button.
    Use directly below the hero section on every page.
--}}
<div class="bg-white border-b border-gray-200">
    <div class="max-w-screen-2xl mx-auto px-6 lg:pl-[52px] lg:pr-[62px] py-4 lg:py-2.5 flex flex-col lg:flex-row items-center justify-center lg:justify-between gap-2 lg:gap-4 text-center lg:text-left">

        <!-- Logo -->
        <div class="flex-shrink-0">
            <img src="/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg"
                 alt="Electrolux Professional Authorized Partner"
                 class="h-12 sm:h-14 lg:h-20 w-auto mx-auto">
        </div>

        <!-- Trust line (mobile: compact, centered) -->
        <p class="lg:hidden font-body text-navy text-xs leading-snug max-w-xs">
            Working with Electrolux Professional since 1987.
        </p>

        <!-- Vertical divider -->
        <div class="hidden lg:block w-px h-14 bg-gray-200"></div>

        <!-- Trust line -->
        <p class="hidden lg:block font-body text-navy text-sm leading-snug max-w-[260px]">
            Working with Electrolux Professional since 1987, combining manufacturer expertise with Irish engineering capability.
        </p>

        <!-- Vertical divider -->
        <div class="hidden lg:block w-px h-14 bg-gray-200"></div>

        <!-- 3 feature icons -->
        <div class="hidden lg:flex items-start gap-20">

            <div class="flex flex-col items-center gap-0 text-center">
                <div class="h-[88px] flex items-center justify-center">
                    <img src="/images/icons/SAFEELECTRIC.png" alt="" aria-hidden="true" class="max-h-[88px] w-auto object-contain scale-[1.15] -translate-y-[4.5px]">
                </div>
                <span class="text-sm font-body text-gray-700 leading-snug whitespace-nowrap -mt-2">Registered Electrical Contractor</span>
            </div>

            <div class="flex flex-col items-center gap-0 text-center">
                <div class="h-[88px] flex items-center justify-center">
                    <img src="/images/icons/RGIGASINSTALLER.png" alt="" aria-hidden="true" class="max-h-[88px] w-auto object-contain scale-[1.15] -translate-y-[8px]">
                </div>
                <span class="text-sm font-body text-gray-700 leading-snug whitespace-nowrap -mt-2">Registered Gas Installer</span>
            </div>

            <div class="flex flex-col items-center gap-0 text-center">
                <div class="h-[88px] flex items-center justify-center overflow-visible">
                    <img src="/images/icons/100-clients.png" alt="" aria-hidden="true" class="max-h-[88px] w-auto object-contain scale-[1.8] translate-y-[22px]">
                </div>
                <span class="text-sm font-body text-gray-700 leading-snug whitespace-nowrap -mt-2">Long-standing relationships</span>
            </div>

        </div>

        <!-- Learn more button -->
        <a href="{{ route('electrolux') }}"
           class="hidden md:inline-flex items-center gap-2 border border-navy/20 hover:border-navy text-navy/70 hover:text-navy font-body font-bold px-4 py-2 text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap rounded">
            Learn more
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
            </svg>
        </a>

    </div>
</div>
