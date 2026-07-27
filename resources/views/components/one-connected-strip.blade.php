{{-- OnE Connected / Connected laundry intelligence strip.
     Universal across equipment pages — the only per-page value is the secondary CTA label. --}}
@php
    $ctaLabel = $ctaLabel ?? 'Ask About Connected Equipment';
@endphp
<section class="relative overflow-hidden" style="background-color:#011E41; min-height:300px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/pages/one-connected/oneconnectedstrip.png" alt="OnE Connected laundry dashboard"
             class="w-full h-full object-cover" style="object-position: right center;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.85) 18%, rgba(1,30,65,0.35) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">OnE Connected</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-4">
            Take your laundry operation<br>to <span style="color:#148af4;">the next level</span>
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-6">
            OnE Connected is the digital ecosystem for compatible Electrolux Professional equipment, giving laundry teams clearer visibility over performance, consumption and service needs in one place.
        </p>
        <div class="flex items-center flex-wrap gap-x-4 gap-y-2 mb-7">
            @foreach([
                ['icon' => '211', 'label' => 'Increase<br>productivity', 'sc' => '1.05'],
                ['icon' => '210', 'label' => 'Improve<br>efficiency', 'sc' => '0.93'],
                ['icon' => '212', 'label' => 'Increase<br>sustainability', 'sc' => '1.00'],
            ] as $feat)
            <div class="flex items-center gap-2">
                <img src="/images/icons/{{ $feat['icon'] }}.png" style="width:3.5rem;height:3.5rem;flex-shrink:0;filter:brightness(0) invert(1);transform:scale({{ $feat['sc'] ?? '1' }});" alt="">
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $feat['label'] !!}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-wrap gap-3">
            <a href="{{ route('equipment.category', 'one-connected') }}"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                Explore OnE Connected
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 border border-white/60 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors tracking-wide">
                {{ $ctaLabel }}
            </a>
        </div>
    </div>
</section>
