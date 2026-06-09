{{--
    Aligned financial-metrics grid (used by all sector pages).
    Layout per item:
      • optional "Up to" prefix sits tight directly above the figure
      • icon is vertically centred on the figure (the number, or the 2-line word stat)
      • label sits tight directly below, aligned under the figure
    Fixed slot heights keep the icons, labels and dividers aligned across all 5 columns.

    Expects: $items = [
        ['icon'=>'7','prefix'=>'Up to','stat'=>'-65%','size'=>'text-4xl','label'=>'…','body'=>'…'],
        …
    ]
    'prefix' may be '' (slot still reserved). 'size' is the stat font size (text-4xl for
    numbers, text-2xl for word stats). 'stat' may contain <br> (rendered as HTML) to force
    a two-line word stat.
--}}
<div class="grid grid-cols-2 lg:grid-cols-5 gap-x-8 gap-y-8">
    @foreach($items as $it)
    <div class="flex flex-col {{ $loop->last ? 'col-span-2 lg:col-span-1' : 'col-span-1' }}">

        {{-- prefix slot: reserved height, indented to sit directly above the figure --}}
        <div class="h-4 lg:pl-[3.75rem] flex items-end">
            @if(!empty($it['prefix']))<span class="font-body font-bold text-[#148af4] text-sm leading-none">{{ $it['prefix'] }}</span>@endif
        </div>

        {{-- figure: icon vertically centred with the stat (number or 2-line word) --}}
        <div class="flex items-center gap-2 sm:gap-3 min-h-[3rem] mt-0.5">
            <img src="/images/icons/{{ $it['icon'] }}.png" alt="" class="w-10 h-10 lg:w-12 lg:h-12 object-contain flex-shrink-0">
            <div class="font-heading font-bold text-[#148af4] {{ $it['size'] }} leading-none">{!! $it['stat'] !!}</div>
        </div>

        {{-- label: tight under the figure, indented to align under the stat --}}
        {{-- short labels stay indented "in the middle" (under the figure); long ones go full-width so they fit on one line --}}
        <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug mt-1.5 {{ strlen($it['label']) <= 24 ? 'lg:pl-[3.75rem]' : '' }}">{{ $it['label'] }}</h3>

        <div class="w-full h-px bg-[#148af4]/20 mt-2"></div>
        @if(!empty($it['body']))
        <p class="font-body text-gray-500 text-sm leading-relaxed mt-1.5 text-balance">{{ $it['body'] }}</p>
        @endif
    </div>
    @endforeach
</div>
