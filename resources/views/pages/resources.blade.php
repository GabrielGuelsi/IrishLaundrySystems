@extends('layouts.app')

@section('pageTitle', 'Resources | Guides, Checklists & Industry Insights | ILS')
@section('metaDescription', 'Practical guides, checklists and reference material to help commercial laundry operators manage equipment, reduce downtime and stay compliant.')

@section('content')

{{-- ═══════════════════════════════════════
     1. HERO — dark navy, grid bg, search + category pills
═══════════════════════════════════════ --}}
<section class="relative overflow-hidden py-20 lg:py-28"
         style="background-color:#011E41; background-image:linear-gradient(rgba(255,255,255,0.035) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.035) 1px,transparent 1px); background-size:52px 52px;">

    {{-- Radial glow --}}
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 70% 50% at 50% 0%,rgba(20,138,244,0.12) 0%,transparent 70%);"></div>

    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 relative">

        {{-- Eyebrow pill --}}
        <div class="flex justify-center mb-6">
            <span class="inline-flex items-center gap-2 bg-white/[0.07] border border-white/[0.12] text-[#148af4] font-heading font-bold text-xs uppercase tracking-widest px-4 py-2 rounded-full">
                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] inline-block"></span>
                Knowledge Base
            </span>
        </div>

        {{-- Headline --}}
        <h1 class="font-heading font-bold text-white text-4xl lg:text-6xl text-center leading-tight mb-5 max-w-4xl mx-auto">
            Resources for <span style="color:#148af4;">smarter</span><br class="hidden lg:block"> laundry operations
        </h1>
        <p class="font-body text-white/45 text-base text-center max-w-xl mx-auto mb-10 leading-relaxed">
            Guides, checklists and reference material to help operators manage equipment, reduce downtime and stay compliant.
        </p>

        {{-- Search bar --}}
        <div class="max-w-xl mx-auto mb-10">
            <div class="relative">
                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-white/30 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                </svg>
                <input type="text"
                       placeholder="Search guides, checklists, sector resources..."
                       class="w-full font-body text-sm text-white placeholder-white/30 rounded-xl pl-12 pr-4 py-4 focus:outline-none transition-colors"
                       style="background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.1);">
            </div>
        </div>

        {{-- Category filter pills --}}
        <div class="flex flex-wrap items-center justify-center gap-2" x-data="{ active: 'all' }">
            @foreach([
                ['key'=>'all',          'label'=>'All Resources'],
                ['key'=>'guides',       'label'=>'Guides'],
                ['key'=>'checklists',   'label'=>'Checklists'],
                ['key'=>'healthcare',   'label'=>'Healthcare'],
                ['key'=>'hospitality',  'label'=>'Hospitality'],
                ['key'=>'care',         'label'=>'Care Facilities'],
                ['key'=>'commercial',   'label'=>'Commercial'],
            ] as $pill)
            <button @click="active = '{{ $pill['key'] }}'"
                    :class="active === '{{ $pill['key'] }}' ? 'bg-[#148af4] text-white border-[#148af4]' : 'text-white/55 border-white/10 hover:border-white/30 hover:text-white'"
                    class="font-heading font-bold text-xs px-5 py-2.5 rounded-full border transition-all duration-200"
                    style="background-color: active === '{{ $pill['key'] }}' ? '' : 'rgba(255,255,255,0.04)'">
                {{ $pill['label'] }}
            </button>
            @endforeach
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════
     2. FEATURED RESOURCE
═══════════════════════════════════════ --}}
<section class="bg-white py-14 lg:py-20">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="flex items-center justify-between mb-8">
            <h2 class="font-heading font-bold text-navy text-xs uppercase tracking-widest">Featured Resource</h2>
            <a href="{{ route('contact') }}" class="font-body font-semibold text-[#148af4] text-sm hover:underline">Request any guide →</a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 rounded-3xl overflow-hidden border border-[#e4eaf4] shadow-sm reveal" style="min-height:380px;">

            {{-- Image --}}
            <div class="lg:col-span-3 overflow-hidden relative" style="min-height:280px;">
                <img src="{{ asset('images/healthcare/plant-room.jpg') }}"
                     alt="Service Contract Buyer's Guide"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-r from-transparent to-[#f7f9fc]/30 hidden lg:block"></div>
                {{-- Floating badge --}}
                <div class="absolute top-5 left-5">
                    <span class="bg-[#148af4] text-white font-heading font-bold text-xs px-3 py-1.5 rounded-full">Featured</span>
                </div>
            </div>

            {{-- Content --}}
            <div class="lg:col-span-2 flex flex-col justify-center p-8 lg:p-12" style="background:#f7f9fc;">
                <div class="flex items-center gap-3 mb-5">
                    <span class="font-heading font-bold text-xs px-3 py-1.5 rounded-full" style="background:rgba(20,138,244,0.1); color:#148af4;">Guide</span>
                    <span class="text-gray-400 text-xs font-body flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        8 min read
                    </span>
                </div>
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-snug mb-4">
                    Service Contract<br>Buyer's Guide
                </h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-7">
                    What to look for in a commercial laundry service contract — and the questions you should be asking your provider before signing anything.
                </p>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center gap-2 bg-navy text-white font-heading font-bold text-sm px-6 py-3 rounded-xl hover:bg-[#148af4] transition-colors duration-300">
                        Request a Copy
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <span class="font-body text-gray-400 text-xs">Healthcare · Hospitality · Care</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     3. GUIDES GRID
═══════════════════════════════════════ --}}
<section class="py-14 lg:py-20" style="background:#f7f9fc;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
            <div>
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-2">Library</p>
                <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl">Guides</h2>
                <p class="font-body text-gray-400 text-sm mt-1">Practical reference material for operators and facilities managers</p>
            </div>
            <a href="{{ route('contact') }}" class="font-body font-semibold text-[#148af4] text-sm hover:underline whitespace-nowrap">Request a guide →</a>
        </div>

        @php
        $guides = [
            [
                'title'  => 'Preventive Maintenance Basics',
                'desc'   => 'An overview of what a preventive maintenance programme for commercial laundry should include — and why it matters.',
                'sector' => 'All sectors',
                'tag'    => 'Guide',
                'read'   => '6 min',
                'img'    => 'images/healthcare/engineer.jpg',
                'color'  => '#148af4',
            ],
            [
                'title'  => 'Barrier Washer Guide for Healthcare',
                'desc'   => 'Understanding barrier washer operation, infection control benefits and maintenance requirements in healthcare settings.',
                'sector' => 'Healthcare · Care',
                'tag'    => 'Guide',
                'read'   => '10 min',
                'img'    => 'images/healthcare/render-double-page_72dpi.jpg',
                'color'  => '#0ea5e9',
            ],
            [
                'title'  => 'Equipment Lifecycle Planning',
                'desc'   => 'When to repair and when to replace — a practical guide to commercial laundry equipment lifecycle decisions.',
                'sector' => 'All sectors',
                'tag'    => 'Guide',
                'read'   => '7 min',
                'img'    => 'images/healthcare/repairs-hero.jpg',
                'color'  => '#6366f1',
            ],
            [
                'title'  => 'Rental vs Purchase Decision Guide',
                'desc'   => 'A structured guide to deciding whether equipment rental or outright purchase makes more sense for your operation.',
                'sector' => 'All sectors',
                'tag'    => 'Guide',
                'read'   => '5 min',
                'img'    => 'images/equipment/td6-multihousing-room.jpg',
                'color'  => '#f59e0b',
            ],
            [
                'title'  => 'Compliance Documentation for Care',
                'desc'   => 'What maintenance documentation you should have in place for HIQA inspection and care facility governance requirements.',
                'sector' => 'Care Facilities',
                'tag'    => 'Guide',
                'read'   => '8 min',
                'img'    => 'images/CareFacilities/CareFacilitiesHero.png',
                'color'  => '#10b981',
            ],
            [
                'title'  => 'Hospitality Laundry Room Setup',
                'desc'   => 'How to size, plan and equip a commercial laundry room for hotel and hospitality operations — from capacity to workflow.',
                'sector' => 'Hospitality',
                'tag'    => 'Guide',
                'read'   => '9 min',
                'img'    => 'images/sectors/hospitality-hero.jpg',
                'color'  => '#ec4899',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($guides as $i => $guide)
            <div class="bg-white rounded-3xl overflow-hidden border border-[#e4eaf4] hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col reveal" style="transition-delay:{{ ($i % 3) * 80 }}ms;">

                {{-- Cover image --}}
                <div class="overflow-hidden relative" style="height:210px;">
                    <img src="{{ asset($guide['img']) }}" alt="{{ $guide['title'] }}"
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    {{-- Category badge on image --}}
                    <div class="absolute top-4 left-4">
                        <span class="font-heading font-bold text-xs px-3 py-1.5 rounded-full backdrop-blur-sm"
                              style="background:{{ $guide['color'] }}22; color:{{ $guide['color'] }}; border:1px solid {{ $guide['color'] }}30;">
                            {{ $guide['tag'] }}
                        </span>
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="font-body text-gray-400 text-xs flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            {{ $guide['read'] }} read
                        </span>
                        <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                        <span class="font-body text-gray-400 text-xs">{{ $guide['sector'] }}</span>
                    </div>

                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-3 flex-1">{{ $guide['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $guide['desc'] }}</p>

                    <div class="pt-4 border-t border-[#f0f4f8]">
                        <a href="{{ route('request-assessment') }}"
                           class="inline-flex items-center gap-1.5 font-heading font-bold text-sm transition-all duration-200 hover:gap-3"
                           style="color:{{ $guide['color'] }};">
                            Request Guide
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════
     4. CHECKLISTS
═══════════════════════════════════════ --}}
<section class="bg-white py-14 lg:py-20">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
            <div>
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-2">Ready to use</p>
                <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl">Checklists</h2>
                <p class="font-body text-gray-400 text-sm mt-1">Print-ready and digital checklists for operators and engineers</p>
            </div>
        </div>

        @php
        $checklists = [
            [
                'title' => 'Monthly Operator Checks — Washers',
                'desc'  => 'Routine checks your operators should carry out monthly on commercial washers to catch early signs of wear.',
                'color' => '#148af4',
                'icon'  => 'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z',
            ],
            [
                'title' => 'Monthly Operator Checks — Dryers',
                'desc'  => 'Essential monthly safety and performance checks for commercial tumble dryers — lint filters, temperatures, door seals.',
                'color' => '#6366f1',
                'icon'  => 'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z',
            ],
            [
                'title' => 'Pre-Service Preparation Checklist',
                'desc'  => 'How to prepare your laundry room before an engineer visit — saving time, ensuring access and reducing call-out duration.',
                'color' => '#10b981',
                'icon'  => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766m0 0l3.024 3.024c.37-.14.716-.363 1.002-.67L21 11.25a2.25 2.25 0 00-2.25-2.25H15M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163.036 1.548.537l1.009 1.34c.386.5.393 1.187.02 1.695l-.007.01',
            ],
            [
                'title' => 'Post-Breakdown Information Sheet',
                'desc'  => 'Information to gather immediately after a breakdown — helps your engineer diagnose the fault and respond faster.',
                'color' => '#f59e0b',
                'icon'  => 'M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($checklists as $i => $item)
            <div class="rounded-3xl p-7 flex flex-col border hover:shadow-lg hover:-translate-y-1 transition-all duration-300 reveal" style="background:#f7f9fc; border-color:#e4eaf4; transition-delay:{{ $i * 60 }}ms;">

                {{-- Icon --}}
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5 flex-shrink-0"
                     style="background:{{ $item['color'] }}15;">
                    <svg class="w-6 h-6" style="color:{{ $item['color'] }};" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/>
                    </svg>
                </div>

                {{-- Tag --}}
                <span class="font-heading font-bold text-xs px-2.5 py-1 rounded-full mb-4 self-start"
                      style="background:{{ $item['color'] }}15; color:{{ $item['color'] }};">Checklist</span>

                <h3 class="font-heading font-bold text-navy text-sm leading-snug mb-3">{{ $item['title'] }}</h3>
                <p class="font-body text-gray-500 text-xs leading-relaxed flex-1 mb-6">{{ $item['desc'] }}</p>

                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center gap-1.5 font-heading font-bold text-xs hover:gap-3 transition-all duration-200"
                   style="color:{{ $item['color'] }};">
                    Request Checklist
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>

            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════
     5. SECTOR COLLECTIONS — navy bg, image cards
═══════════════════════════════════════ --}}
<section class="py-14 lg:py-20"
         style="background-color:#011E41; background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px); background-size:52px 52px;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="text-center mb-12 reveal">
            <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-3">By Sector</p>
            <h2 class="font-heading font-bold text-white text-2xl lg:text-4xl mb-3">Resources by sector</h2>
            <p class="font-body text-white/40 text-sm max-w-xl mx-auto leading-relaxed">
                Every sector has different compliance requirements, equipment types and operational patterns — find resources specific to yours.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @php
            $sectors = [
                [
                    'href'     => route('sectors.healthcare'),
                    'title'    => 'Healthcare',
                    'desc'     => 'Hospitals, HSE and healthcare groups. Barrier washers, infection control, compliance documentation.',
                    'img'      => 'images/healthcare/hero-main.jpg',
                    'tag'      => 'Healthcare',
                    'tagColor' => '#ef4444',
                    'count'    => '6 resources',
                ],
                [
                    'href'     => route('sectors.hospitality'),
                    'title'    => 'Hospitality',
                    'desc'     => 'Hotels, guesthouses and leisure. High throughput, linen quality and minimal downtime.',
                    'img'      => 'images/sectors/hospitality-hero.jpg',
                    'tag'      => 'Hospitality',
                    'tagColor' => '#148af4',
                    'count'    => '4 resources',
                ],
                [
                    'href'     => route('sectors.care'),
                    'title'    => 'Care Facilities',
                    'desc'     => 'Nursing homes and residential care. HIQA compliance, barrier washing, equipment reliability.',
                    'img'      => 'images/CareFacilities/CareFacilitiesHero.png',
                    'tag'      => 'Care',
                    'tagColor' => '#10b981',
                    'count'    => '5 resources',
                ],
                [
                    'href'     => route('sectors.commercial'),
                    'title'    => 'Commercial',
                    'desc'     => 'Commercial laundries and industry. High-volume throughput, energy efficiency, machine uptime.',
                    'img'      => 'images/sectors/commercial-hero.jpg',
                    'tag'      => 'Commercial',
                    'tagColor' => '#f59e0b',
                    'count'    => '4 resources',
                ],
            ];
            @endphp

            @foreach($sectors as $i => $sector)
            <a href="{{ $sector['href'] }}"
               class="group relative overflow-hidden rounded-3xl border border-white/[0.08] hover:border-[#148af4]/40 transition-all duration-300 hover:-translate-y-1.5 flex flex-col reveal"
               style="min-height:340px; transition-delay:{{ $i * 80 }}ms;">

                {{-- Background image --}}
                <div class="absolute inset-0">
                    <img src="{{ asset($sector['img']) }}" alt="{{ $sector['title'] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#011E41]/95 via-[#011E41]/50 to-[#011E41]/10"></div>
                </div>

                {{-- Content --}}
                <div class="relative z-10 flex flex-col flex-1 p-6 justify-end">
                    <span class="font-heading font-bold text-xs px-3 py-1 rounded-full mb-3 self-start border"
                          style="background:{{ $sector['tagColor'] }}22; color:{{ $sector['tagColor'] }}; border-color:{{ $sector['tagColor'] }}30;">
                        {{ $sector['tag'] }}
                    </span>
                    <h3 class="font-heading font-bold text-white text-xl mb-2">{{ $sector['title'] }}</h3>
                    <p class="font-body text-white/50 text-xs leading-relaxed mb-4">{{ $sector['desc'] }}</p>
                    <div class="flex items-center justify-between">
                        <span class="font-body text-white/35 text-xs">{{ $sector['count'] }}</span>
                        <span class="inline-flex items-center gap-1.5 font-heading font-bold text-white/60 text-xs group-hover:text-white group-hover:gap-2.5 transition-all duration-200">
                            Explore
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </span>
                    </div>
                </div>

            </a>
            @endforeach
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════
     6. NOTIFY / NEWSLETTER CTA
═══════════════════════════════════════ --}}
<section class="bg-white py-14 lg:py-20">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="rounded-3xl overflow-hidden reveal" style="background:#f7f9fc; border:1px solid #e4eaf4;">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                {{-- Left content --}}
                <div class="p-10 lg:p-16 flex flex-col justify-center">
                    <span class="inline-flex items-center gap-2 bg-[#148af4]/10 text-[#148af4] font-heading font-bold text-xs px-3 py-1.5 rounded-full self-start mb-5">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#148af4]"></span>
                        Stay Informed
                    </span>
                    <h2 class="font-heading font-bold text-navy text-2xl lg:text-4xl leading-tight mb-4">
                        Get new resources<br>as they're published.
                    </h2>
                    <p class="font-body text-gray-500 text-sm leading-relaxed max-w-md mb-8">
                        New guides, checklists and technical references — sent directly when available. No marketing, no frequency commitments.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 max-w-md">
                        <input type="email"
                               placeholder="Your email address"
                               class="flex-1 border border-[#dde3ee] rounded-xl px-5 py-3.5 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-[#148af4] transition-colors bg-white">
                        <button class="bg-navy text-white font-heading font-bold text-sm px-7 py-3.5 rounded-xl hover:bg-[#148af4] transition-colors duration-300 whitespace-nowrap">
                            Notify Me
                        </button>
                    </div>
                    <p class="font-body text-gray-400 text-xs mt-3">No spam. Unsubscribe at any time.</p>
                </div>

                {{-- Right: resource type tiles --}}
                <div class="p-10 lg:p-16 flex items-center justify-center border-t lg:border-t-0 lg:border-l border-[#e4eaf4]">
                    <div class="grid grid-cols-2 gap-4 w-full max-w-xs">
                        @foreach([
                            ['label'=>'Guides', 'count'=>'6', 'color'=>'#148af4', 'icon'=>'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25'],
                            ['label'=>'Checklists', 'count'=>'4', 'color'=>'#6366f1', 'icon'=>'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['label'=>'Sector Guides', 'count'=>'4', 'color'=>'#10b981', 'icon'=>'M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21'],
                            ['label'=>'Coming Soon', 'count'=>'+8', 'color'=>'#f59e0b', 'icon'=>'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ] as $tile)
                        <div class="rounded-2xl p-5 border flex flex-col items-center text-center" style="background:{{ $tile['color'] }}08; border-color:{{ $tile['color'] }}18;">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3" style="background:{{ $tile['color'] }}15;">
                                <svg class="w-5 h-5" style="color:{{ $tile['color'] }};" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $tile['icon'] }}"/>
                                </svg>
                            </div>
                            <span class="font-heading font-bold text-navy text-xl leading-none mb-1">{{ $tile['count'] }}</span>
                            <span class="font-body text-gray-500 text-xs">{{ $tile['label'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════
     7. CTA
═══════════════════════════════════════ --}}
@include('components.cta-downtime-form')

@endsection
