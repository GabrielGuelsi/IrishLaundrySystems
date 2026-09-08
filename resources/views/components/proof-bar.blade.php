{{--
    Proof · Trust Strip
    Standard section header (eyebrow · headline · body) over the trusted-by logo row.
--}}
<section class="bg-white py-16 lg:py-20 overflow-hidden" aria-label="Trusted partner credentials">

    <style>
        /* Mobile: tame the scaled logos so they fit the 2-column grid without overflow/overlap */
        @media (max-width: 1023px) {
            .pb-logo-square { transform: scale(3.4) !important; }
        }
    </style>

    <div class="max-w-screen-2xl mx-auto pl-6 sm:pl-10 lg:pl-[68px] pr-6 sm:pr-10 lg:pr-20">

        {{-- Header --}}
        <div class="mb-12">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Trusted across Ireland</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance">Commercial laundry expertise trusted across sectors</h2>
            <p class="font-body text-gray-500 text-base leading-relaxed mt-4">Supporting organisations across Ireland with equipment, engineering and service since 1987.</p>
        </div>

        {{-- Logos spread across the full width --}}
        <div class="grid grid-cols-2 lg:flex items-center w-full gap-x-4 gap-y-6 lg:gap-y-0" style="min-height:100px;">
            <div class="flex-1 flex items-center justify-center">
                <img src="/images/logo/grace-healthcare-cropped.png" alt="Grace Healthcare" class="h-8 lg:h-9 w-auto object-contain opacity-80">
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

</section>
