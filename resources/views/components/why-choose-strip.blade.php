{{-- "Why teams choose ILS" strip — image left, content right --}}
<section class="relative overflow-hidden" style="background-color:#011E41; min-height:320px;">

    {{-- LEFT: image pinned to 40% --}}
    <div class="absolute inset-y-0 left-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/strip2.jpeg" alt="ILS engineer with equipment"
             class="w-full h-full object-cover" style="object-position: center 15%;">
        <div class="absolute inset-0" style="background: linear-gradient(to left, #011E41 0%, rgba(1,30,65,0.4) 40%, transparent 100%);"></div>
    </div>

    {{-- RIGHT: content — 50% width --}}
    <div class="relative z-10 flex flex-col justify-center px-10 lg:px-16 py-12 lg:py-14" style="margin-left:50%; width:50%; box-sizing:border-box;">

        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-white text-3xl lg:text-5xl block">Keep operations running</span>
            <span class="text-3xl lg:text-5xl block" style="color:#22d3ee;">without capital pressure</span>
        </h2>

        <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed mb-6">
            Rental supports replacement, expansion and operational<br>continuity — no upfront investment required.
        </p>

        <div class="flex items-center flex-nowrap gap-0 mb-7">
            @foreach([
                ['icon' => 'ativo-2',  'label' => 'No upfront investment'],
                ['icon' => 'ativo-1',  'label' => 'Installed and supported'],
                ['icon' => 'ativo-13', 'label' => 'Flexible terms'],
            ] as $i => $feat)
            @if($i > 0)
                <div class="w-px h-7 bg-white/20 mx-4 flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-2">
                <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg"
                     class="w-5 h-5 flex-shrink-0 opacity-80" alt="">
                <span class="font-body text-white text-xs font-semibold whitespace-nowrap">{{ $feat['label'] }}</span>
            </div>
            @endforeach
        </div>

        <div class="w-full flex justify-start">
            <a href="{{ route('rental') }}"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                Explore Equipment Rental
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>

</section>
