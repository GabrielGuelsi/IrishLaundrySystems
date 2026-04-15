{{--
    Sector Grid — 2×2 image-card grid
    Used on: homepage.
    Matches V8 mockup design.
--}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="mb-10">
            <h2 class="font-heading text-navy text-4xl lg:text-5xl leading-tight">
                <span class="font-bold">Support for</span> healthcare, Care Facilities,<br class="hidden lg:block">
                Hospitality, and Industrial Sites.
            </h2>
        </div>

        <!-- 2×2 grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

            <!-- Healthcare -->
            <a href="{{ route('sectors.healthcare') }}" class="group relative overflow-hidden h-[360px] lg:h-[400px] block">
                <img src="/images/healthcare/hero-main.jpg" alt="Healthcare laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 45%, transparent 70%);"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <h3 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-none mb-3">Healthcare</h3>
                    <p class="font-body text-white/75 text-sm leading-relaxed mb-5">
                        Engineering-led support for healthcare laundry environments where contamination control, continuity, and process discipline are central.
                    </p>
                    <span class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold text-xs px-4 py-2.5 rounded transition-colors duration-200">
                        Request Healthcare Assessment
                    </span>
                </div>
            </a>

            <!-- Care Facilities -->
            <a href="{{ route('sectors.care') }}" class="group relative overflow-hidden h-[360px] lg:h-[400px] block">
                <img src="/images/about/about-team.jpg" alt="Care facility laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 45%, transparent 70%);"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <h3 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-none mb-3">Care Facilities</h3>
                    <p class="font-body text-white/75 text-sm leading-relaxed mb-5">
                        Continuity-focused laundry support for care environments and installed bases where uptime and practical maintenance matter.
                    </p>
                    <span class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold text-xs px-4 py-2.5 rounded transition-colors duration-200">
                        View Care Facility Solutions
                    </span>
                </div>
            </a>

            <!-- Hospitality -->
            <a href="{{ route('sectors.hospitality') }}" class="group relative overflow-hidden h-[360px] lg:h-[400px] block">
                <img src="/images/healthcare/operator.jpg" alt="Hospitality laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 45%, transparent 70%);"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <h3 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-none mb-3">Hospitality</h3>
                    <p class="font-body text-white/75 text-sm leading-relaxed mb-5">
                        Support for guest-facing operations where room turnover, presentation, and dependable service response affect the business.
                    </p>
                    <span class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold text-xs px-4 py-2.5 rounded transition-colors duration-200">
                        View Hospitality Solutions
                    </span>
                </div>
            </a>

            <!-- Commercial & Industrial -->
            <a href="{{ route('sectors.commercial') }}" class="group relative overflow-hidden h-[360px] lg:h-[400px] block">
                <img src="/images/about/about-equipment.jpg" alt="Commercial and industrial laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 45%, transparent 70%);"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <h3 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-none mb-3">Commercial<br>&amp; Industrial</h3>
                    <p class="font-body text-white/75 text-sm leading-relaxed mb-5">
                        Support for larger or high-throughput sites where lifecycle cost, uptime, and robust engineering support matter every day.
                    </p>
                    <span class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold text-xs px-4 py-2.5 rounded transition-colors duration-200">
                        Talk to an Engineer
                    </span>
                </div>
            </a>

        </div>
    </div>
</section>
