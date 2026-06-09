@props([
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
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">

    {{-- Background image pinned to right 60% --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover"
             style="object-position: center 30%;">
        {{-- Fade left edge into blue --}}
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>

    {{-- Content — 60% width matching strip proportion --}}
    <div class="relative z-10 px-10 lg:px-16 py-16 lg:py-24" style="width:100%; max-width:60%;">

        {{-- Heading --}}
        <h2 class="font-heading font-bold leading-tight text-balance mb-4 text-4xl lg:text-5xl text-white">
            {!! $heading !!}
        </h2>

        {{-- Description --}}
        <p class="font-body text-white text-base leading-relaxed mb-6">
            {!! $body !!}
        </p>

        @if($miniPoints)
        {{-- Mini points --}}
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach($miniPoints as $i => $pt)
            @if($i > 0)<span class="text-white/40">|</span>@endif
            <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
            @endforeach
        </div>
        @else
        {{-- 3 horizontal features --}}
        <div class="flex items-center flex-nowrap gap-0 mb-7">
            @foreach($features as $i => $feat)
            @if($i > 0)
                <div class="w-px h-10 bg-white/30 mx-5 hidden sm:block flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-3">
                <img src="{{ $feat['img'] ?? '/images/icons/brand-white/'.$feat['icon'].'.svg' }}"
                     style="width:{{ isset($feat['img']) ? '3.5rem' : '2.4rem' }};height:{{ isset($feat['img']) ? '3.5rem' : '2.4rem' }};flex-shrink:0;{{ isset($feat['img']) ? 'filter:brightness(0) invert(1);' : '' }}" alt="">
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
