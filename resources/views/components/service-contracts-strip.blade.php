{{-- Service Contracts, Support & Aftercare strip — content left, image right --}}
<section class="relative overflow-hidden" style="background-color:#148af4;">

    {{-- RIGHT: image pinned to 40% --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/healthcare/repairs-callouts.jpg" alt="ILS service and parts support"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>

    {{-- LEFT: content — 60% width --}}
    <div class="relative z-10 flex flex-col justify-center px-10 lg:px-16 py-8 lg:py-10" style="max-width:60%;">

        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-2">After Installation</p>

        <h2 class="font-heading font-bold leading-tight mb-3">
            <span class="text-white text-2xl lg:text-3xl block">Service Contracts and Support &amp; Aftercare</span>
            <span class="text-2xl lg:text-3xl block" style="color:#011E41;">help protect the outcome</span>
        </h2>

        <p class="font-body text-white/80 text-sm lg:text-base leading-relaxed mb-5">
            Planned maintenance, service history and aftercare help protect the savings, hygiene control and downtime-risk reduction built into the equipment decision.
        </p>

        <div class="flex items-center flex-nowrap gap-0 mb-5">
            @foreach([
                ['icon' => 'ativo-7', 'label' => 'Planned maintenance'],
                ['icon' => 'ativo-8', 'label' => 'Service history'],
                ['icon' => 'ativo-9', 'label' => 'Parts access where needed'],
                ['icon' => 'ativo-4', 'label' => 'Practical aftercare'],
            ] as $i => $feat)
            @if($i > 0)
                <div class="w-px h-8 bg-white/20 mx-4 flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-2">
                <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg"
                     style="width:1.8rem;height:1.8rem;flex-shrink:0;" alt="">
                <span class="font-body text-white text-xs font-semibold leading-snug">{{ $feat['label'] }}</span>
            </div>
            @endforeach
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="{{ route('service-contracts') }}"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-xs px-5 py-2.5 rounded-lg hover:bg-white/90 transition-colors tracking-wide w-fit">
                View Preventive Maintenance Contracts
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
            <a href="{{ route('service-contracts') }}"
               class="inline-flex items-center gap-2 border border-white/40 text-white font-heading font-bold text-xs px-5 py-2.5 rounded-lg hover:bg-white/10 transition-colors tracking-wide w-fit">
                Explore Support &amp; Aftercare
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>

</section>
