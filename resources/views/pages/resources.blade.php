@extends('layouts.app')

@section('pageTitle', 'Commercial Laundry Resources | Guides, Checklists & Case Studies | ILS')
@section('metaDescription', 'Practical guides to reduce downtime risk, plan preventive maintenance and select the right commercial laundry equipment.')

@section('content')

<!-- HERO -->
<section class="bg-navy py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl mb-5">Resources for Commercial Laundry Reliability</h1>
        <p class="font-body text-blue-200 text-lg max-w-2xl mx-auto leading-relaxed">
            Guides, checklists and reference material to help commercial laundry operators manage their equipment and reduce downtime.
        </p>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- GUIDES -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex items-center justify-between mb-8">
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl">Guides</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ([
                ['Service Contract Buyer\'s Guide', 'What to look for in a commercial laundry service contract — and the questions you should be asking your provider.', 'Healthcare, Hospitality, Care', 'Coming soon'],
                ['Preventive Maintenance Basics', 'An overview of what a preventive maintenance programme for commercial laundry should include — and why it matters.', 'All sectors', 'Coming soon'],
                ['Barrier Washer Guide for Healthcare', 'Understanding barrier washer operation, infection control benefits and maintenance requirements in healthcare settings.', 'Healthcare, Care', 'Coming soon'],
                ['Equipment Lifecycle Planning', 'When to repair and when to replace — a practical guide to commercial laundry equipment lifecycle decisions.', 'All sectors', 'Coming soon'],
                ['Rental vs Purchase Decision Guide', 'A structured guide to deciding whether equipment rental or outright purchase makes more sense for your operation.', 'All sectors', 'Coming soon'],
                ['Compliance Documentation for Care', 'What maintenance documentation you should have in place for HIQA inspection and other care facility governance requirements.', 'Care Facilities', 'Coming soon'],
            ] as [$title, $desc, $sector, $status])
            <div class="bg-white border border-border rounded-2xl p-6 flex flex-col">
                <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">{{ $title }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-3 flex-1">{{ $desc }}</p>
                <div class="flex items-center justify-between mt-3 pt-3 border-t border-border">
                    <span class="text-xs font-body text-gray-400">{{ $sector }}</span>
                    <span class="text-xs font-body font-semibold text-orange bg-orange/10 px-2 py-0.5 rounded-full">{{ $status }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CHECKLISTS -->
<section class="py-16 lg:py-20 bg-white border-t border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex items-center justify-between mb-8">
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl">Checklists</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ([
                'Monthly Operator Checks — Washers',
                'Monthly Operator Checks — Dryers',
                'Pre-Service Preparation Checklist',
                'Post-Breakdown Information Sheet',
            ] as $checklist)
            <div class="bg-bg border border-border rounded-2xl p-5 flex items-start gap-3">
                <svg class="w-8 h-8 text-muted flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                </svg>
                <div>
                    <h3 class="font-heading font-semibold text-navy text-sm mb-1">{{ $checklist }}</h3>
                    <span class="text-xs font-body text-orange font-semibold">Coming soon</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SECTOR COLLECTIONS -->
<section class="py-16 lg:py-20 bg-bg border-t border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-8">Sector Collections</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ([
                [route('sectors.healthcare'), 'Healthcare', 'Hospitals, HSE and healthcare groups', 'bg-red-100 text-red-600'],
                [route('sectors.hospitality'), 'Hospitality', 'Hotels, guesthouses and leisure', 'bg-blue-100 text-steel'],
                [route('sectors.care'), 'Care Facilities', 'Nursing homes and residential care', 'bg-green-100 text-green-700'],
                [route('sectors.commercial'), 'Commercial', 'Commercial laundries and industry', 'bg-orange-100 text-orange'],
            ] as [$href, $title, $desc, $iconClass])
            <a href="{{ $href }}" class="group bg-white border border-border rounded-2xl p-5 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-10 h-10 rounded-lg {{ $iconClass }} flex items-center justify-center mb-3 group-hover:opacity-80 transition-opacity">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-sm mb-1 group-hover:text-steel transition-colors">{{ $title }} Resources</h3>
                <p class="font-body text-gray-500 text-xs leading-relaxed">{{ $desc }}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Looking for something specific?',
    'subheading' => 'Contact ILS directly and we will point you to the right information or connect you with an engineer.',
    'primaryText' => 'Contact ILS',
    'primaryHref' => '/contact',
])

@endsection
