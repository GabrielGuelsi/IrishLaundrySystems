{{-- Equipment Categories — floating style --}}
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 mb-10">
            <div>
                <p class="font-body font-semibold text-orange text-xs uppercase tracking-[0.22em] mb-3">Browse by type</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">Equipment Categories</h2>
            </div>
            <a href="{{ route('equipment') }}"
               class="inline-flex self-start lg:self-auto items-center gap-2 border border-navy/20 hover:border-navy text-navy/60 hover:text-navy font-body font-semibold px-5 py-2.5 text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap rounded-lg">
                Browse All Equipment
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        @php
        $equipmentList = $equipment ?? [
            ['img' => 'line6000-barrier-washer',  'name' => 'Barrier Washers',      'desc' => 'For controlled dirty-side and clean-side handling.'],
            ['img' => 'commercialwasher',         'name' => 'Commercial Washers',    'desc' => 'For broader wash routes and capacity planning.'],
            ['img' => 'line6000-tumble-dryer',    'name' => 'Tumble Dryers',         'desc' => 'For post-wash continuity and room flow.'],
            ['img' => 'line6000-ironer',          'name' => 'Ironers & Flatwork',    'desc' => 'For finishing, hygiene presentation, and clean-route continuity.'],
        ];
        @endphp

        {{-- 4 floating products --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-10">
            @foreach($equipmentList as $eq)
            <div class="flex flex-col">
                {{-- Text --}}
                <div class="mb-5 min-h-[80px]">
                    <p class="font-heading font-bold text-navy text-lg leading-snug mb-1">{{ $eq['name'] }}</p>
                    <p class="font-body text-[#148af4] text-sm leading-relaxed">{{ $eq['desc'] }}</p>
                </div>
                {{-- Floating image — no card box --}}
                <div class="flex items-center justify-center h-52">
                    <img src="/images/equipment/{{ $eq['img'] }}.webp"
                         alt="{{ $eq['name'] }}"
                         class="w-full h-full object-contain transition-transform duration-500 hover:-translate-y-2"
                         style="mix-blend-mode: multiply;">
                </div>
                {{-- CTA --}}
                <div class="mt-6 pt-4 border-t border-gray-200">
                    <a href="{{ route('equipment') }}"
                       class="inline-flex items-center gap-2 text-navy hover:text-[#148af4] font-heading font-bold text-sm transition-colors">
                        View Equipment
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
