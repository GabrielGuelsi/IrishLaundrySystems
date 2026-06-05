@props([
    'eyebrow'      => null,
    'headingLine1' => 'Keep maintenance, service history and',
    'headingLine2' => 'next steps connected',
    'accentFirst'  => false,
    'body'         => 'Planned maintenance, service history, parts routes where required and practical aftercare help keep equipment decisions clearer after installation, rental, repair or inspection.',
    'image'        => '/images/healthcare/repairs-callouts.jpg',
    'miniPoints'   => null,
    'features'     => [
        ['icon' => 'ativo-7', 'label' => 'Planned maintenance'],
        ['icon' => 'ativo-8', 'label' => 'Service history'],
        ['icon' => 'ativo-4', 'label' => 'Practical aftercare'],
    ],
    'cta1Label'    => 'Explore Aftercare',
    'cta1Route'    => 'parts-aftercare',
    'cta2Label'    => null,
    'cta2Route'    => 'parts-aftercare',
])
{{-- Service Contracts, Support & Aftercare strip — content left, image right --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">

    {{-- RIGHT: image pinned to 40% --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="{{ $image }}" alt="ILS service and parts support"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>

    {{-- LEFT: content — 60% width --}}
    <div class="relative z-10 flex flex-col justify-center px-10 lg:px-16 py-12 lg:py-16" style="max-width:60%;">

        @if($eyebrow)
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">{{ $eyebrow }}</p>
        @endif

        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-3xl lg:text-5xl block" style="color:{{ $accentFirst ? '#011E41' : '#ffffff' }};">{!! $headingLine1 !!}</span>
            <span class="text-3xl lg:text-5xl block" style="color:{{ $accentFirst ? '#ffffff' : '#011E41' }};">{!! $headingLine2 !!}</span>
        </h2>

        <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed mb-6 max-w-xl">
            {{ $body }}
        </p>

        @if($miniPoints)
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach($miniPoints as $i => $pt)
            @if($i > 0)<span class="text-white/40">|</span>@endif
            <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
            @endforeach
        </div>
        @else
        <div class="flex items-center flex-nowrap gap-0 mb-7">
            @foreach($features as $i => $feat)
            @if($i > 0)
                <div class="w-px h-10 bg-white/20 mx-5 flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-3">
                <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg"
                     style="width:2.4rem;height:2.4rem;flex-shrink:0;" alt="">
                <span class="font-body text-white text-sm font-bold leading-snug">{{ $feat['label'] }}</span>
            </div>
            @endforeach
        </div>
        @endif

        <div class="flex flex-wrap gap-3">
            <a href="{{ route($cta1Route) }}"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide w-fit">
                {!! $cta1Label !!}
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
            @if($cta2Label)
            <a href="{{ route($cta2Route) }}"
               class="inline-flex items-center gap-2 border border-white/60 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors tracking-wide w-fit">
                {!! $cta2Label !!}
            </a>
            @endif
        </div>

    </div>

</section>
