@props(['heading' => 'Equipment categories for healthcare laundry rooms', 'subheading' => null, 'textMinH' => '112px'])
{{-- Equipment Categories --}}
@php
$equipmentList = $equipment ?? [
    ['img' => 'commercialwasher',        'name' => 'Washing Machines', 'desc' => 'For broader healthcare wash needs, daily capacity and consistent professional washing.',                       'box' => 270, 'mb' => -35],
    ['img' => 'Tumble-dryers_Heat-Pump_1-1',   'name' => 'Dryers',      'desc' => 'For post-wash continuity, drying control and steady clean-side movement through the day.',                    'box' => 245],
    ['img' => 'drying-cabinet', 'src' => '/images/healthcare/Drying-cabinets_image.webp', 'name' => 'Drying Cabinets', 'desc' => 'For gentle drying of delicate garments, bulky items and specialist textiles where fabric care matters.', 'box' => 260, 'mb' => 20],
    ['img' => 'IB623_FRONT_NEW', 'ext' => 'jpg', 'name' => 'Ironers & Flatwork', 'desc' => 'For finishing, hygiene presentation and linen ready for storage or return to use.'],
];
@endphp

<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 mb-10">
            <div>
                <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-3">Browse by type</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">{!! $heading !!}</h2>
                @if($subheading)
                <p class="font-body text-gray-500 text-lg mt-4 whitespace-nowrap">{{ $subheading }}</p>
                @endif
            </div>
            <a href="{{ route('equipment') }}"
               class="inline-flex self-start lg:self-auto lg:mb-2 items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-5 py-3 rounded-full text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap">
                Browse All Equipment
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        @php
            $cnt  = count($equipmentList);
            $cols = $cnt >= 6 ? 3 : $cnt;
        @endphp
        <div class="grid grid-cols-2 lg:grid-cols-{{ $cols }} gap-6">
            @foreach($equipmentList as $eq)
            <div class="flex flex-col gap-6 h-full">
                <div style="min-height: {{ $textMinH }};">
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $eq['name'] }}</p>
                    <p class="font-body text-gray-600 text-base leading-relaxed">{{ $eq['desc'] }}</p>
                </div>
                @php $imgSrc = $eq['src'] ?? '/images/equipment/' . $eq['img'] . '.' . ($eq['ext'] ?? 'webp'); @endphp
                @if($loop->last)
                {{-- Ironer: wide/flat — bottom-align so the base sits flush with the others --}}
                <div class="w-full flex items-end justify-center" style="height:300px;">
                    <img src="{{ $imgSrc }}"
                         alt="{{ $eq['name'] }}"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="width:100%; height:auto; object-fit:contain;">
                </div>
                @else
                {{-- Per-machine box size so actual machine visual size looks equal --}}
                @php $box = $eq['box'] ?? 260; $mb = $eq['mb'] ?? 0; @endphp
                <div class="w-full flex items-end justify-center" style="height:300px;">
                    <img src="{{ $imgSrc }}"
                         alt="{{ $eq['name'] }}"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="width:{{ $box }}px; height:{{ $box }}px; object-fit:contain; margin-bottom:{{ $mb }}px;">
                </div>
                @endif
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
