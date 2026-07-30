{{--
    Proof · Trust Strip
    Logos left · stat right. Electrolux badge now lives inside the hero.
--}}
<section class="bg-white py-8 overflow-hidden" aria-label="Trusted partner credentials">

    <style>
        /* Mobile: tame the scaled logos so they fit the 2-column grid without overflow/overlap */
        @media (max-width: 1023px) {
            .pb-logo-grace { transform: scale(3.6) !important; }
            .pb-logo-square { transform: scale(3.4) !important; }
        }
    </style>

    <div class="max-w-screen-2xl mx-auto pl-6 sm:pl-10 lg:pl-[68px] pr-6 sm:pr-10 lg:pr-20">

        {{-- Logos + stat row --}}
        <div class="flex items-center gap-6 flex-wrap">

            {{-- Left: trusted by label + divider — fixed, never moves --}}
            <div class="flex items-center gap-4 flex-shrink-0 w-full lg:w-auto justify-center lg:justify-start" style="transform: translateY(-8px);">
                <p class="font-body text-xs font-bold text-gray-400 uppercase tracking-[0.22em] whitespace-nowrap">
                    Trusted by
                </p>
                <div class="w-px h-5 bg-gray-200 hidden sm:block"></div>
            </div>

            {{-- Logos spread across remaining width --}}
            <div class="grid grid-cols-2 lg:flex items-center w-full lg:flex-1 lg:w-auto gap-x-4 gap-y-6 lg:gap-y-0" style="min-height:100px;">
                <div class="flex-1 flex items-center justify-center overflow-hidden">
                    <img src="/images/logo/Logo_Grace_Healthcare_(1).png" alt="Grace Healthcare" class="pb-logo-grace h-10 w-auto object-contain opacity-80" style="transform: scale(7) translateY(0px); transform-origin: center;">
                </div>
                <div class="flex-1 flex items-center justify-center">
                    <img src="/images/logo/abbvie.png" alt="AbbVie" class="h-8 w-auto object-contain opacity-80" style="transform: translateY(-8px);">
                </div>
                <div class="flex-1 flex items-center justify-center overflow-hidden">
                    <img src="/images/shared/charlemontgroupsquare.png" alt="Charlemont Group" class="pb-logo-square h-10 w-auto object-contain opacity-80" style="transform: scale(5.5); transform-origin: center;">
                </div>
                <div class="flex-1 flex items-center justify-center overflow-hidden">
                    <img src="/images/shared/laundryonlinesquare2.png" alt="Laundry Online" class="pb-logo-square h-10 w-auto object-contain opacity-80" style="transform: scale(5.5) translateY(-1px); transform-origin: center;">
                </div>
            </div>

        </div>

    </div>

</section>
