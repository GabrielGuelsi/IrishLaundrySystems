{{-- Service Contracts, Parts & Aftercare strip — content left, image right --}}
<section class="relative overflow-hidden" style="background-color:#011E41; min-height:320px;">

    {{-- RIGHT: image pinned to 40% --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/healthcare/repairs-callouts.jpg" alt="ILS service and parts support"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.5) 35%, transparent 100%);"></div>
    </div>

    {{-- LEFT: content — 60% width --}}
    <div class="relative z-10 flex flex-col justify-center px-10 lg:px-16 py-12 lg:py-14" style="max-width:60%;">

        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-white text-3xl lg:text-5xl block">Service Contracts,</span>
            <span class="text-3xl lg:text-5xl block" style="color:#22d3ee;">Parts &amp; Aftercare</span>
        </h2>

        <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed mb-6">
            Planned support, genuine parts supply, and practical aftercare<br>to keep equipment, service and aftercare connected.
        </p>

        <div class="flex items-center flex-nowrap gap-0 mb-7">
            @foreach([
                ['icon' => 'ativo-7', 'label' => 'Planned maintenance'],
                ['icon' => 'ativo-8', 'label' => 'Parts continuity'],
                ['icon' => 'ativo-4', 'label' => 'Practical aftercare'],
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

        <a href="{{ route('service-contracts') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide w-fit">
            Explore Support Options
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
            </svg>
        </a>

    </div>

</section>
