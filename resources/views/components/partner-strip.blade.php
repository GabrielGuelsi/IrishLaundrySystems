{{--
    Electrolux Partner Strip
    Full-width white strip with logo, description and 3 trust icons.
    Use directly below the hero section on every page.
--}}
<div class="bg-white border-b border-gray-200">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-6 lg:py-8 flex items-center gap-0">

        <!-- Left: Logo -->
        <div class="flex-shrink-0 pr-8">
            <img src="/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg"
                 alt="Electrolux Professional Authorized Partner"
                 class="h-20 w-auto">
        </div>

        <!-- Middle: Description -->
        <div class="hidden lg:block flex-1 border-l border-r border-gray-200 px-8">
            <p class="font-body font-bold text-navy text-sm uppercase tracking-wide mb-1">Electrolux Professional Authorized Partner</p>
            <p class="font-body text-gray-600 text-sm leading-relaxed">Irish Laundry Systems combines local engineering support in Ireland with manufacturer-grade equipment standards, lifecycle continuity, and a more structured route to service and lifecycle support.</p>
        </div>

        <!-- Right: 3 feature icons -->
        <div class="hidden lg:flex flex-shrink-0 items-center gap-8 pl-8">

            <div class="flex flex-col items-center gap-2 text-center">
                <div class="w-8 h-8 text-navy [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                    {!! file_get_contents(public_path('images/icons/brand/Ativo 13.svg')) !!}
                </div>
                <span class="text-xs font-body text-gray-600 leading-snug" style="max-width: 80px;">Local engineering execution</span>
            </div>

            <div class="flex flex-col items-center gap-2 text-center">
                <div class="w-8 h-8 text-navy [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                    {!! file_get_contents(public_path('images/icons/brand/Ativo 5.svg')) !!}
                </div>
                <span class="text-xs font-body text-gray-600 leading-snug" style="max-width: 80px;">Lifecycle support route</span>
            </div>

            <div class="flex flex-col items-center gap-2 text-center">
                <div class="w-8 h-8 text-navy [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                    {!! file_get_contents(public_path('images/icons/brand/Ativo 15.svg')) !!}
                </div>
                <span class="text-xs font-body text-gray-600 leading-snug" style="max-width: 80px;">Genuine parts continuity</span>
            </div>

        </div>

    </div>
</div>
