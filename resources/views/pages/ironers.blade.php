@extends('layouts.app')

@section('pageTitle', 'Commercial Ironers, Roller Ironing & Finishing Equipment | Electrolux Professional | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial ironers, roller ironing advice and finishing equipment chosen around linen finish, output, room layout and long-term support. Irish Laundry Systems supplies, installs, rents and supports Electrolux Professional ironers across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col h-auto min-h-[480px] lg:h-[720px]" style="min-height:480px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial ironers and flatwork finishing"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial Ironers</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                    Choose commercial ironers around <span style="color:#148af4;">linen finish, output and support</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    When linen needs to move quickly and come back ready for use, the ironer has to fit the workload, the room and the team using it every day. Irish Laundry Systems connects commercial ironers, roller ironing advice, finishing equipment, installation, rental and long-term support into one clearer way forward.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Ironer Advice
                    </a>
                    <a href="#ironer-range"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Explore Ironer Options
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 4. INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Ironer Decisions</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Start with what the laundry room needs to finish each day
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Commercial ironing affects linen presentation, staff handling, room layout, running costs and how quickly clean laundry moves back into use. Some sites need high-output flatwork finishing. Others need roller ironing advice or practical finishing equipment for garments, uniforms and smaller daily items. Irish Laundry Systems brings those decisions together before money is spent on the wrong equipment.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Talk to the Equipment Team
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- 5. IRONING & FINISHING OPTIONS --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Ironing &amp; Finishing Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Find the <span style="color:#148af4;">right option</span> for ironed linen and finished garments
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with the type of finishing work the laundry room needs to handle, then connect the decision to room layout, working width, installation, rental and long-term support.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['title' => 'Hot Cylinder / Flatwork Ironers', 'copy' => 'For busy laundry rooms handling sheets, table linen and flatwork where finish, output and hygiene control matter every day.', 'cta' => 'Explore Flatwork Ironers', 'href' => '#ironer-range'],
                ['title' => 'Roller / Rotary Ironers',         'copy' => 'For teams searching for roller irons, rotary ironers or dryer ironers and needing a clearer way to compare flatwork options.', 'cta' => 'View Roller Ironing Advice', 'href' => '#ironer-range'],
                ['title' => 'Finishing Equipment',             'copy' => 'For ironing tables, steam irons, presses and hand-finishing support for garments, uniforms, resident clothing and smaller finishing jobs.', 'cta' => 'View Finishing Equipment', 'href' => route('equipment.category', 'finishing-equipment')],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl p-7 flex flex-col h-full">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">{{ $card['copy'] }}</p>
                <a href="{{ $card['href'] }}" class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm w-fit">
                    {{ $card['cta'] }}
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 6. OPERATIONAL PERFORMANCE --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Operational Performance</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Control <span style="color:#148af4;">energy, output and handling pressure</span> before the ironer is chosen
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                The right ironer setup can protect daily output, reduce unnecessary handling and make the room easier to work in. These decisions shape cost, workflow and staff pressure long after installation.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['prefix' => '', 'stat' => '20%',   'label' => 'gas energy saving', 'copy' => 'Electrolux Professional Ceramic Burner technology can reduce gas energy use on suitable gas-heated models.', 'badge' => 'Gas-heated models only'],
                ['prefix' => '', 'stat' => '+30%',  'label' => 'productivity',      'copy' => 'Dubixium supports stronger output by distributing heat evenly across the cylinder and reducing overheating pressure.', 'badge' => 'Dubixium'],
                ['prefix' => 'Up to', 'stat' => '600', 'label' => 'sheets daily',   'copy' => 'High-volume flatwork rooms need equipment chosen around repeated handling, finish quality and daily output.', 'badge' => 'Model and setup dependent'],
                ['prefix' => '', 'stat' => '',       'label' => 'Fewer manual steps', 'copy' => 'Feeding, folding and stacking options can reduce manual handling pressure and keep linen moving with fewer interruptions.', 'badge' => 'Feed / Fold / Stack'],
                ['prefix' => '', 'stat' => '',       'label' => 'Right configuration first', 'copy' => 'Front or rear delivery, working width, automation and heating choice all affect room flow, running cost and long-term value.', 'badge' => 'Configuration'],
            ] as $card)
            <div class="p-6 flex flex-col items-center text-center gap-3 col-span-1">
                <div class="flex items-center justify-center h-16">
                    @if($card['stat'])
                    <p class="font-heading font-bold leading-none">
                        @if($card['prefix'])<span class="font-body text-gray-400 text-xs font-semibold uppercase tracking-wide block mb-1">{{ $card['prefix'] }}</span>@endif
                        <span class="text-[#148af4] text-4xl sm:text-5xl">{{ $card['stat'] }}</span>
                    </p>
                    @else
                    <div class="w-10 h-1 rounded-full bg-[#148af4]"></div>
                    @endif
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">{{ $card['label'] }}</h3>
                <p class="font-body text-gray-500 text-xs leading-relaxed flex-1">{{ $card['copy'] }}</p>
                <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2.5 py-1 rounded-full">{{ $card['badge'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. ELECTROLUX PROFESSIONAL PROOF --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Technology that protects <span style="color:#148af4;">finish quality, hygiene and daily handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected Electrolux Professional technologies support moisture control, heat consistency, operator comfort and finishing flexibility when matched to the right ironer.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['icon' => '2',  'title' => 'DIAMMS / Bacteria-free linen', 'copy' => 'DIAMMS adjusts ironer speed around residual moisture, supporting bacteria-free linen through controlled thermal disinfection.', 'badge' => 'DIAMMS'],
                ['icon' => '31', 'title' => 'Dubixium',                     'copy' => 'Even heat distribution across the cylinder supports consistent results and helps reduce overheating pressure.', 'badge' => 'Dubixium'],
                ['icon' => '5',  'title' => 'ERGOCERT 4-star',              'copy' => 'Certified ergonomic design supports repeated operator handling and safer daily use.', 'badge' => 'ERGOCERT'],
                ['icon' => '16', 'title' => 'Feed Now / Feed Alone',        'copy' => 'Feeding support helps operators manage linen flow more easily and reduce handling pressure.', 'badge' => 'Feeding'],
                ['icon' => '34', 'title' => 'FoldFlex / Hygiene Guard',      'copy' => 'Advanced FFS options support customised folding and moisture-parameter control on advanced FFS configurations.', 'badge' => 'FoldFlex'],
            ] as $card)
            <div class="p-6 flex flex-col items-center text-center gap-3 col-span-1">
                <div class="flex items-center justify-center h-16">
                    <img src="/images/icons/{{ $card['icon'] }}.png" alt="" class="w-16 h-16 object-contain">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-xs leading-relaxed flex-1">{{ $card['copy'] }}</p>
                <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2.5 py-1 rounded-full">{{ $card['badge'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 8. IRONER LAYOUT --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 lg:mb-12 reveal reveal-left max-w-4xl">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Ironer Layout</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose front or rear delivery around <span style="color:#148af4;">the way linen moves</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                Front and rear delivery affect how staff feed, collect and move linen through the room. The right choice depends on space, workflow, operator handling and output pressure.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-10">

            {{-- Front delivery --}}
            <div class="rounded-2xl bg-white p-7 lg:p-8 flex flex-col h-full reveal reveal-left" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-[#148af4]/10">
                        <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75"/></svg>
                    </span>
                    <div>
                        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.18em] mb-1">Front Delivery</p>
                        <h3 class="font-heading font-bold text-navy text-2xl leading-snug">A strong fit when space is tighter</h3>
                    </div>
                </div>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                    Front delivery keeps linen returning to the front of the machine. It can work well where room depth is limited and the laundry room needs a more compact flatwork setup.
                </p>
                <div class="mt-auto divide-y divide-gray-100 border-t border-gray-100">
                    @foreach(['Space-conscious layout', 'Linen returns to the front', 'Good fit for selected OPL rooms'] as $pt)
                    <div class="flex items-center gap-3 py-3">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        <span class="font-body text-navy text-sm font-bold">{{ $pt }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Rear delivery --}}
            <div class="rounded-2xl bg-white p-7 lg:p-8 flex flex-col h-full reveal reveal-right" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-[#148af4]/10">
                        <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5"/></svg>
                    </span>
                    <div>
                        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.18em] mb-1">Rear Delivery</p>
                        <h3 class="font-heading font-bold text-navy text-2xl leading-snug">A strong fit for workflow and operator handling</h3>
                    </div>
                </div>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                    Rear delivery separates feeding and collection where the room allows it. This can support smoother workflow, better handling and stronger output planning on higher-demand sites.
                </p>
                <div class="mt-auto divide-y divide-gray-100 border-t border-gray-100">
                    @foreach(['Workflow separation', 'Operator handling support', 'Good fit where room layout allows'] as $pt)
                    <div class="flex items-center gap-3 py-3">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        <span class="font-body text-navy text-sm font-bold">{{ $pt }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
            Plan the Right Ironer Layout
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

{{-- 9. ROOM PLANNING STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 sm:py-16 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan the ironer around <span style="color:#011E41;">linen flow, utilities</span> and long-term use
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            Irish Laundry Systems reviews the room, linen type, available space, operator flow, gas/electric/steam suitability and support needs before recommending an ironer. The right choice should work for daily output, installation and the way the equipment will be used over time.
        </p>
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 mb-7">
            @foreach([
                ['t' => 'Room fit',                   'd' => 'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75'],
                ['t' => 'Linen process',              'd' => 'M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5'],
                ['t' => 'Heating choice',             'd' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z'],
                ['t' => 'Support after installation', 'd' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z'],
            ] as $pt)
            <span class="inline-flex items-center gap-2">
                <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $pt['d'] }}"/></svg>
                <span class="font-body text-white text-sm font-bold">{{ $pt['t'] }}</span>
            </span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Site Fit Advice
        </a>
    </div>
</section>

{{-- 10. COMMERCIAL IRONER RANGE (teasers + product finder) --}}
<section id="ironer-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Ironer Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare ironer options around <span style="color:#148af4;">working width, automation and room fit</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with the linen and output required, then narrow the decision by working width, delivery direction, heating choice and automation level.
            </p>
        </div>

        {{-- Teaser cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-12">
            @foreach([
                ['name' => 'Line 6000 Hot Cylinder Ironers', 'copy' => 'Main Electrolux Professional flatwork ironer option for sites needing linen finish, working width choice and long-term support.', 'tags' => ['DIAMMS', 'Dubixium', 'ERGOCERT', 'Front / Rear Delivery']],
                ['name' => 'Compact / OPL Ironers',          'copy' => 'For on-premise laundry rooms that need professional flatwork finishing without moving into a full industrial line.', 'tags' => ['Compact Fit', 'Flatwork Finish', 'OPL Option', 'Support Available']],
                ['name' => 'FFS / Feeder Folder Stacker Ironers', 'copy' => 'For higher-demand sites where feeding, folding and stacking automation can support output and operator handling.', 'tags' => ['FFS', 'FoldFlex', 'Hygiene Guard', 'High Output']],
                ['name' => 'Roller / Rotary Ironing Advice', 'copy' => 'For customers searching for roller irons, rotary ironers or dryer ironers and needing help matching those terms to the right commercial ironer.', 'tags' => ['Roller / Rotary', 'Flatwork Finish', 'Ironer Advice', 'Support Available']],
            ] as $teaser)
            <div class="bg-bg border border-gray-100 rounded-2xl p-7 flex flex-col h-full">
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $teaser['name'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $teaser['copy'] }}</p>
                <div class="flex flex-wrap gap-1.5 mb-6">
                    @foreach($teaser['tags'] as $tag)
                    <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $tag }}</span>
                    @endforeach
                </div>
                <div class="mt-auto flex flex-col sm:flex-row gap-2.5">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                        Request Advice
                    </a>
                    <a href="#ironer-range" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                        View Details
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Ironer families — one card/image per range, filterable by cylinder and automation (like the washers page) --}}
        @php
            $ironerFamilies = [
                ['name' => 'Line 6000 Flatwork Ironers', 'slug' => 'line-6000-flatwork', 'fit' => 'Large flatwork ironers for sheets and table linen, with an optional integrated feeder for higher output.', 'auto' => ['No automation','Feeding'], 'capLabel' => '2.5–3.3 m', 'models' => 'IB5725, IB5730, IB5733 (+ -F feeder)', 'roll' => 'Flatwork', 'img' => '/images/equipment/line6000-ironer.webp'],
                ['name' => 'Ø 480 mm Cylinder Ironers', 'slug' => 'cylinder-480mm', 'fit' => 'The main cylinder ironer range — front or rear delivery, from basic up to feeding, folding and stacking.', 'auto' => ['No automation','Length folding','Feeding','Folding & stacking'], 'capLabel' => 'Ø 480 mm', 'models' => 'IC648 21 / 25 / 32 series, IV648', 'roll' => 'Ø 480 mm', 'img' => '/images/equipment/line6000-ironer.webp'],
                ['name' => 'Ø 330 mm Cylinder Ironers', 'slug' => 'cylinder-330mm', 'fit' => 'Mid-size cylinder ironers for steady on-premise finishing.', 'auto' => ['No automation'], 'capLabel' => 'Ø 330 mm', 'models' => 'IC63316, IC63320', 'roll' => 'Ø 330 mm', 'img' => '/images/equipment/line6000-ironer.webp'],
                ['name' => 'Ø 230 mm Bed-type Ironers', 'slug' => 'bed-230mm', 'fit' => 'Compact bed-type ironers for smaller laundry rooms and lighter finishing volume.', 'auto' => ['No automation'], 'capLabel' => 'Ø 230 mm', 'models' => 'IB62310, IB62314, IB62316', 'roll' => 'Ø 230 mm', 'img' => '/images/equipment/line6000-ironer.webp'],
            ];
        @endphp

        @php
            // derive facet option arrays + counts from the family data (no new copy / catalogue change)
            $rollOpts = []; $autoOpts = [];
            foreach($ironerFamilies as $f) {
                $rollOpts[$f['roll']] = ($rollOpts[$f['roll']] ?? 0) + 1;
                foreach($f['auto'] as $a) { $autoOpts[$a] = ($autoOpts[$a] ?? 0) + 1; }
            }
            $rollOrder = ['Flatwork','Ø 480 mm','Ø 330 mm','Ø 230 mm'];
            $autoOrder = ['No automation','Feeding','Length folding','Folding & stacking'];
            $famJs = array_map(fn($f) => ['roll' => $f['roll'], 'auto' => $f['auto']], $ironerFamilies);
        @endphp

        <div x-data="{
                roll: [],
                auto: [],
                families: {{ \Illuminate\Support\Js::from($famJs) }},
                matches(f) {
                    const r = this.roll.length === 0 || this.roll.includes(f.roll);
                    const a = this.auto.length === 0 || (f.auto && f.auto.some(x => this.auto.includes(x)));
                    return r && a;
                },
                get count() { return this.families.filter(f => this.matches(f)).length; },
                clearAll() { this.roll = []; this.auto = []; },
             }"
             class="grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-8 lg:gap-10 items-start">

            {{-- LEFT: filter sidebar --}}
            <aside class="lg:sticky lg:top-28 self-start border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <span class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em]">Filter Products</span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Reset all</button>
                </div>

                {{-- Type --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Type</p>
                    <div class="space-y-2.5">
                        @foreach($rollOrder as $val)
                        @if(isset($rollOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="roll" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $rollOpts[$val] }}</span>
                        </label>
                        @endif
                        @endforeach
                    </div>
                </div>

                {{-- Automation --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Automation</p>
                    <div class="space-y-2.5">
                        @foreach($autoOrder as $val)
                        @if(isset($autoOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="auto" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $autoOpts[$val] }}</span>
                        </label>
                        @endif
                        @endforeach
                    </div>
                </div>

                {{-- Footer count + clear --}}
                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'range' : 'ranges'"></span></span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Clear filters</button>
                </div>
            </aside>

            {{-- RIGHT: product cards (floating images) --}}
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-6 gap-y-10">
                    @foreach($ironerFamilies as $f)
                    <div x-show="matches({{ \Illuminate\Support\Js::from(['roll'=>$f['roll'],'auto'=>$f['auto']]) }})" class="flex flex-col">
                        <a href="{{ route('equipment.product', ['category' => 'ironers', 'product' => $f['slug']]) }}" class="flex items-center justify-center h-44 lg:h-48 mb-5">
                            <img src="{{ $f['img'] }}" alt="{{ $f['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                        </a>
                        <p class="font-body text-xs mb-1.5"><span class="font-bold text-[#148af4]">{{ $f['roll'] }}</span><span class="text-gray-400"> &middot; {{ $f['capLabel'] }}</span></p>
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2"><a href="{{ route('equipment.product', ['category' => 'ironers', 'product' => $f['slug']]) }}" class="hover:text-[#148af4] transition-colors">{{ $f['name'] }}</a></h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $f['fit'] }}</p>
                        @if(!empty($f['auto']))
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            @foreach($f['auto'] as $a)
                            <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $a }}</span>
                            @endforeach
                        </div>
                        @endif
                        <div class="mt-auto flex flex-col gap-2.5">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                Request Advice on This Model
                            </a>
                            <a href="{{ route('equipment.product', ['category' => 'ironers', 'product' => $f['slug']]) }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                View Details
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Empty state --}}
                <div x-show="count === 0" x-cloak class="text-center py-16">
                    <p class="font-body text-gray-500 text-base">No ironers match that combination. <button @click="clearAll()" class="text-[#148af4] font-bold hover:underline">Clear filters</button> or <a href="{{ route('contact') }}" class="text-[#148af4] font-bold hover:underline">talk to our team</a>.</p>
                </div>

                {{-- View full range --}}
                <div class="text-center mt-12">
                    <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline">
                        View full product range
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <p class="font-body text-gray-500 text-sm leading-relaxed mt-8 max-w-3xl">
            Not sure which model fits? Irish Laundry Systems can assess working width, room setup, automation, rental, installation and support options before a final recommendation.
        </p>
    </div>
</section>

{{-- 11. FINISHING EQUIPMENT BAND --}}
<section id="finishing-equipment" class="py-12 lg:py-16 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Finishing Equipment</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Need ironing tables or hand-finishing support?
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed max-w-2xl">
                    Not every site needs a full hot cylinder ironer. Some care homes, nursing homes, hospitality sites and smaller laundry rooms need ironing tables, steam irons, presses or finishing equipment for linen, uniforms, garments and daily presentation.
                </p>
            </div>
            <div class="lg:col-span-5 flex flex-col sm:flex-row lg:justify-end gap-3">
                <a href="{{ route('equipment.category', 'finishing-equipment') }}"
                   class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    View Finishing Equipment
                </a>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Ask About Ironing Tables
                </a>
            </div>
        </div>
    </div>
</section>

{{-- 12. CONNECTED SUPPORT --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support that keeps <span style="color:#148af4;">ironer decisions moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Commercial ironer performance depends on more than the machine. Irish Laundry Systems connects equipment access, installation, planned maintenance, repairs and aftercare around the way the laundry room operates.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Lower upfront cost where suitable, with selected ironer equipment installed and supported under rental terms.',
                    'cta'   => 'Explore Rental',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned maintenance support to reduce surprise repair pressure and keep equipment condition visible.',
                    'cta'   => 'View Maintenance Support',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Repairs &amp; Call-outs',
                    'text'  => 'Service and breakdown support when ironer faults interrupt linen flow, staff routines or daily output.',
                    'cta'   => 'Request Support',
                    'route' => route('repairs'),
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Follow-up guidance, service history and parts access where needed after installation, rental, repair or inspection.',
                    'cta'   => 'View Support &amp; Aftercare',
                    'route' => route('parts-aftercare'),
                    'img'   => '/images/healthcare/services-overview-hero-portrait.jpg',
                    'pos'   => 'center center',
                ],
            ] as $card)
            <a href="{{ $card['route'] }}"
               class="group relative overflow-hidden rounded-2xl block"
               style="height:400px;">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.4) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.88);"></div>
                <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-4">
                        <p class="font-body text-white/80 text-sm leading-relaxed">{!! $card['text'] !!}</p>
                    </div>
                    <h3 class="font-heading font-bold text-white text-xl leading-tight mb-4 lg:whitespace-nowrap">{!! $card['title'] !!}</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center gap-2 bg-white/15 group-hover:bg-orange border border-white/30 group-hover:border-orange text-white font-body font-bold text-xs uppercase tracking-wide px-4 py-2.5 rounded-full transition-colors duration-200">
                            {!! $card['cta'] !!}
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- 13. RENTAL OPTIONS STRIP --}}
@include('components.why-choose-strip', [
    'headingLine1' => 'Access commercial ironers with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost where suitable</span>',
    'body'         => 'Rental can reduce upfront purchase pressure where the selected equipment range matches the room, linen flow, output needs and long-term plans. Irish Laundry Systems can advise whether rental, purchase or another support option is the better fit.',
    'miniPoints'   => ['Lower upfront cost where suitable', 'Installed and supported', 'Service and breakdown support included under rental terms'],
    'miniNowrap'   => true,
])

{{-- 14. AFTER INSTALLATION BAND --}}
<section class="py-12 lg:py-16 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Support after the ironer is installed
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5 max-w-2xl">
                    Once an ironer is installed, daily performance still depends on staff routines, planned maintenance, service access and how the laundry room uses the equipment. Irish Laundry Systems keeps support connected after handover.
                </p>
                <div class="flex items-center flex-wrap gap-x-5 gap-y-2">
                    @foreach(['Follow-up support', 'Planned servicing', 'Service history', 'Parts access where applicable'] as $i => $pt)
                    @if($i > 0)<span class="text-gray-300">|</span>@endif
                    <span class="font-body text-navy text-sm font-bold">{{ $pt }}</span>
                    @endforeach
                </div>
            </div>
            <div class="lg:col-span-5 flex lg:justify-end">
                <a href="{{ route('parts-aftercare') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-heading font-bold text-sm px-6 py-4 rounded-lg transition-colors tracking-wide">
                    View Support &amp; Aftercare
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- 15. CUSTOMER CONFIDENCE --}}
@include('components.testimonials', [
    'eyebrow'    => 'Customer Confidence',
    'heading'    => 'Support trusted by <span style="color:#148af4;">Irish laundry rooms</span>',
    'subheading' => 'For equipment that sits at the centre of daily linen flow, reliable advice, clear communication and support from people who know the equipment matter.',
])

{{-- 16. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 17. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Commercial Ironer FAQs',
    'heading' => 'Clear answers before the <span style="color:#148af4;">ironer decision</span>',
    'faqs' => [
        ['question' => 'What is the difference between a hot cylinder ironer and a roller ironer?', 'answer' => 'Many customers use terms like roller ironer, rotary ironer, dryer ironer and flatwork ironer when looking for commercial ironing equipment. Irish Laundry Systems can help confirm which option fits the linen type, room space, working width and output required.'],
        ['question' => 'When should a site consider a hot cylinder or flatwork ironer?', 'answer' => 'Hot cylinder and flatwork ironers are a strong fit where linen finish, output, hygiene control and consistent flatwork processing matter every day.'],
        ['question' => 'Does Irish Laundry Systems supply ironing tables and finishing equipment?', 'answer' => 'Yes. Finishing Equipment is a separate option for ironing tables, steam irons, presses and hand-finishing support. This can be useful where a full hot cylinder ironer is not the right first step.'],
        ['question' => 'What does front or rear delivery mean?', 'answer' => 'Front and rear delivery affect how linen is fed, collected and moved through the room. The right option depends on available space, operator handling, workflow and output needs.'],
        ['question' => 'Can DIAMMS support bacteria-free linen?', 'answer' => 'Yes. DIAMMS supports bacteria-free linen through controlled moisture management and automatic ironer speed adjustment where the correct Electrolux Professional process is used.'],
        ['question' => 'Is the 20% gas saving available on every ironer?', 'answer' => 'No. The 20% gas energy saving applies to suitable gas-heated models using Electrolux Professional Ceramic Burner technology.'],
        ['question' => 'Can commercial ironers be rented?', 'answer' => 'Where suitable, selected equipment may be available through rental. Irish Laundry Systems can advise whether rental, purchase or another option is the better fit for the site.'],
    ],
])

{{-- 18. RESOURCES — Download + Discover --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Resources</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Official product resources and next-step advice</h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Use official Electrolux Professional resources to review product detail, then speak with Irish Laundry Systems before choosing an ironer. Working width, room layout, linen type, heating choice, delivery direction and automation level should all be considered before a final decision is made.
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

            {{-- Download --}}
            <div class="bg-navy rounded-2xl p-6 lg:p-8 flex flex-col">
                <h4 class="font-heading font-bold text-white text-base mb-4">Download</h4>
                <ul class="space-y-4">
                    @foreach([
                        ['label' => 'Line 6000 Hot Cylinder Ironers',          'file' => ''],
                        ['label' => 'Line 6000 FFS Vibe Ironers',              'file' => ''],
                        ['label' => 'Finishing Equipment resources, where available', 'file' => ''],
                    ] as $pdf)
                    <li>
                        @if($pdf['file'])
                        <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-start gap-2 font-body text-sm text-white/80 hover:text-white transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!}
                        </a>
                        @else
                        <span class="flex items-start gap-2 font-body text-sm text-white/40">
                            <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!}
                        </span>
                        @endif
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contact') }}" class="mt-6 inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide w-fit">
                    Request Product Resources
                </a>
            </div>

            {{-- Discover / Need help choosing --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-6 lg:p-8 flex flex-col">
                <h4 class="font-heading font-bold text-navy text-base mb-4">Need help choosing?</h4>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">
                    Irish Laundry Systems can review the room, output needs and finishing option before recommending a commercial ironer or finishing equipment.
                </p>
                <a href="{{ route('request-assessment') }}" class="mt-auto inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-heading font-bold text-sm px-6 py-4 rounded-lg transition-colors tracking-wide w-fit">
                    Request Equipment Advice
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- 19. FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Need the <span style="color:#148af4;">right commercial ironer</span> for your site?
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Tell Irish Laundry Systems what your laundry room needs to finish each day. The team can help connect the right ironer, roller ironing advice or finishing equipment option with installation, rental and long-term support.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Request Ironer Advice
            </a>
            <a href="{{ route('equipment') }}"
               class="inline-flex items-center justify-center gap-2 border-2 border-white/60 hover:border-white text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                View Equipment Hub
            </a>
        </div>
    </div>
</section>

@endsection
