<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">

    {{-- Background image pinned to right 60% --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover"
             style="object-position: center 30%;">
        {{-- Fade left edge into blue --}}
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>

    {{-- Content — 60% width matching strip proportion --}}
    <div class="relative z-10 px-10 lg:px-16 py-10 lg:py-14" style="width:100%; max-width:60%;">

        {{-- Two-tone heading --}}
        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-white text-3xl lg:text-5xl block">Designed around your</span>
            <span class="text-3xl lg:text-5xl block" style="color:#011E41;">site, workflow and capacity</span>
        </h2>

        {{-- Description --}}
        <p class="font-body text-white text-base lg:text-lg leading-relaxed mb-6">
            We define layout, equipment fit and workflow based on your space, volume and day-to-day operational use.
        </p>

        {{-- 3 horizontal features --}}
        <div class="flex items-center flex-nowrap gap-0 mb-7">
            @foreach([
                ['icon' => 'ativo-20', 'label' => 'Workflow & layout'],
                ['icon' => 'ativo-9',  'label' => 'Equipment selection'],
                ['icon' => 'ativo-10', 'label' => 'Capacity planning'],
            ] as $i => $feat)
            @if($i > 0)
                <div class="w-px h-7 bg-white/30 mx-4 hidden sm:block flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-2 py-1">
                <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg"
                     class="w-5 h-5 flex-shrink-0 opacity-80" alt="">
                <span class="font-body text-white text-xs font-semibold whitespace-nowrap">{{ $feat['label'] }}</span>
            </div>
            @endforeach
        </div>

        {{-- CTA --}}
        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Talk to an Engineer
        </a>

    </div>

</section>
