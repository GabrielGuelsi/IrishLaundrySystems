{{-- Keep the support matched to the equipment — 4 service cards (shared) --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-start">

            {{-- Left: heading + description --}}
            <div class="lg:col-span-1 reveal">
                <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-4">
                    Keep the support matched to the equipment
                </h2>
                <p class="font-body text-gray-500 text-sm leading-relaxed">
                    The right support answer has to account for installed-base reality, operational continuity, and the next commercial step.
                </p>
            </div>

            {{-- Right: 4 service cards --}}
            <div class="lg:col-span-4 grid grid-cols-2 lg:grid-cols-4 gap-5 reveal">
                @foreach([
                    [
                        'img'   => '/images/healthcare/Service%20Network.png',
                        'title' => 'Service Network',
                        'bold'  => 'You can count on',
                        'body'  => 'more than 2,200 authorised service partners, always available, always on duty — committed to support you with a service network that makes your operations easier.',
                    ],
                    [
                        'img'   => '/images/healthcare/Service%20Agreements.png',
                        'title' => 'Service Agreements',
                        'bold'  => 'You can choose from',
                        'body'  => 'flexible tailored packages, according to your business needs, offering a variety of products maintenance and support services.',
                    ],
                    [
                        'img'   => '/images/healthcare/Accessories%20%26%20Consumables.png',
                        'title' => 'Accessories & Consumables',
                        'bold'  => 'You can rely on',
                        'body'  => 'original Accessories & Consumables, rigorously tested by Electrolux Professional experts to ensure efficiency, durability, and the safety of your users.',
                    ],
                    [
                        'img'   => '/images/healthcare/Lifecycle%20Support.png',
                        'title' => 'Lifecycle Support',
                        'bold'  => 'You can plan ahead',
                        'body'  => 'with structured lifecycle continuity — keeping your installed base connected to repairs, call-outs, parts, and aftercare across Ireland.',
                    ],
                ] as $card)
                <div class="flex flex-col">
                    {{-- Circular image with small text circle overlay --}}
                    <div class="flex justify-center mb-[-60px] relative z-10">
                        <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-md relative">
                            <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-24 h-24 rounded-full flex items-center justify-center text-center" style="background-color: rgba(100,160,210,0.65);">
                                    <h4 class="font-heading font-bold text-white text-xs leading-snug px-2">{{ $card['title'] }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Card body --}}
                    <div class="bg-[#deeaf6] rounded-2xl pt-20 pb-6 px-5 flex-1">
                        <p class="font-body text-navy/80 text-sm leading-relaxed">
                            <strong class="font-bold text-navy">{{ $card['bold'] }}</strong> {{ $card['body'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
