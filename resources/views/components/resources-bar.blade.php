{{-- Slim inline resources bar — one compact band, dot-separated links, group dividers.
     Replaces the older 3-column wrapping grid that left large blank gaps.
     Usage: @include('components.resources-bar', ['groups' => [
         ['title' => 'Official Resources', 'links' => [['l' => '…', 'h' => '…'], …]],
         …
     ]]) --}}
@php($groups = $groups ?? [])
<section class="py-5 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex flex-wrap items-center gap-x-5 gap-y-3">
            @foreach($groups as $grp)
            <div class="flex flex-wrap items-baseline gap-x-2.5 gap-y-1">
                <span class="font-heading font-bold text-navy text-xs uppercase tracking-[0.22em] mr-1">{{ $grp['title'] }}</span>
                @foreach($grp['links'] as $lk)
                <a href="{{ $lk['h'] }}" class="font-body text-sm text-gray-600 hover:text-[#148af4] transition-colors whitespace-nowrap">{{ $lk['l'] }}</a>
                @if(!$loop->last)<span class="text-gray-300 select-none" aria-hidden="true">&middot;</span>@endif
                @endforeach
            </div>
            @if(!$loop->last)<span class="hidden lg:inline-block w-px h-4 bg-gray-300 self-center" aria-hidden="true"></span>@endif
            @endforeach
        </div>
    </div>
</section>
