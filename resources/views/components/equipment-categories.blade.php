{{-- Equipment Categories — compact bordered card style --}}
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 mb-10">
            <div>
                <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-3">Browse by type</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">Equipment Categories</h2>
            </div>
            <a href="{{ route('equipment') }}"
               class="inline-flex self-start lg:self-auto items-center gap-2 border border-navy/20 hover:border-navy text-navy/60 hover:text-navy font-body font-bold px-5 py-2.5 text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap rounded-lg">
                Browse All Equipment
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        @php
        $equipmentList = $equipment ?? [
            ['img' => 'line6000-barrier-washer',  'name' => 'Barrier Washers',      'desc' => 'For controlled dirty-side and clean-side handling.',                           'scale' => '1.55'],
            ['img' => 'commercialwasher',         'name' => 'Commercial Washers',    'desc' => 'For broader wash routes and capacity planning.',                               'scale' => '1.75'],
            ['img' => 'line6000-tumble-dryer',    'name' => 'Tumble Dryers',         'desc' => 'For post-wash continuity and room flow.',                                      'scale' => '1'],
            ['img' => 'IB623_FRONT_NEW', 'ext' => 'jpg', 'name' => 'Ironers & Flatwork', 'desc' => 'For finishing, hygiene presentation, and clean-route continuity.',        'scale' => '1.15'],
        ];
        @endphp

        {{-- 4 equipment cards --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($equipmentList as $eq)
            <div class="bg-white border border-gray-100 rounded-xl p-5 flex flex-col gap-4">
                <div class="min-h-[80px]">
                    <p class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $eq['name'] }}</p>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $eq['desc'] }}</p>
                </div>
                <div class="flex items-end justify-center h-52 rounded-lg overflow-hidden bg-white">
                    <img src="/images/equipment/{{ $eq['img'] }}.{{ $eq['ext'] ?? 'webp' }}"
                         alt="{{ $eq['name'] }}"
                         class="max-h-full max-w-full object-contain"
                         style="transform: scale({{ $eq['scale'] ?? '1' }}); transform-origin: bottom center;">
                </div>
                <a href="{{ route('equipment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-heading font-bold text-sm px-4 py-3 rounded-lg transition-colors mt-auto">
                    View Equipment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>
