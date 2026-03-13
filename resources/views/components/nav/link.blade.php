@props(['href'])

@php
    $page = ltrim(strtolower($href), '/');
    $active = request()->is($page);
@endphp

<div class="flex items-center gap-3 w-full">
    <span class="bg-{{ $active ? 'accent-main' : 'none' }} rounded-xl w-[3px] h-[35px] "></span>
    <a href="{{ $href }}" class="flex py-2 px-4 rounded-xl {{ $active ? 'bg-accent-base' : 'hover:bg-base-700' }} text-lg items-center font-bold w-full">
        {{ $slot }}
        <p>{{ ucfirst($page) }}</p>
    </a>
</div>

