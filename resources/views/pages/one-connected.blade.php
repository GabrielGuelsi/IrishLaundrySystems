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
                    Use connected laundry data to improve <span style="color:#148af4;">performance, control and compliance</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-7 max-w-2xl">
                    OnE Connected brings compatible Electrolux Professional laundry equipment into one digital ecosystem, helping teams monitor performance, consumption, alerts and process validation.
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
                    Turn equipment data into <span style="color:#148af4;">better laundry decisions</span>
                </h2>
            </div>
            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    OnE Connected gives laundry teams clearer insight into load factor, hygiene validation, energy, water and detergent consumption, helping support better control across compatible Electrolux Professional equipment.
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
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Business Value</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Use connected laundry data to improve <span style="color:#148af4;">performance and cost control</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                OnE Connected helps compatible Electrolux Professional laundry equipment turn daily operation into clearer business insight.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['claim' => 'Productivity',   'label' => 'Improve production flow',  'body' => 'Use connected data to understand cycle activity, loading and output across the laundry room.', 'icon' => '173'],
                ['claim' => 'Efficiency',     'label' => 'Use equipment better',     'body' => 'See how compatible machines are being used and where daily operation can improve.', 'icon' => '11'],
                ['claim' => 'Running costs',  'label' => 'Make consumption visible', 'body' => 'Monitor energy, water and detergent use to support better cost decisions.', 'icon' => '166'],
                ['claim' => 'Sustainability', 'label' => 'Reduce resource waste',    'body' => 'Use consumption data to support more efficient energy, water and detergent use.', 'icon' => '6'],
            ] as $b)
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex flex-col gap-4">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/{{ $b['icon'] }}.png" alt="" class="w-28 h-28 object-contain">
                </div>
                <div>
                    <p class="font-heading font-bold text-[#148af4] text-lg leading-snug mb-1">{{ $b['claim'] }}</p>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">{{ $b['label'] }}</h3>
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
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Intelligence</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                See the operational data that <span style="color:#148af4;">supports better decisions</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                OnE Connected gives laundry teams clearer visibility of equipment activity, consumption, validation, alerts and reports.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                ['claim' => 'Status',      'label' => 'Equipment visibility',        'body' => 'See whether compatible machines are running, idle, complete or waiting for attention.',        'i' => 'M9.348 14.651a3.75 3.75 0 0 1 0-5.303m5.304 0a3.75 3.75 0 0 1 0 5.303m-7.425 2.122a6.75 6.75 0 0 1 0-9.546m9.546 0a6.75 6.75 0 0 1 0 9.546M5.106 18.894c-3.808-3.808-3.808-9.98 0-13.789m13.788 0c3.808 3.808 3.808 9.981 0 13.79M12 12h.008v.008H12V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z'],
                ['claim' => 'Load factor', 'label' => 'Better loading insight',      'body' => 'Understand how effectively machines are being loaded against their working capacity.',          'i' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z'],
                ['claim' => 'Consumption', 'label' => 'Energy, water and detergent', 'body' => 'Track key resource use across compatible laundry equipment and processes.',                     'i' => 'M2.25 18 9 11.25l4.306 4.307a11.95 11.95 0 0 1 5.814-5.519l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941'],
                ['claim' => 'Validation',  'label' => 'Process and hygiene support', 'body' => 'Use process data to support hygiene control, quality standards and future reference.',           'i' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z'],
                ['claim' => 'Alerts',      'label' => 'Respond faster',              'body' => 'Receive notifications when a process, machine or batch needs attention.',                        'i' => 'M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0'],
                ['claim' => 'Reports',     'label' => 'Keep records visible',        'body' => 'Access saved data that helps teams review performance and process history.',                     'i' => 'M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z'],
            ] as $v)
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                <svg class="w-10 h-10 text-[#148af4] mb-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $v['i'] }}"/></svg>
                <p class="font-heading font-bold text-[#148af4] text-lg leading-snug mb-1">{{ $v['claim'] }}</p>
                <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">{{ $v['label'] }}</h3>
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
                See the signals that help you <span style="color:#148af4;">control laundry performance</span>
            </h2>
            <p class="font-body text-white/75 text-base leading-relaxed">
                OnE Connected gives compatible Electrolux Professional laundry equipment one digital view of activity, consumption, alerts and process data.
            </p>
        </div>

        <div class="rounded-2xl overflow-hidden shadow-2xl mb-12 reveal border border-white/10">
            <img src="/images/shared/stripOneconnected.png" alt="OnE Connected dashboard" class="w-full h-auto object-cover" style="max-height:520px;">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-5 reveal">
            @foreach([
                ['claim' => 'KPIs',        'label' => 'Usage trends',                'body' => 'View key laundry performance indicators from one dashboard.',            'i' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z'],
                ['claim' => 'Load factor', 'label' => 'Loading insight',             'body' => 'See how effectively equipment is loaded against capacity.',              'i' => 'M9.348 14.651a3.75 3.75 0 0 1 0-5.303m5.304 0a3.75 3.75 0 0 1 0 5.303m-7.425 2.122a6.75 6.75 0 0 1 0-9.546m9.546 0a6.75 6.75 0 0 1 0 9.546M5.106 18.894c-3.808-3.808-3.808-9.98 0-13.789m13.788 0c3.808 3.808 3.808 9.981 0 13.79M12 12h.008v.008H12V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z'],
                ['claim' => 'Consumption', 'label' => 'Energy, water and detergent', 'body' => 'Monitor resource use across compatible laundry equipment.',              'i' => 'M2.25 18 9 11.25l4.306 4.307a11.95 11.95 0 0 1 5.814-5.519l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941'],
                ['claim' => 'Validation',  'label' => 'Hygiene process support',     'body' => 'Track process validation status and issues.',                            'i' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z'],
                ['claim' => 'Alerts',      'label' => 'Faster response',             'body' => 'Receive notifications when a process or machine needs attention.',       'i' => 'M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0'],
                ['claim' => 'Reports',     'label' => 'Data for review',             'body' => 'Keep records available for performance checks and future reference.',    'i' => 'M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z'],
            ] as $dp)
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
                <svg class="w-10 h-10 text-[#148af4] mb-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $dp['i'] }}"/></svg>
                <p class="font-heading font-bold text-[#148af4] text-lg leading-snug mb-1">{{ $dp['claim'] }}</p>
                <h3 class="font-heading font-bold text-white text-base leading-snug mb-2">{{ $dp['label'] }}</h3>
                <p class="font-body text-white/65 text-sm leading-relaxed">{{ $dp['body'] }}</p>
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

{{-- 7. CONSUMPTION CONTROL — three resource signals (claim / label / body) --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Consumption Control</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Focus on the resources that affect <span style="color:#148af4;">cost and waste every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                OnE Connected shows many areas of laundry performance. For cost and waste control, three resource signals matter most: energy, water and detergent use.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                ['claim' => 'Energy use',    'label' => 'See where power is being used',   'body' => 'Monitor energy consumption across compatible laundry equipment and cycles.',    'i' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z'],
                ['claim' => 'Water use',     'label' => 'Compare use across cycles',       'body' => 'Review water consumption patterns and see where usage may need attention.',      'i' => 'M12 21a9 9 0 006.364-15.364L12 2.25 5.636 8.636A9 9 0 0012 21z'],
                ['claim' => 'Detergent use', 'label' => 'Link product use to activity',    'body' => 'Track detergent consumption alongside washing activity where monitoring is available.', 'i' => 'M9 3.75h4.5l1.2 2.25v13.5A1.5 1.5 0 0113.2 21H8.55a1.5 1.5 0 01-1.5-1.5V6l1.2-2.25H9zm0 0V2.25h4.5m-6 8.25h7.5'],
            ] as $c)
            <div class="rounded-2xl p-7 border border-gray-100 bg-gray-50 flex flex-col">
                <svg class="w-10 h-10 text-[#148af4] mb-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $c['i'] }}"/></svg>
                <p class="font-heading font-bold text-[#148af4] text-sm mb-1">{{ $c['claim'] }}</p>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-4">{{ $c['label'] }}</h3>
                <div class="border-t border-gray-200 pt-4 mt-auto">
                    <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $c['body'] }}</p>
                </div>
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
    'eyebrow'      => 'Engineering Support',
    'headingLine1' => 'The dashboard shows the data.',
    'headingLine2' => 'Irish Laundry Systems helps decide what comes next',
    'body'         => 'Our team helps interpret OnE Connected data around consumption, alerts, equipment use and process performance, so the site can make clearer decisions around maintenance, call-outs, parts, running costs and equipment care.',
    'image'        => '/images/shared/customer-care-line6000.jpg',
    'miniPoints'   => [
        {{-- icons placeholder — swap for final ones later --}}
        ['icon' => '149', 'iconClass' => 'scale-[0.78]', 'label' => 'Earlier<br>Maintenance'],
        ['icon' => '168', 'iconClass' => 'scale-[0.91]', 'label' => 'Downtime<br>Reduction'],
        ['icon' => '151', 'iconClass' => 'scale-[0.85]', 'label' => 'Equipment<br>Lifespan'],
    ],
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
                Start OnE Connected with<br><span style="color:#148af4;">a clear, secure setup</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Getting started should feel simple. Irish Laundry Systems reviews the equipment, the connection requirements and the level of monitoring the site needs, then advises on the right next step for compatible Electrolux Professional equipment.
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-0 reveal">
            @foreach([
                ['icon' => '243', 'title' => 'Easy Setup',         'body' => 'Compatible Electrolux Professional equipment connects using the required connectivity hardware and a straightforward setup process.'],
                ['icon' => '244', 'title' => 'Secure Connection',  'body' => 'Site, signal and network requirements are reviewed first, so the connection stays stable and access stays controlled.'],
                ['icon' => '245', 'title' => 'Scalable Monitoring','body' => 'Add compatible equipment, users or sites over time as the operation grows and the need for visibility increases.'],
            ] as $step)
            <div class="text-center px-6 lg:px-10 {{ $loop->first ? '' : 'lg:border-l lg:border-gray-200' }}">
                <img src="/images/icons/{{ $step['icon'] }}.png" alt="{{ $step['title'] }}"
                     class="w-28 h-28 object-contain mx-auto mb-6">
                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-snug mb-3">{{ $step['title'] }}</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed">{{ $step['body'] }}</p>
            </div>
            @endforeach
        </div>
        <div class="mt-12 text-center">
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

{{-- 11b. CLIENT PROOF --}}
@include('components.proof-bar')

{{-- 12. FAQs --}}
@include('components.faq', [
    'eyebrow' => 'OnE Connected FAQs',
    'heading' => 'Clear answers before <span style="color:#148af4;">you connect your equipment</span>',
    'footerNote' => 'Have a different question? Ask about OnE Connected.',
    'faqs' => [
        ['question' => 'What is OnE Connected?', 'answer' => 'OnE Connected is Electrolux Professional&rsquo;s digital ecosystem for connected equipment, giving laundry teams clearer visibility over machine activity, performance, alerts and process data.'],
        ['question' => 'Which laundry equipment can connect?', 'answer' => 'Compatibility depends on the model, controls and production date. Selected Line 6000 and Line 5000 washers and tumble dryers, selected barrier washers and IV648xx FFS ironers are listed as compatible in Electrolux Professional materials.'],
        ['question' => 'Do we need a site check before connecting?', 'answer' => 'Yes. Irish Laundry Systems should review the equipment, controls, network requirements and any conversion kit needs before a recommendation is made.'],
        ['question' => 'What can we monitor through the dashboard?', 'answer' => 'Teams can monitor machine status, cycle activity, load factor, alerts, reports, consumption data and process information from compatible connected equipment.'],
        ['question' => 'Can it help with running costs and performance?', 'answer' => 'Yes, where compatible equipment is connected. OnE Connected can show energy, water and detergent consumption, helping teams review use and make better operational decisions.'],
        ['question' => 'Is the connection secure?', 'answer' => 'Electrolux Professional presents OnE Connected as a secure cloud-based system, with GDPR and ISO 27001 referenced in its official material. Site network and access requirements should still be reviewed before connection.'],
    ],
])

{{-- 13. FINAL CTA / FORM --}}
@include('components.cta-downtime-form', [
    'pageSource' => 'one_connected_cta',
    'eyebrow'    => 'Get Connected',
    'heading'    => 'Bring your laundry equipment into<br><span style="color:#148af4;">clearer connected control</span>',
    'body'       => 'Talk to Irish Laundry Systems about connecting compatible Electrolux Professional equipment and using OnE Connected to monitor machine status, cycles, consumption, hygiene validation, alerts and reports.',
    'formTitle'  => 'Request an OnE Connected Review',
    'formIntro'  => 'Tell us what equipment you use and what your laundry team needs to monitor.',
    'buttonText' => 'Request an OnE Connected Review',
    'equipmentLabel' => 'Equipment currently in use',
    'messageLabel'   => 'What would you like to improve?',
])

@endsection
