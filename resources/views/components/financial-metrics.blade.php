{{--
    Aligned financial-metrics grid (used by all sector pages).
    Fixed-height slots (prefix · stat · label) guarantee the dividers and body text
    line up across all five columns regardless of prefix presence or line counts.

    Expects: $items = [
        ['icon'=>'7','prefix'=>'Up to','stat'=>'-65%','size'=>'text-4xl','label'=>'…','body'=>'…'],
        …
    ]
    'prefix' may be '' (the slot is still reserved). 'size' is the stat font size (text-4xl for
    numbers, text-2xl for word stats).
--}}
<div class="grid grid-cols-2 lg:grid-cols-5 gap-x-8 gap-y-10">
    @foreach($items as $it)
    <div class="flex flex-col {{ $loop->last ? 'col-span-2 lg:col-span-1' : 'col-span-1' }}">
        <div class="flex items-start gap-3">
            <img src="/images/icons/{{ $it['icon'] }}.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
            <div class="flex flex-col flex-1 min-w-0">
                {{-- prefix slot (reserved height even when empty) --}}
                <div class="h-5 flex items-end">
                    @if(!empty($it['prefix']))<span class="font-body font-bold text-[#148af4] text-sm leading-none">{{ $it['prefix'] }}</span>@endif
                </div>
                {{-- stat slot (fixed height, bottom-aligned so numbers and word stats share a baseline) --}}
                <div class="h-[3.25rem] flex items-end">
                    <div class="font-heading font-bold text-[#148af4] {{ $it['size'] }} leading-none">{{ $it['stat'] }}</div>
                </div>
                {{-- label slot (reserved min-height for up to two lines) --}}
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug mt-2 min-h-[2.75rem]">{{ $it['label'] }}</h3>
            </div>
        </div>
        <div class="w-full h-px bg-[#148af4]/20 mt-3"></div>
        <p class="font-body text-gray-500 text-sm leading-relaxed mt-3">{{ $it['body'] }}</p>
    </div>
    @endforeach
</div>
