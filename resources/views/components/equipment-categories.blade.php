{{-- Equipment Categories --}}
@php
$equipmentList = $equipment ?? [
    ['img' => 'line6000-barrier-washer', 'name' => 'Barrier Washers',    'desc' => 'For controlled dirty-side and clean-side handling where the process demands separation.',                  'iw' => '400', 'ih' => '440'],
    ['img' => 'commercialwasher',        'name' => 'Commercial Washers', 'desc' => 'For broader wash needs, daily capacity and consistent performance across professional laundry environments.', 'iw' => '400', 'ih' => '440'],
    ['img' => 'line6000-tumble-dryer',   'name' => 'Tumble Dryers',      'desc' => 'For post-wash continuity, drying control and steady room flow through the day.',                             'iw' => '260', 'ih' => '300'],
    ['img' => 'IB623_FRONT_NEW', 'ext' => 'jpg', 'name' => 'Ironers & Flatwork', 'desc' => 'For finishing, hygiene presentation, and clean-route continuity.',                                   'iw' => '260', 'ih' => '300'],
];
@endphp

<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 mb-10">
            <div>
                <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-3">Browse by type</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">Equipment Categories</h2>
            </div>
            <a href="{{ route('equipment') }}"
               class="inline-flex self-start lg:self-auto lg:mb-2 items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-5 py-3 rounded-full text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap">
                Browse All Equipment
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($equipmentList as $eq)
            <div class="flex flex-col gap-6 h-full">
                <div class="min-h-[112px]">
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $eq['name'] }}</p>
                    <p class="font-body text-gray-600 text-base leading-relaxed">{{ $eq['desc'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:320px;">
                    <img src="/images/equipment/{{ $eq['img'] }}.{{ $eq['ext'] ?? 'webp' }}"
                         alt="{{ $eq['name'] }}"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="max-width:100%; max-height:100%; width:auto; height:auto; object-fit:contain;">
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

    </div>
</section>
