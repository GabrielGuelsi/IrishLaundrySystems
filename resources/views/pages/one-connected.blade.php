@extends('layouts.app')

@section('pageTitle', 'OnE Connected Ireland | Electrolux Professional Connected Laundry Intelligence')

@section('meta')
<meta name="description" content="OnE Connected connects compatible Electrolux Professional laundry equipment to performance data that can reduce costs and waste, improve production flow, monitor consumption and support service decisions. Talk to Irish Laundry Systems about compatibility, setup and support in Ireland.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col h-auto min-h-[480px] lg:h-[720px]" style="min-height:480px;">
    <img src="/images/shared/stripOneconnected.png" alt="OnE Connected laundry dashboard"
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
                <div class="flex items-center flex-wrap lg:flex-nowrap gap-x-8 gap-y-3">
                    @foreach([
                        ['icon' => 'ativo-9',  'label' => 'Reduce costs<br>and waste'],
                        ['icon' => 'ativo-10', 'label' => 'Improve<br>production flow'],
                        ['icon' => 'ativo-11', 'label' => 'Monitor<br>consumption'],
                        ['icon' => 'ativo-21', 'label' => 'Prolong<br>equipment lifetime'],
                    ] as $feat)
                    <div class="flex items-center gap-5">
                        <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg" style="width:3.5rem;height:3.5rem;flex-shrink:0;" alt="">
                        <span class="font-body text-white text-sm font-bold leading-snug">{!! $feat['label'] !!}</span>
                    </div>
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
                ['title' => 'Increase productivity',            'body' => 'Use equipment status, cycle activity and load factor insight to reduce idle time, improve output and get more from the laundry room already in place.', 'icon' => '173'],
                ['title' => 'Improve efficiency',               'body' => 'See where equipment is active, idle or underused, so staff time, cycles and resources can be managed with more control.', 'icon' => '11'],
                ['title' => 'Boost customer satisfaction',      'body' => 'Support more consistent quality, hygiene, safety and daily output, so residents, patients, guests, staff and customers can depend on the laundry operation behind them.', 'icon' => '164'],
                ['title' => 'Make your business more sustainable','body' => 'Monitor energy, water and detergent consumption, reduce waste and support lower running costs through transparency and built-in intelligence.', 'icon' => '6'],
            ] as $b)
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex flex-col gap-4">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/{{ $b['icon'] }}.png" alt="" class="w-28 h-28 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">{{ $b['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $b['body'] }}</p>
                </div>
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
                ['title' => 'Reduce costs and waste',                 'body' => 'Track energy, water and detergent consumption so waste is easier to see, measure and manage.', 'icon' => '166'],
                ['title' => 'Improve production flow',                'body' => 'Use cycle run data, load factor and equipment status to reduce idle time, avoid wasted cycles and support smoother daily output.', 'icon' => '165'],
                ['title' => 'Support hygiene and process validation','body' => 'Use cycle logs, process validation and hygiene validation visibility to support stronger records and greater process confidence where compatible equipment and settings apply.', 'icon' => '172'],
                ['title' => 'Protect equipment value',               'body' => 'Use status, activity, alerts and error information to support better maintenance conversations, stronger aftercare and longer equipment life.', 'icon' => '167'],
            ] as $v)
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex flex-col gap-4">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/{{ $v['icon'] }}.png" alt="" class="w-28 h-28 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">{{ $v['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $v['body'] }}</p>
                </div>
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
            <img src="/images/shared/stripOneconnected.png" alt="OnE Connected dashboard" class="w-full h-auto object-cover" style="max-height:520px;">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-8 reveal">
            @foreach([
                ['t' => 'Equipment status',         'i' => 'M9.348 14.651a3.75 3.75 0 0 1 0-5.303m5.304 0a3.75 3.75 0 0 1 0 5.303m-7.425 2.122a6.75 6.75 0 0 1 0-9.546m9.546 0a6.75 6.75 0 0 1 0 9.546M5.106 18.894c-3.808-3.808-3.808-9.98 0-13.789m13.788 0c3.808 3.808 3.808 9.981 0 13.79M12 12h.008v.008H12V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z', 'b' => 'See what is running, idle, finished, in alert or needing attention.'],
                ['t' => 'Cycle activity',           'i' => 'M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99', 'b' => 'Review cycle runs and understand how equipment is being used.'],
                ['t' => 'Load factor',              'i' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z', 'b' => 'See how efficiently equipment is loaded against capacity.'],
                ['t' => 'Consumption reports',      'i' => 'M2.25 18 9 11.25l4.306 4.307a11.95 11.95 0 0 1 5.814-5.519l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941', 'b' => 'Monitor energy, water and detergent use across the site.'],
                ['t' => 'Notifications and alerts', 'i' => 'M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0', 'b' => 'Receive notifications when errors occur or when validation fails.'],
                ['t' => 'Remote programme control', 'i' => 'M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75', 'b' => 'Activate or deactivate selected cycles remotely where compatible equipment and user permissions apply.'],
                ['t' => 'Laundry mapping',          'i' => 'M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z', 'b' => 'View equipment in a custom laundry-room layout with simple colour-coded status.'],
                ['t' => 'User profiles',            'i' => 'M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z', 'b' => 'Set different access levels for managers, operators or service users where suitable.'],
                ['t' => 'Data extraction',          'i' => 'M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3', 'b' => 'Export logs and reports for deeper review, audits or performance analysis.'],
            ] as $dp)
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-lg bg-[#148af4]/15 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $dp['i'] }}"/></svg>
                </div>
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

{{-- 8. ILS ENGINEERING LAYER (image-backed strip) --}}
@include('components.service-contracts-strip', [
    'eyebrow'      => 'Irish Engineering Support',
    'headingLine1' => 'Electrolux builds the intelligence.',
    'headingLine2' => 'ILS connects it to the real laundry room',
    'body'         => 'OnE Connected is Electrolux Professional technology. Irish Laundry Systems applies it through Irish engineering support — connecting dashboard insight to the equipment, room, workload, service plan and daily operation, backed by more than 30 years supporting Irish laundry operations.',
    'image'        => '/images/shared/customer-care-line6000.jpg',
    'cta1Label'    => 'Speak to Irish Laundry Systems',
    'cta1Route'    => 'contact',
])

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
                ['title' => 'Commercial washers',          'body' => 'Selected compatible Electrolux Professional washers can connect to OnE Connected for status, cycle activity, load factor, consumption and process insight.', 'cta' => 'View Commercial Washers', 'route' => route('equipment.category', 'commercial-washers'),         'img' => '/images/pages/commercial-washers/commercialwasher.webp'],
                ['title' => 'Tumble dryers',               'body' => 'Selected compatible dryers can support connected visibility over equipment use, status, performance and service-related information.', 'cta' => 'View Tumble Dryers', 'route' => route('equipment.category', 'tumble-dryers'),    'img' => '/images/pages/dryers/line6000-tumble-dryer.webp'],
                ['title' => 'Barrier washers',             'body' => 'Selected compatible barrier washers can support connected process visibility for hygiene-focused and high-demand laundry environments.', 'cta' => 'View Barrier Washers', 'route' => route('equipment.category', 'barrier-washers'), 'img' => '/images/pages/barrier-washers/line6000-barrier-washer.webp'],
                ['title' => 'Selected flatwork solutions', 'body' => 'Selected Electrolux Professional flatwork solutions may support OnE Connected depending on model and configuration.', 'cta' => 'Ask About Compatibility', 'route' => route('contact'),         'img' => '/images/shared/line6000-ironer.webp'],
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
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4 reveal">
            @foreach([
                ['n' => '1', 'title' => 'Check compatibility',          'body' => 'Review the equipment, model, controls and production details to confirm whether OnE Connected can apply.', 'img' => '/images/shared/render-double-page_72dpi.jpg', 'pos' => 'center'],
                ['n' => '2', 'title' => 'Review connection needs',      'body' => 'Assess the site, room layout, signal, router and network requirements before setup.', 'img' => '/images/shared/line-6000-solutions.jpg', 'pos' => 'center'],
                ['n' => '3', 'title' => 'Connect the equipment',        'body' => 'Use the required Electrolux Professional connectivity hardware and setup process for compatible equipment.', 'img' => '/images/shared/customer-care-line6000.jpg', 'pos' => 'center 30%'],
                ['n' => '4', 'title' => 'Start monitoring performance', 'body' => 'Use the dashboard to review status, cycles, loading, consumption, alerts, user access and process data.', 'img' => '/images/shared/stripOneconnected.png', 'pos' => 'center'],
                ['n' => '5', 'title' => 'Scale with the operation',     'body' => 'Add compatible equipment, users or sites as the operation grows and the need for visibility increases.', 'img' => '/images/shared/commercial-industrial.jpg', 'pos' => 'center'],
            ] as $step)
            <div class="group relative overflow-hidden rounded-2xl min-h-[300px] sm:min-h-[360px] {{ $loop->last ? 'col-span-2 lg:col-span-1' : '' }}">
                <img src="{{ $step['img'] }}" alt="{{ $step['title'] }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" style="object-position:{{ $step['pos'] }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0" style="background:linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 45%, rgba(1,30,65,0.18) 100%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300" style="background:rgba(1,30,65,0.9);"></div>
                <div class="absolute inset-0 p-5 lg:p-6 flex flex-col justify-end z-10">
                    <div class="font-heading font-bold text-[#148af4] leading-none mb-2" style="font-size:2rem;">{{ str_pad($step['n'], 2, '0', STR_PAD_LEFT) }}.</div>
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-44 group-hover:opacity-100 transition-all duration-500 mb-2">
                        <p class="font-body text-white/80 text-sm leading-relaxed">{{ $step['body'] }}</p>
                    </div>
                    <h3 class="font-heading font-bold text-white text-base lg:text-lg leading-snug">{{ $step['title'] }}</h3>
                </div>
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

{{-- 11b. TESTIMONIALS + CLIENT PROOF --}}
@include('components.testimonials', [
    'eyebrow' => 'Customer Trust',
    'heading' => 'Trusted by sites that depend on <span style="color:#148af4;">reliable laundry support</span>',
])

@include('components.proof-bar')

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
