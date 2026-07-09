@props([
    'eyebrow'  => null,
    'heading'  => 'Designed around your <span style="color:#011E41;">site</span>, <span style="color:#011E41;">workflow</span> and&nbsp;capacity',
    'body'     => 'We help define the right equipment, layout and service route around your space, volume, staff flow and day-to-day&nbsp;laundry&nbsp;demand.',
    'miniPoints' => null,
    'features' => [
        ['icon' => 'ativo-20', 'label' => 'Site<br>layout'],
        ['icon' => 'ativo-10', 'label' => 'Equipment<br>fit'],
        ['icon' => 'ativo-21', 'label' => 'Capacity<br>planning'],
    ],
    'ctaText'  => 'Talk to an Engineer',
])
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:280px;">

    {{-- Background image pinned to right 60% --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover"
             style="object-position: center 30%;">
        {{-- Fade left edge into blue --}}
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.92) 10%, rgba(20,138,244,0.72) 20%, rgba(20,138,244,0.45) 32%, rgba(20,138,244,0.22) 44%, rgba(20,138,244,0.08) 55%, transparent 68%);"></div>
    </div>

    {{-- Content — 60% width matching strip proportion --}}
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[60%]" style="width:100%;">

        @if($eyebrow)
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">{{ $eyebrow }}</p>
        @endif

        {{-- Heading --}}
        <h2 class="font-heading font-bold leading-tight text-balance mb-4 text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white">
            {!! $heading !!}
        </h2>

        {{-- Description --}}
        <p class="font-body text-white text-base leading-relaxed mb-6">
            {!! $body !!}
        </p>

        @if($miniPoints)
        @php $miniHasIcons = is_array($miniPoints[0] ?? null); @endphp
        {{-- Mini points --}}
        <div class="flex items-center {{ $miniHasIcons ? 'flex-wrap lg:flex-nowrap gap-x-4' : 'flex-wrap gap-x-5' }} gap-y-2 mb-7">
            @foreach($miniPoints as $i => $pt)
            @if(is_array($pt))
            <span class="flex items-center gap-2 flex-shrink-0">
                <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-auto object-contain">
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $pt['label'] !!}</span>
            </span>
            @else
            <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
            @endif
            @endforeach
        </div>
        @else
        {{-- 3 horizontal features --}}
        <div class="flex items-center flex-wrap lg:flex-nowrap gap-x-5 gap-y-3 lg:gap-0 mb-7">
            @foreach($features as $i => $feat)
            @if($i > 0)
            @endif
            <div class="flex items-center gap-5">
                <img src="{{ $feat['img'] ?? '/images/icons/brand-white/'.$feat['icon'].'.svg' }}"
                     style="width:3.5rem;height:3.5rem;flex-shrink:0;{{ isset($feat['img']) ? 'filter:brightness(0) invert(1);' : '' }}" alt="">
                <span class="font-body text-white text-sm font-bold leading-snug">{!! $feat['label'] !!}</span>
            </div>
            @endforeach
        </div>
        @endif

        {{-- CTA --}}
        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            {{ $ctaText }}
        </a>

    </div>

</section>
