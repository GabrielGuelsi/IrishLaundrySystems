{{-- Equipment Categories — matches home page style --}}
<section class="py-20 lg:py-32 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-14">
            <div>
                <p class="font-body font-semibold text-orange text-xs uppercase tracking-[0.22em] mb-4">Browse by type</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl">Equipment Categories</h2>
                <p class="font-body text-gray-500 text-lg mt-4 max-w-xl">Commercial laundry equipment supplied, installed and supported across the Republic of Ireland.</p>
            </div>
            <a href="{{ route('equipment') }}"
               class="inline-flex self-start lg:self-auto items-center gap-2 border border-navy/20 hover:border-navy text-navy/60 hover:text-navy font-body font-semibold px-5 py-3 text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap">
                Browse All Equipment
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        @php
        $equipmentList = $equipment ?? [
            ['img' => 'line6000-barrier-washer',  'name' => 'Barrier Washers',      'desc' => 'For controlled dirty-side and clean-side handling.',              'scale' => '1.55'],
            ['img' => 'commercialwasher',         'name' => 'Commercial Washers',    'desc' => 'For broader wash routes and capacity planning.',                   'scale' => '1.75'],
            ['img' => 'line6000-tumble-dryer',    'name' => 'Tumble Dryers',         'desc' => 'For post-wash continuity and room flow.',                          'scale' => '1'],
            ['img' => 'line6000-ironer',          'name' => 'Ironers & Flatwork',    'desc' => 'For finishing, hygiene presentation, and clean-route continuity.', 'scale' => '1.4'],
        ];
        @endphp

        {{-- 4 equipment cards --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($equipmentList as $eq)
            <div class="bg-white border border-gray-100 rounded-xl p-8 flex flex-col gap-6">
                <div class="min-h-[112px]">
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $eq['name'] }}</p>
                    <p class="font-body text-[#148af4] text-base leading-relaxed">{{ $eq['desc'] }}</p>
                </div>
                <div class="flex items-center justify-center h-96 rounded-lg overflow-hidden bg-white">
                    <img src="/images/equipment/{{ $eq['img'] }}.webp"
                         alt="{{ $eq['name'] }}"
                         class="max-h-full max-w-full object-contain"
                         style="transform: scale({{ $eq['scale'] }}); transform-origin: center;">
                </div>
                <a href="{{ route('equipment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold text-base px-5 py-4 rounded-lg transition-colors mt-auto">
                    View Equipment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>

        {{-- "We help match" navy banner --}}
        <div class="mt-8 bg-navy rounded-xl p-8 lg:p-10 flex flex-col lg:flex-row items-start lg:items-center gap-6 lg:gap-10">
            <!-- Icon -->
            <div class="w-14 h-14 flex-shrink-0 rounded-md bg-white/10 flex items-center justify-center">
                <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897l11.07-11.07zm0 0L19.5 7.125"/>
                </svg>
            </div>
            <!-- Heading -->
            <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight flex-1">
                We help match the room, the workflow and the equipment.
            </h3>
            <!-- CTA -->
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold px-6 py-3.5 rounded-md text-sm whitespace-nowrap transition-colors">
                Site planning support
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>
