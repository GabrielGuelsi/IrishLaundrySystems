{{-- "Why teams choose Irish Laundry Systems" strip --}}
<section class="relative overflow-hidden" style="min-height:200px; background-color:#011E41;">

    {{-- Background image pinned to right half --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:50%;">
        <img src="/images/about/about-engineers.jpg" alt="ILS Service Team"
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.7) 35%, rgba(1,30,65,0.15) 75%, transparent 100%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 px-10 lg:px-20 py-10 lg:py-12 max-w-2xl">

        {{-- Heading --}}
        <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight mb-3">
            Why <span style="color:#148af4;">teams</span> choose Irish Laundry Systems
        </h2>

        {{-- Description --}}
        <p class="font-body text-white/70 text-sm leading-relaxed mb-7 max-w-lg">
            Engineering-led support, genuine parts supply, and same-day response — built around keeping your operation running.
        </p>

        {{-- 3 horizontal features --}}
        <div class="flex items-center gap-0 mb-8 flex-wrap">
            @foreach([
                [
                    'label' => 'Engineering-led',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766m0 0 3.024 3.024c.37-.14.716-.363 1.002-.67L21 11.25a2.25 2.25 0 0 0-2.25-2.25H15M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>'
                ],
                [
                    'label' => 'Same-day response',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>'
                ],
                [
                    'label' => 'Electrolux partner',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/>'
                ],
            ] as $i => $feat)
            @if($i > 0)
            <div class="w-px h-8 bg-white/20 mx-6 hidden sm:block flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-2.5 py-2">
                <svg class="w-5 h-5 flex-shrink-0" style="color:#148af4;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    {!! $feat['icon'] !!}
                </svg>
                <span class="font-body text-white text-sm font-semibold whitespace-nowrap">{{ $feat['label'] }}</span>
            </div>
            @endforeach
        </div>

        {{-- CTA button --}}
        <a href="{{ route('service-contracts') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Explore Service Contracts
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
            </svg>
        </a>

    </div>

</section>
