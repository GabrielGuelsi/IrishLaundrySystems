@extends('layouts.app')

@section('pageTitle', 'Commercial Finishing Equipment | Ironing Tables, Presses & Steam | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial finishing equipment for care homes, hospitality and garment care. Irish Laundry Systems connects ironing tables, steam support, presses and form finishers with advice, installation and support across Ireland.">
@endsection

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden flex flex-col min-h-[520px] lg:min-h-[560px] lg:h-[720px]">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial finishing equipment"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-12 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Finishing Equipment</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    Commercial ironing tables and finishing equipment for <span style="color:#148af4;">professional daily presentation</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    For care homes, nursing homes, hospitality sites and garment care workflows that need a cleaner finish across linen, uniforms, garments and everyday items. Irish Laundry Systems connects selected Electrolux Professional finishing equipment with advice, installation and support.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Finishing Equipment Advice
                    </a>
                    <a href="{{ route('equipment.category', 'ironers') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        View Commercial Ironers
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Finishing Decisions</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Improve the final finish without moving straight into a full ironer setup
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5">
                    Some laundry rooms need practical ironing and finishing support before they need a larger hot cylinder ironer. Finishing equipment can support resident clothing, guest garments, uniforms, shirts, trousers, linen touch-ups and smaller presentation-led items where the final finish still matters.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems can help choose the right equipment before money is spent on something that does not fit the room, the workload or the daily routine.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Talk to the Equipment Team
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- FINISHING EQUIPMENT OPTIONS (4 cards) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Finishing Equipment Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose the <span style="color:#148af4;">right finishing option</span> for the work handled every day
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with the items the team needs to finish, then match the equipment to the room, staff routine, presentation standard and support required.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach([
                ['icon' => '30', 'title' => 'Ironing Tables',                 'copy' => 'Professional ironing table support for everyday linen, uniforms, resident clothing, garments and smaller items that need a cleaner final finish.', 'cta' => 'View Ironing Tables',    'href' => '#ironing-tables'],
                ['icon' => '16', 'title' => 'Steam Irons & Steam Boiler Support', 'copy' => 'Steam support for hand-finishing work where staff need a practical way to improve daily presentation.', 'cta' => 'View Steam Support',     'href' => '#steam-support'],
                ['icon' => '5',  'title' => 'Presses & Form Finishers',        'copy' => 'For sites that need stronger consistency, better garment presentation and more productive finishing than manual ironing alone.', 'cta' => 'View Presses & Finishers', 'href' => '#presses'],
                ['icon' => '26', 'title' => 'Shirt & Trouser Finishing',       'copy' => 'For shirts, trousers, uniforms and garments where shape, creases, pleats and finish quality matter.', 'cta' => 'View Garment Finishing', 'href' => '#garment-finishing'],
            ] as $card)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 shadow-card flex flex-col h-full reveal">
                <img src="/images/icons/{{ $card['icon'] }}.png" alt="" class="w-20 h-20 object-contain mb-5">
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-3">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6 flex-1">{{ $card['copy'] }}</p>
                <a href="{{ $card['href'] }}" class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline mt-auto">
                    {{ $card['cta'] }}
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- DETAIL SECTIONS (1-4) --}}
@php
    $detailSections = [
        [
            'id'       => 'ironing-tables',
            'eyebrow'  => 'Ironing Tables',
            'heading'  => 'Practical finishing support for <span style="color:#148af4;">daily linen and garment work</span>',
            'body'     => 'Ironing tables give care homes, nursing homes, hospitality sites and smaller laundry rooms a practical way to improve the final finish without moving straight into a larger ironer setup. They can support linen, uniforms, resident clothing, guest garments and everyday items that need a cleaner presentation.',
            'points'   => ['Daily finishing support', 'Professional presentation', 'Practical room fit'],
            'primary'  => 'Ask About Ironing Tables',
            'img'      => '/images/equipment/Strip1.jpeg',
        ],
        [
            'id'       => 'steam-support',
            'eyebrow'  => 'Steam Support',
            'heading'  => 'Give hand-finishing work <span style="color:#148af4;">the right steam setup</span>',
            'body'     => 'Steam irons and steam boiler support can form the backbone of practical hand-finishing work. They are useful where teams need flexible finishing support for touch-ups, garment presentation, uniforms and everyday linen items.',
            'points'   => ['Flexible hand finishing', 'Garment and linen support', 'Steam setup advice'],
            'primary'  => 'Ask About Steam Support',
            'img'      => '/images/healthcare/commercial-industrial.jpg',
        ],
        [
            'id'       => 'presses',
            'eyebrow'  => 'Presses & Form Finishers',
            'heading'  => 'More consistent finishing for <span style="color:#148af4;">presentation-led laundry work</span>',
            'body'     => 'Presses and form finishers support sites that need stronger finishing consistency, better garment presentation and a more productive option than manual ironing alone. They can be useful where shirts, jackets, coats, dresses, uniforms or customer-facing garments need a professional finish.',
            'points'   => ['Consistent finish', 'Garment presentation', 'Better daily productivity'],
            'primary'  => 'Ask About Presses & Finishers',
            'img'      => '/images/equipment/line6000-ironer.webp',
        ],
        [
            'id'       => 'garment-finishing',
            'eyebrow'  => 'Shirt & Trouser Finishing',
            'heading'  => 'Support garment presentation where <span style="color:#148af4;">shape and finish matter</span>',
            'body'     => 'Shirts, trousers and uniforms often need more than basic touch-up work. Shirt and trouser finishing options can support shape, creases, pleats and garment presentation for hospitality, garment care and uniform handling.',
            'points'   => ['Shirt presentation', 'Trouser finishing', 'Uniform support'],
            'primary'  => 'Ask About Garment Finishing',
            'img'      => '/images/equipment/Strip1.jpeg',
        ],
    ];
@endphp

@foreach($detailSections as $i => $d)
<section id="{{ $d['id'] }}" class="py-16 lg:py-24 scroll-mt-28 {{ $i % 2 === 0 ? 'bg-white' : 'bg-bg' }} border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Text column (alternates side) --}}
            <div class="reveal {{ $i % 2 === 0 ? 'reveal-left lg:order-1' : 'reveal-right lg:order-2' }}">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">{{ $d['eyebrow'] }}</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                    {!! $d['heading'] !!}
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                    {{ $d['body'] }}
                </p>
                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 mb-8">
                    @foreach($d['points'] as $pi => $pt)
                    @if($pi > 0)<span class="text-gray-300">|</span>@endif
                    <span class="inline-flex items-center gap-2 font-body text-navy text-sm font-bold">
                        <span class="text-[#148af4]">&#9656;</span> {{ $pt }}
                    </span>
                    @endforeach
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        {{ $d['primary'] }}
                    </a>
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Product Details
                    </a>
                </div>
            </div>

            {{-- Supporting visual column --}}
            <div class="reveal {{ $i % 2 === 0 ? 'reveal-right lg:order-2' : 'reveal-left lg:order-1' }}">
                <div class="relative overflow-hidden rounded-2xl border border-gray-100 h-[260px] sm:h-[320px] lg:h-[380px]">
                    <img src="{{ $d['img'] }}" alt="{{ $d['eyebrow'] }}"
                         class="absolute inset-0 w-full h-full {{ str_ends_with($d['img'], '.webp') ? 'object-contain bg-bg p-8' : 'object-cover' }}">
                    @if(!str_ends_with($d['img'], '.webp'))
                    <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(1,30,65,0.35) 0%, rgba(1,30,65,0.05) 50%, transparent 100%);"></div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>
@endforeach

{{-- SPECIALIST FINISHING --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Specialist Finishing</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                    Specialist finishing equipment available <span style="color:#148af4;">where the work calls for it</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                    Some laundry rooms and garment care operations need more specialist support, including spotting units, spotting cabinets, finishing cabinets or other finishing equipment. Irish Laundry Systems can advise on selected Electrolux Professional options where the work requires them.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                    Ask About Specialist Finishing
                </a>
            </div>

            <div class="reveal reveal-right">
                <div class="bg-bg border border-gray-100 rounded-2xl p-7">
                    <p class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em] mb-4">Specialist Options</p>
                    <div class="flex flex-col gap-3">
                        @foreach([
                            'Spotting Units & Cabinets',
                            'Finishing Cabinets',
                            'Rotary Finishing Cabinets',
                            'Specialist finishing equipment on request',
                        ] as $opt)
                        <span class="inline-flex items-center gap-3 font-body text-navy text-sm font-semibold bg-white border border-gray-100 rounded-full px-5 py-3">
                            <span class="text-[#148af4]">&#9656;</span> {{ $opt }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- PLANNING & SUPPORT (blue strip) --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-16 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Planning & Support</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Choose finishing equipment around <span style="color:#011E41;">the room, the items and daily use</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            Finishing equipment should fit the space, the staff routine and the type of items handled every day. Irish Laundry Systems can review the finishing work, available room, steam or electrical needs, installation requirements and support options before recommending the right equipment.
        </p>
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 mb-7">
            @foreach([
                ['t' => 'Room fit',                'd' => 'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75'],
                ['t' => 'Item type',               'd' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z'],
                ['t' => 'Steam and utility needs', 'd' => 'M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z'],
                ['t' => 'Installation and support', 'd' => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z'],
            ] as $pt)
            <span class="inline-flex items-center gap-2">
                <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $pt['d'] }}"/></svg>
                <span class="font-body text-white text-sm font-bold">{{ $pt['t'] }}</span>
            </span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Finishing Equipment Advice
        </a>
    </div>
</section>

{{-- WHERE IT FITS (4 cards) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where It Fits</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Useful where <span style="color:#148af4;">presentation still matters every day</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach([
                ['title' => 'Care homes and nursing homes',       'copy' => 'For resident clothing, bedding, towels, uniforms and everyday items where a cleaner finish supports daily standards.'],
                ['title' => 'Hospitality sites',                  'copy' => 'For guest garments, uniforms, linen touch-ups and presentation-led finishing work around daily operations.'],
                ['title' => 'Smaller laundry rooms',              'copy' => 'For sites that need more than domestic ironing equipment without moving straight into a full hot cylinder ironer setup.'],
                ['title' => 'Garment and wet cleaning workflows', 'copy' => 'For specialist textile care where washing, drying and finishing need to work together.'],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl p-7 flex flex-col h-full">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-base leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- RELATED EQUIPMENT (4 cards) --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Related Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Connect finishing with the rest of the laundry room
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach([
                ['title' => 'Commercial Ironers',        'copy' => 'For higher-output flatwork finishing, linen flow, working width decisions and commercial ironing support.', 'cta' => 'View Ironers',      'route' => route('equipment.category', 'ironers')],
                ['title' => 'Wet Cleaning',              'copy' => 'For specialist textile care where washing, drying and finishing need to work together.',                  'cta' => 'View Wet Cleaning', 'route' => route('equipment.category', 'wet-cleaning')],
                ['title' => 'Commercial Dryers',         'copy' => 'For drying performance before finishing, garment handling or daily linen presentation.',                 'cta' => 'View Dryers',       'route' => route('equipment.category', 'tumble-dryers')],
                ['title' => 'Accessories & Consumables', 'copy' => 'For supporting items that help keep laundry equipment and workflows running.',                           'cta' => 'View Accessories',  'route' => route('equipment.category', 'accessories')],
            ] as $card)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 shadow-card flex flex-col h-full">
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-3">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6 flex-1">{{ $card['copy'] }}</p>
                <a href="{{ $card['route'] }}" class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline mt-auto">
                    {{ $card['cta'] }}
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Finishing Equipment FAQs',
    'heading' => 'Clear answers before the <span style="color:#148af4;">finishing decision</span>',
    'faqs' => [
        ['question' => 'Is finishing equipment the same as a commercial ironer?', 'answer' => 'No. Commercial ironers are usually used for flatwork finishing and higher-output linen flow. Finishing equipment includes ironing tables, steam irons, presses, form finishers and garment-finishing support.'],
        ['question' => 'Do care homes and nursing homes need finishing equipment?', 'answer' => 'Some do. Where resident clothing, bedding, towels, uniforms or smaller items need a cleaner daily finish, finishing equipment can be a practical option.'],
        ['question' => 'Can finishing equipment support hospitality sites?', 'answer' => 'Yes. Hospitality sites may use finishing equipment for uniforms, guest garments, linen touch-ups and presentation-led finishing work.'],
        ['question' => 'Do I need ironing tables or a full ironer?', 'answer' => 'That depends on the linen type, volume, room layout, staff routine and finish required. Irish Laundry Systems can advise whether finishing equipment, a commercial ironer or another equipment option is the better fit.'],
        ['question' => 'Can Irish Laundry Systems supply product details?', 'answer' => 'Yes. Irish Laundry Systems can provide product guidance and specification details for selected Electrolux Professional finishing equipment where available.'],
        ['question' => 'Can this connect with wet cleaning?', 'answer' => 'Yes. Finishing equipment can support garment and textile care workflows where wet cleaning, drying and finishing need to work together.'],
    ],
])

{{-- PRODUCT DETAILS --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Product Details</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Need specifications for a finishing equipment option?
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with the type of finishing work your laundry room needs to handle. Irish Laundry Systems can then provide product details, model guidance or official Electrolux Professional resources where available.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            @foreach([
                ['title' => 'Product specifications', 'copy' => 'Ask for product details on ironing tables, steam support, presses, form finishers or specialist finishing equipment.', 'cta' => 'Request Product Details'],
                ['title' => 'Need help choosing?',     'copy' => 'Tell Irish Laundry Systems what the site needs to finish each day. The team can help confirm whether finishing equipment, a commercial ironer or another laundry option is the better fit.', 'cta' => 'Request Equipment Advice'],
            ] as $block)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 shadow-card flex flex-col h-full">
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-3">{{ $block['title'] }}</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6 flex-1">{{ $block['copy'] }}</p>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 w-fit">
                    {{ $block['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Need advice on commercial finishing equipment?
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Tell Irish Laundry Systems what your laundry room needs to finish each day. The team can help connect ironing tables, steam support, presses, form finishers or specialist finishing equipment with practical advice, installation and support.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Request Finishing Equipment Advice
            </a>
            <a href="{{ route('equipment.category', 'ironers') }}"
               class="inline-flex items-center justify-center gap-2 border-2 border-white/60 hover:border-white text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                View Commercial Ironers
            </a>
        </div>
    </div>
</section>

@endsection
