{{--
    Sector Grid — 2×2 image-card grid
    Used on: homepage.
    Title + description + CTA centered at bottom of each card, always visible.
    Hover: card lifts, image zooms.
--}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="mb-10">
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                Support for <span class="text-orange">healthcare, Care Facilities,<br class="hidden lg:block">
                Hospitality, and Industrial Sites</span>.
            </h2>
        </div>

        <!-- 2×2 grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

            <!-- Healthcare -->
            <a href="{{ route('sectors.healthcare') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/healthcarehero.png" alt="Healthcare laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-extrabold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Healthcare</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-sm">
                        Engineering-led support for healthcare laundry environments where contamination control, continuity, and process discipline are central.
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        Request Healthcare Assessment
                    </span>
                </div>
            </a>

            <!-- Care Facilities -->
            <a href="{{ route('sectors.care') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/CareFacilities/CareFacilitiesHero.png" alt="Care facility laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-extrabold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Care Facilities</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-sm">
                        Continuity-focused laundry support for care environments and installed bases where uptime and practical maintenance matter.
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        View Care Facility Solutions
                    </span>
                </div>
            </a>

            <!-- Hospitality -->
            <a href="{{ route('sectors.hospitality') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/Hospitallity/HeroHospitallity.png" alt="Hospitality laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-extrabold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Hospitality</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-sm">
                        Support for guest-facing operations where room turnover, presentation, and dependable service response affect the business.
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        View Hospitality Solutions
                    </span>
                </div>
            </a>

            <!-- Commercial & Industrial -->
            <a href="{{ route('sectors.commercial') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/line-6000-solutions.jpg" alt="Commercial and industrial laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-extrabold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Commercial<br>&amp; Industrial</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-sm">
                        Support for larger or high-throughput sites where lifecycle cost, uptime, and robust engineering support matter every day.
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        Talk to an Engineer
                    </span>
                </div>
            </a>

        </div>
    </div>
</section>
