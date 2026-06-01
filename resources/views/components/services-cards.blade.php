@props([
    'eyebrow'          => null,
    'headingLead'      => '',
    'headingHighlight' => '',
    'headingTrail'     => '.',
    'highlightClass'   => 'text-orange',
    'intro'            => '',
    'introClass'       => '',
    'align'            => 'left',
    'headingNowrap'    => true,
    'cards'            => [],
])

{{-- Shared 4-card "Choose the right support" section.
     Used on home + services overview. Card shell is unified;
     heading layout, bullets and per-card content are passed via props. --}}

<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">

        <div class="{{ $align === 'center' ? 'text-center mb-12 lg:mb-16' : 'mb-10 lg:mb-12' }}">
            @if ($eyebrow)
                <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-4">{{ $eyebrow }}</p>
            @endif
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-4 {{ $headingNowrap ? 'lg:whitespace-nowrap' : 'text-balance' }}">
                {{ $headingLead }}<span class="{{ $highlightClass }}">{{ $headingHighlight }}</span>{{ $headingTrail }}
            </h2>
            <p class="font-body {{ $align === 'center' ? 'text-gray-500 max-w-3xl mx-auto' : 'text-gray-600 max-w-3xl' }} text-lg leading-relaxed {{ $introClass }}">{{ $intro }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-5">
            @foreach ($cards as $card)
            <a href="{{ $card['href'] }}"
               class="group relative overflow-hidden h-[400px] lg:h-[440px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="{{ $card['img'] }}" alt="{{ $card['alt'] ?? $card['title'] }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] ?? 'center' }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.1) 60%, transparent 80%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.96);"></div>

                <div class="absolute inset-0 p-6 lg:p-7 flex flex-col justify-end">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white text-sm leading-relaxed mb-4">{{ $card['body'] }}</p>
                        @if (!empty($card['bullets']))
                        <ul class="space-y-2 mb-4">
                            @foreach ($card['bullets'] as $bullet)
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>{{ $bullet }}
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <h3 class="font-heading font-bold text-white text-2xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-4 text-balance">{!! $card['title'] !!}</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center gap-2 bg-white/15 group-hover:bg-orange border border-white/30 group-hover:border-orange text-white font-body font-bold text-xs uppercase tracking-wide px-4 py-2.5 rounded-full transition-colors duration-200">
                            {{ $card['cta'] }}
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
