{{--
    Financial-metrics card grid (used by all sector pages + barrier-washers).
    Card layout per item (matches the approved metric-card mock):
      • white card: rounded-2xl, light border, soft shadow, p-6
      • header row: icon LEFT, vertically centred on the prefix+stat block
      • navy label tucked UNDER the stat (indented past the icon)
      • short accent divider, then gray body text

    Expects: $items = [
        ['icon'=>'7','prefix'=>'Up to','stat'=>'-65%','size'=>'text-4xl','label'=>'…','body'=>'…'],
        …
    ]
    'prefix' may be ''. 'size' => text-4xl marks a numeric stat (rendered larger),
    text-2xl marks a word stat. 'stat' may contain <br> for a stacked word stat.
--}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-x-8 gap-y-10">
    @foreach($items as $it)
    @php $isWord = ($it['size'] ?? 'text-4xl') === 'text-2xl'; @endphp
    <div class="flex flex-col {{ $loop->last ? 'sm:col-span-2 lg:col-span-1' : '' }}">

        {{-- header: icon centred on the prefix+stat block; fixed lg height keeps dividers aligned across the row --}}
        <div class="lg:min-h-[7rem]">
            <div class="flex items-center gap-3">
                <img src="/images/icons/{{ $it['icon'] }}.png" alt="" class="w-16 h-16 xl:w-20 xl:h-20 object-contain flex-shrink-0">
                <div class="flex flex-col min-w-0">
                    @if(!empty($it['prefix']))<span class="font-body font-bold text-navy text-sm leading-none mb-1">{{ $it['prefix'] }}</span>@endif
                    <div class="font-heading font-bold text-[#148af4] {{ $isWord ? 'text-2xl xl:text-[28px]' : 'text-4xl xl:text-5xl' }} leading-none tracking-tight">{!! $it['stat'] !!}</div>
                </div>
            </div>

            {{-- label: under the stat, indented past the icon --}}
            <h3 class="font-heading font-bold text-navy text-sm leading-snug mt-1.5 pl-[4.75rem] xl:pl-[5.75rem]">{{ $it['label'] }}</h3>
        </div>

        @if(!empty($it['body']))
        <p class="font-body text-gray-500 text-sm leading-relaxed mt-3">{{ $it['body'] }}</p>
        @endif
    </div>
    @endforeach
</div>
