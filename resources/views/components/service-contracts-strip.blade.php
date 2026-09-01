@props([
    'eyebrow'      => null,
    'headingLine1' => 'Keep maintenance, service history and',
    'headingLine2' => 'next steps connected',
    'accentFirst'  => false,
    'body'         => 'Planned maintenance, service history, parts routes where required and practical aftercare help keep equipment decisions clearer after installation, rental, repair or inspection.',
    'image'        => '/images/shared/repairs-callouts.jpg',
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
    'textMaxW'     => 'lg:max-w-[54%]',
    'headingSize'  => 'text-2xl sm:text-4xl lg:text-5xl',
])
{{-- Service Contracts, Support & Aftercare strip — content left, image right --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:280px;">

    {{-- RIGHT: image --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:46%;">
        <img src="{{ $image }}" alt="ILS service and parts support"
             class="w-full h-full object-cover" style="object-position: {{ $imgPosition ?? 'center 30%' }};">
        {{-- Smoothstep fade — zero slope at the image edge so the transition has no visible seam --}}
        <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(20,138,244,1) 0%, rgba(20,138,244,0.989) 2.81%, rgba(20,138,244,0.957) 5.63%, rgba(20,138,244,0.908) 8.44%, rgba(20,138,244,0.844) 11.25%, rgba(20,138,244,0.768) 14.06%, rgba(20,138,244,0.684) 16.88%, rgba(20,138,244,0.593) 19.69%, rgba(20,138,244,0.5) 22.5%, rgba(20,138,244,0.407) 25.31%, rgba(20,138,244,0.316) 28.13%, rgba(20,138,244,0.232) 30.94%, rgba(20,138,244,0.156) 33.75%, rgba(20,138,244,0.092) 36.56%, rgba(20,138,244,0.043) 39.38%, rgba(20,138,244,0.011) 42.19%, rgba(20,138,244,0) 45%);"></div>
    </div>

    {{-- LEFT: content — kept clear of the image strip --}}
    <div class="relative z-10 flex flex-col justify-center px-6 sm:px-10 lg:px-16 py-10 lg:py-12 max-w-full {{ $textMaxW }}">

        @if($eyebrow)
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">{{ $eyebrow }}</p>
        @endif

        <h2 class="font-heading font-bold {{ $headingSize }} leading-tight text-balance mb-4">
            <span style="color:{{ $accentFirst ? '#011E41' : '#ffffff' }};">{!! $headingLine1 !!}</span>
            <br class="hidden lg:block"><span style="color:{{ $accentFirst ? '#ffffff' : '#011E41' }};">{!! $headingLine2 !!}</span>
        </h2>

        <p class="font-body text-white/80 text-base leading-relaxed mb-6 max-w-2xl">
            {!! $body !!}
        </p>

        @if($miniPoints)
        @php $miniHasIcons = is_array($miniPoints[0] ?? null); @endphp
        <div class="flex items-center flex-wrap 2xl:flex-nowrap gap-y-2 {{ $miniHasIcons ? 'gap-x-4' : 'gap-x-5' }} mb-7">
            @foreach($miniPoints as $i => $pt)
            @if(is_array($pt))
            <span class="flex items-center gap-2 flex-shrink-0">
                <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-auto object-contain {{ $pt['iconClass'] ?? '' }}">
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $pt['label'] !!}</span>
            </span>
            @else
            <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
            @endif
            @endforeach
        </div>
        @else
        {{-- same icon size, label style and spacing as the miniPoints row above --}}
        <div class="flex items-center flex-wrap 2xl:flex-nowrap gap-x-4 gap-y-2 mb-7">
            @foreach($features as $feat)
            <div class="flex items-center gap-2 flex-shrink-0">
                {{-- fixed 3.5rem box keeps every label on the same left edge when the row wraps --}}
                <span class="flex-shrink-0 flex items-center justify-center" style="width:3.5rem;height:3.5rem;">
                    <img src="{{ $feat['img'] ?? '/images/icons/brand-white/'.$feat['icon'].'.svg' }}"
                         class="max-w-full max-h-full object-contain"
                         style="{{ isset($feat['img']) ? 'filter:brightness(0) invert(1);' : '' }}{{ $feat['iconStyle'] ?? '' }}" alt="">
                </span>
                <span class="font-body text-white text-sm font-bold leading-tight">{{ $feat['label'] }}</span>
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
