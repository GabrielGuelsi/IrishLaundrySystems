@extends('layouts.app')

@section('pageTitle', 'OnE Connected Ireland | Electrolux Professional Connected Laundry Intelligence')

@section('meta')
<meta name="description" content="OnE Connected connects compatible Electrolux Professional laundry equipment to performance data that can reduce costs and waste, improve production flow, monitor consumption and support service decisions. Talk to Irish Laundry Systems about compatibility, setup and support in Ireland.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col h-auto min-h-[480px] lg:h-[720px]" style="min-height:480px;">
    <img src="/images/healthcare/stripOneconnected.png" alt="OnE Connected laundry dashboard"
         class="absolute inset-0 w-full h-full object-cover" style="object-position: right center;">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.96) 0%, rgba(1,30,65,0.88) 40%, rgba(1,30,65,0.55) 68%, rgba(1,30,65,0.25) 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-28">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">OnE Connected</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    Cut waste, control costs and run your laundry with <span style="color:#148af4;">connected intelligence</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-4">
                    OnE Connected connects compatible Electrolux Professional laundry equipment to the data behind stronger performance, lower waste and better control.
                </p>
                <p class="font-body text-white/80 text-base leading-relaxed mb-4">
                    Monitor equipment status, cycle activity, loading, energy, water and detergent consumption, alerts and process data from one digital dashboard. Use that intelligence to reduce running cost pressure, improve production flow, save resources and protect equipment value.
                </p>
                <p class="font-body text-white/80 text-base leading-relaxed mb-7">
                    Irish Laundry Systems applies that intelligence through Irish engineering support, connecting it to the room, workload, service plan and daily operation.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Ask About OnE Connected
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Check Equipment Compatibility
                    </a>
                </div>
                <div class="flex items-center flex-wrap gap-x-5 gap-y-2">
                    @foreach(['Reduce costs and waste', 'Improve production flow', 'Monitor consumption', 'Prolong equipment lifetime'] as $i => $pt)
                    @if($i > 0)<span class="text-white/40">|</span>@endif
                    <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 3. INTELLIGENCE BEHIND THE EQUIPMENT --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Connected Laundry Intelligence</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    The intelligence behind <span style="color:#148af4;">better laundry performance</span>
                </h2>
            </div>
            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5">
                    Electrolux Professional invests in more than high-performance laundry equipment. OnE Connected adds a digital intelligence layer to compatible equipment, giving laundry teams sharper insight into performance, consumption, cycle activity, alerts and service needs.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    For managers and operators, that means more control over the daily pressures that affect cost, output, quality and peace of mind.
                </p>
                <a href="#dashboard"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See What OnE Connected Can Monitor
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- 4. BIG ICON BENEFITS --}}
<section class="py-16 lg:py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Benefits</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Take your laundry equipment to <span style="color:#148af4;">the next level</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                OnE Connected turns compatible Electrolux Professional laundry equipment into a stronger source of business insight, helping teams reduce waste, improve output, save resources and protect daily standards.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['title' => 'Increase productivity',            'body' => 'Use equipment status, cycle activity and load factor insight to reduce idle time, improve output and get more from the laundry room already in place.', 'd' => 'M2.25 18 9 11.25l4.306 4.307a11.95 11.95 0 0 1 5.814-5.519l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941'],
                ['title' => 'Improve efficiency',               'body' => 'See where equipment is active, idle or underused, so staff time, cycles and resources can be managed with more control.', 'd' => 'm3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z'],
                ['title' => 'Boost customer satisfaction',      'body' => 'Support more consistent quality, hygiene, safety and daily output, so residents, patients, guests, staff and customers can depend on the laundry operation behind them.', 'd' => 'M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z'],
                ['title' => 'Make your business more sustainable','body' => 'Monitor energy, water and detergent consumption, reduce waste and support lower running costs through transparency and built-in intelligence.', 'd' => 'M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418'],
            ] as $b)
            <div class="bg-white rounded-2xl p-7 border border-gray-100 shadow-sm flex flex-col">
                <div class="w-14 h-14 rounded-xl bg-[#148af4]/10 flex items-center justify-center mb-5 flex-shrink-0">
                    <svg class="w-7 h-7 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $b['d'] }}"/></svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $b['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $b['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 5. VALUE FOR LAUNDRY OPERATIONS --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Performance</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Where OnE Connected creates <span style="color:#148af4;">real operational value</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                In a busy commercial laundry, small inefficiencies can turn into wasted resources, slower output, higher running costs and more pressure on the team. OnE Connected gives the operation a better view of the numbers and signals behind those problems.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['title' => 'Reduce costs and waste',                 'body' => 'Track energy, water and detergent consumption so waste is easier to see, measure and manage.', 'd' => 'M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z'],
                ['title' => 'Improve production flow',                'body' => 'Use cycle run data, load factor and equipment status to reduce idle time, avoid wasted cycles and support smoother daily output.', 'd' => 'M3 8.688c0-.864.933-1.405 1.683-.977l7.108 4.062a1.125 1.125 0 0 1 0 1.953l-7.108 4.062A1.125 1.125 0 0 1 3 16.81V8.688ZM12.75 8.688c0-.864.933-1.405 1.683-.977l7.108 4.062a1.125 1.125 0 0 1 0 1.953l-7.108 4.062a1.125 1.125 0 0 1-1.683-.977V8.688Z'],
                ['title' => 'Support hygiene and process validation','body' => 'Use cycle logs, process validation and hygiene validation visibility to support stronger records and greater process confidence where compatible equipment and settings apply.', 'd' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z'],
                ['title' => 'Protect equipment value',               'body' => 'Use status, activity, alerts and error information to support better maintenance conversations, stronger aftercare and longer equipment life.', 'd' => 'M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26'],
            ] as $v)
            <div class="rounded-2xl p-7 border border-gray-100 bg-gray-50 flex flex-col">
                <div class="w-12 h-12 rounded-xl bg-[#148af4]/10 flex items-center justify-center mb-5 flex-shrink-0">
                    <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $v['d'] }}"/></svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $v['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $v['body'] }}</p>
            </div>
            @endforeach
        </div>
        <div class="mt-10">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Explore Connected Laundry Intelligence
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 6. LIVE DASHBOARD (navy centrepiece) --}}
<section id="dashboard" class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal max-w-4xl">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">One Dashboard</p>
            <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                See the waste, delays and alerts that usually stay hidden
            </h2>
            <p class="font-body text-white/75 text-base leading-relaxed mb-4">
                OnE Connected gives commercial laundry teams one digital view of key information across compatible Electrolux Professional equipment.
            </p>
            <p class="font-body text-white/75 text-base leading-relaxed">
                Instead of waiting for problems to show up in the room, managers can see important signals earlier: idle equipment, underloaded cycles, rising consumption, failed validation, recurring errors and service pressure.
            </p>
        </div>

        <div class="rounded-2xl overflow-hidden shadow-2xl mb-12 reveal border border-white/10">
            <img src="/images/healthcare/stripOneconnected.png" alt="OnE Connected dashboard" class="w-full h-auto object-cover" style="max-height:520px;">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-8 reveal">
            @foreach([
                ['t' => 'Equipment status',        'b' => 'See what is running, idle, finished, in alert or needing attention.'],
                ['t' => 'Cycle activity',          'b' => 'Review cycle runs and understand how equipment is being used.'],
                ['t' => 'Load factor',             'b' => 'See how efficiently equipment is loaded against capacity.'],
                ['t' => 'Consumption reports',     'b' => 'Monitor energy, water and detergent use across the site.'],
                ['t' => 'Notifications and alerts','b' => 'Receive notifications when errors occur or when validation fails.'],
                ['t' => 'Remote programme control','b' => 'Activate or deactivate selected cycles remotely where compatible equipment and user permissions apply.'],
                ['t' => 'Laundry mapping',         'b' => 'View equipment in a custom laundry-room layout with simple colour-coded status.'],
                ['t' => 'User profiles',           'b' => 'Set different access levels for managers, operators or service users where suitable.'],
                ['t' => 'Data extraction',         'b' => 'Export logs and reports for deeper review, audits or performance analysis.'],
            ] as $dp)
            <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                <div>
                    <h3 class="font-heading font-bold text-white text-base leading-snug mb-1">{{ $dp['t'] }}</h3>
                    <p class="font-body text-white/65 text-sm leading-relaxed">{{ $dp['b'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-12">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-7 py-4 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                Explore the OnE Connected Dashboard
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 7. COST, WASTE AND CONSUMPTION --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Cost Control</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Control energy, water and detergent use with <span style="color:#148af4;">better consumption insight</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl mb-2">
                Energy, water and detergent use can create major pressure over the life of a commercial laundry operation. OnE Connected gives teams a stronger way to monitor consumption across compatible equipment, compare usage and see where resources may be wasted.
            </p>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                That visibility can support better decisions around running costs, sustainability and daily operation.
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                ['t' => 'Reduce costs and waste', 'b' => 'Use real consumption insight to understand where resources are being used and where waste may be building.'],
                ['t' => 'Save resources',         'b' => 'Monitor energy, water and detergent consumption across compatible equipment.'],
                ['t' => 'Reduce running costs',   'b' => 'Use transparency and equipment intelligence to support better cost control over time.'],
            ] as $cp)
            <div class="rounded-2xl p-7 border border-gray-100 bg-gray-50">
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $cp['t'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $cp['b'] }}</p>
            </div>
            @endforeach
        </div>
        <div class="mt-10">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Ask About Consumption Monitoring
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 8. ILS ENGINEERING LAYER --}}
<section class="py-16 lg:py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Irish Engineering Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Electrolux builds the intelligence. ILS connects it to <span style="color:#148af4;">the real laundry room</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl mb-2">
                OnE Connected is Electrolux Professional technology. Irish Laundry Systems applies that intelligence through Irish engineering support, connecting it to the equipment, room, workload, service plan and daily operation.
            </p>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                For more than 30 years, ILS has supported Irish laundry operations of different sizes with equipment advice, installation, maintenance, repairs and aftercare. That experience matters when connected data needs to become action around cost, workload, uptime pressure and equipment care.
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                ['t' => 'Compatibility review',           'b' => 'Check the equipment, model, controls and connection requirements before the site commits.'],
                ['t' => 'Room and workload understanding','b' => 'Connect dashboard insight to the actual room, capacity, staff pressure and daily demand.'],
                ['t' => 'Service and aftercare connection','b' => 'Use alerts, errors and equipment information to support better maintenance and service conversations.'],
            ] as $sp)
            <div class="rounded-2xl p-7 border border-gray-100 bg-white">
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $sp['t'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $sp['b'] }}</p>
            </div>
            @endforeach
        </div>
        <div class="mt-10">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Speak to Irish Laundry Systems
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 9. COMPATIBLE LAUNDRY EQUIPMENT --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Compatible Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Connect compatible equipment and improve <span style="color:#148af4;">business performance</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                OnE Connected works with selected compatible Electrolux Professional laundry equipment. Compatibility depends on model, production date, controls and connection requirements, so the site should be reviewed before a recommendation is made.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Commercial washers',          'body' => 'Selected compatible Electrolux Professional washers can connect to OnE Connected for status, cycle activity, load factor, consumption and process insight.', 'cta' => 'View Commercial Washers', 'route' => route('equipment.category', 'washers'),         'img' => '/images/equipment/commercialwasher.webp'],
                ['title' => 'Tumble dryers',               'body' => 'Selected compatible dryers can support connected visibility over equipment use, status, performance and service-related information.', 'cta' => 'View Tumble Dryers', 'route' => route('equipment.category', 'tumble-dryers'),    'img' => '/images/equipment/line6000-tumble-dryer.webp'],
                ['title' => 'Barrier washers',             'body' => 'Selected compatible barrier washers can support connected process visibility for hygiene-focused and high-demand laundry environments.', 'cta' => 'View Barrier Washers', 'route' => route('equipment.category', 'barrier-washers'), 'img' => '/images/equipment/line6000-barrier-washer.webp'],
                ['title' => 'Selected flatwork solutions', 'body' => 'Selected Electrolux Professional flatwork solutions may support OnE Connected depending on model and configuration.', 'cta' => 'Ask About Compatibility', 'route' => route('contact'),         'img' => '/images/equipment/line6000-ironer.webp'],
            ] as $card)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm flex flex-col overflow-hidden">
                <div class="flex items-center justify-center h-48 bg-gray-50 p-5">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" class="max-h-full w-auto object-contain">
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-5 flex-1">{{ $card['body'] }}</p>
                    <a href="{{ $card['route'] }}" class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm mt-auto">
                        {{ $card['cta'] }}
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-8 flex items-start gap-3 rounded-xl bg-gray-50 border border-gray-100 p-5 max-w-4xl">
            <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"/></svg>
            <p class="font-body text-gray-500 text-sm leading-relaxed">Not every model is compatible. Some equipment may require additional connectivity hardware or a conversion kit. Irish Laundry Systems can review equipment compatibility before the site commits.</p>
        </div>
    </div>
</section>

{{-- 10. GETTING STARTED --}}
<section class="py-16 lg:py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Getting Started</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Simple, stable and scalable for <span style="color:#148af4;">connected laundry control</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Getting started with OnE Connected should feel clear. Irish Laundry Systems can review the room, equipment and connection requirements, then advise on the right next step for compatible Electrolux Professional equipment.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 reveal">
            @foreach([
                ['title' => 'Check compatibility',          'body' => 'Review the equipment, model, controls and production details to confirm whether OnE Connected can apply.'],
                ['title' => 'Review connection needs',      'body' => 'Assess the site, room layout, signal, router and network requirements before setup.'],
                ['title' => 'Connect the equipment',        'body' => 'Use the required Electrolux Professional connectivity hardware and setup process for compatible equipment.'],
                ['title' => 'Start monitoring performance', 'body' => 'Use the dashboard to review status, cycles, loading, consumption, alerts, user access and process data.'],
                ['title' => 'Scale with the operation',     'body' => 'Add compatible equipment, users or sites as the operation grows and the need for visibility increases.'],
            ] as $i => $step)
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex flex-col">
                <div class="w-11 h-11 rounded-full bg-[#148af4] text-white font-heading font-bold flex items-center justify-center mb-4 flex-shrink-0">{{ $i + 1 }}</div>
                <h3 class="font-heading font-bold text-navy text-base leading-snug mb-2">{{ $step['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $step['body'] }}</p>
            </div>
            @endforeach
        </div>
        <div class="mt-10">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Start With a Compatibility Check
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 11. OFFICIAL RESOURCES --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Official Resources</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Find out how OnE Connected can work <span style="color:#148af4;">for your site</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Use official Electrolux Professional resources to explore OnE Connected benefits, compatible equipment and connection requirements before speaking with Irish Laundry Systems about your laundry room.
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 reveal">
            @foreach([
                ['title' => 'OnE Connected Quick Guide',    'body' => 'A simple guide to the dashboard, key benefits and how OnE Connected supports connected equipment performance.', 'cta' => 'Download Quick Guide', 'route' => route('resources')],
                ['title' => 'Connectivity Technical Sheet', 'body' => 'Useful for checking equipment categories, hardware requirements, connection needs and compatibility details.', 'cta' => 'View Technical Sheet', 'route' => route('resources')],
                ['title' => 'Ask Irish Laundry Systems',    'body' => 'Need to know whether OnE Connected is right for your equipment, room and workload? Start with a compatibility conversation.', 'cta' => 'Ask Our Team', 'route' => route('contact')],
            ] as $r)
            <div class="rounded-2xl p-7 border border-gray-100 bg-gray-50 flex flex-col">
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $r['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5 flex-1">{{ $r['body'] }}</p>
                <a href="{{ $r['route'] }}" class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm mt-auto">
                    {{ $r['cta'] }}
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 12. FAQs --}}
@include('components.faq', [
    'eyebrow' => 'OnE Connected FAQs',
    'heading' => 'Clear answers before <span style="color:#148af4;">you connect your equipment</span>',
    'footerNote' => 'Have a different question? Ask about OnE Connected.',
    'faqs' => [
        ['question' => 'What is OnE Connected?', 'answer' => 'OnE Connected is the official Electrolux Professional digital ecosystem for compatible equipment. It connects selected laundry equipment to dashboard data covering status, cycles, loading, consumption, alerts, process validation and service needs.'],
        ['question' => 'What business benefits does OnE Connected support?', 'answer' => 'OnE Connected supports increased productivity, improved efficiency, reduced costs and waste, better resource use, stronger production flow, sustainability and equipment performance insight.'],
        ['question' => 'Can OnE Connected reduce running costs?', 'answer' => 'OnE Connected monitors energy, water and detergent consumption across compatible equipment, helping sites see where resources are being used and where waste may be building.'],
        ['question' => 'Can it support hygiene and process validation?', 'answer' => 'Yes, where compatible equipment and settings apply. OnE Connected can support cycle logs, process validation and hygiene validation visibility as part of the site\'s wider laundry process.'],
        ['question' => 'Which equipment can connect?', 'answer' => 'Selected Electrolux Professional washers, dryers, barrier washers and flatwork solutions may be compatible. Some existing equipment may connect, while some models may need additional hardware or a conversion kit. Irish Laundry Systems can review this before the site commits.'],
        ['question' => 'Can teams manage users, alerts and reports?', 'answer' => 'Yes. OnE Connected can support user profiles, access levels, notifications and data extraction, helping teams control who sees what, receive key alerts and export logs or reports for review where suitable.'],
    ],
])

{{-- 13. FINAL CTA / FORM --}}
@include('components.cta-downtime-form', [
    'pageSource' => 'one_connected_cta',
    'eyebrow'    => 'Get Connected',
    'heading'    => 'Ready to reduce waste and run your laundry with <span style="color:#148af4;">more control?</span>',
    'body'       => 'Talk to Irish Laundry Systems about OnE Connected, compatible Electrolux Professional equipment, energy, water and detergent monitoring, production flow, hygiene validation, service alerts and the right next step for your laundry room.',
    'formTitle'  => 'Ask About OnE Connected',
    'formIntro'  => 'Tell us about your site, equipment and laundry room. We aim to respond within 24 hours.',
    'buttonText' => 'Ask About OnE Connected',
    'equipmentLabel' => 'Equipment currently in use',
    'messageLabel'   => 'What would you like to improve?',
])

@endsection
