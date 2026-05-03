<section class="relative overflow-hidden" style="background-color:#148af4; min-height:180px;">

    {{-- Background image pinned to right half --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:60%; background-color:#148af4;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover object-center">
        {{-- Fade left edge into blue --}}
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.55) 35%, rgba(20,138,244,0.1) 70%, transparent 100%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 px-10 lg:px-20 py-10 lg:py-12 max-w-2xl">

        {{-- Two-tone heading --}}
        <h2 class="font-heading font-bold leading-tight mb-3">
            <span class="text-white text-2xl lg:text-3xl block">Designed around your</span>
            <span class="text-2xl lg:text-3xl block" style="color:#93c5fd;">operation and budget</span>
        </h2>

        {{-- Description --}}
        <p class="font-body text-white/80 text-sm leading-relaxed mb-6 max-w-md">
            We match equipment, service contracts and support to your site — based on throughput, space and day-to-day operational need.
        </p>

        {{-- 3 horizontal features --}}
        <div class="flex items-center flex-wrap gap-0 mb-7">
            @foreach([
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z"/>', 'label' => 'Equipment selection'],
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766m0 0 3.024 3.024c.37-.14.716-.363 1.002-.67L21 11.25a2.25 2.25 0 0 0-2.25-2.25H15M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>', 'label' => 'Service contracts'],
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>', 'label' => 'Nationwide response'],
            ] as $i => $feat)
            @if($i > 0)
                <div class="w-px h-7 bg-white/30 mx-5 hidden sm:block flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-2 py-1">
                <svg class="w-4 h-4 flex-shrink-0 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    {!! $feat['icon'] !!}
                </svg>
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
