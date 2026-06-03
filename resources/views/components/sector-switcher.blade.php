@props([
    'intro'           => 'Different sites carry different pressures. The right commercial laundry care depends on hygiene requirements,<br class="hidden lg:inline"> linen flow, staffing, throughput, installed equipment, budget pressure and service needs.',
    'healthcareBody'  => 'Care for healthcare laundry environments where hygiene process, room flow and equipment continuity affect daily service.',
    'careBody'        => 'Practical help for care environments where daily laundry demand, smaller teams and planned maintenance need to stay manageable.',
    'hospitalityBody' => 'Engineering care for guest-facing sites where linen availability, finishing quality, turnaround and response time affect the wider business.',
    'commercialBody'  => 'Care for higher-throughput laundry sites where output, lifecycle cost and engineering response carry more operational weight.',
])
{{--
    Sector Grid — 2×2 image-card grid
    Used on: homepage + sectors page.
    Title + description + CTA centered at bottom of each card, always visible.
    Hover: card lifts, image zooms.
--}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="mb-10">
            <div class="max-w-3xl">
                <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-4">Sectors</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-4 whitespace-nowrap">
                    Care shaped around <span class="text-[#148af4]">real operating environments</span>
                </h2>
            </div>
            <p class="font-body text-gray-600 text-lg leading-relaxed max-w-5xl">
                {!! $intro !!}
            </p>
        </div>

        <!-- 2×2 grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

            <!-- Healthcare -->
            <a href="{{ route('sectors.healthcare') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/healthcarehero.png" alt="Healthcare laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: 80% center;">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.45) 42%, rgba(1,30,65,0.05) 72%, transparent 88%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-2xl sm:text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3 whitespace-nowrap">Healthcare</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-md text-balance">
                        {{ $healthcareBody }}
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
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
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.45) 42%, rgba(1,30,65,0.05) 72%, transparent 88%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-2xl sm:text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3 whitespace-nowrap">Care Facilities</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-md text-balance">
                        {{ $careBody }}
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        View Care Facility Support
                    </span>
                </div>
            </a>

            <!-- Hospitality -->
            <a href="{{ route('sectors.hospitality') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/Hospitallity/hospitallityhero.jpeg" alt="Hospitality laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: 82% 30%;">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.45) 42%, rgba(1,30,65,0.05) 72%, transparent 88%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-2xl sm:text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3 whitespace-nowrap">Hospitality</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-md text-balance">
                        {{ $hospitalityBody }}
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        View Hospitality Support
                    </span>
                </div>
            </a>

            <!-- Commercial & Industrial -->
            <a href="{{ route('sectors.commercial') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/line-6000-solutions.jpg" alt="Commercial and industrial laundry support"
                     class="absolute inset-0 w-full h-full object-cover scale-150 transition-transform duration-700 group-hover:scale-[1.55]"
                     style="object-position: center 75%;">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.45) 42%, rgba(1,30,65,0.05) 72%, transparent 88%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-2xl sm:text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3 whitespace-nowrap">Commercial &amp; Industrial</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-md text-balance">
                        {{ $commercialBody }}
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        Discuss Site Requirements
                    </span>
                </div>
            </a>

        </div>
    </div>
</section>
