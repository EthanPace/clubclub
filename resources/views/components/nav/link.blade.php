@props(['href'])

@php
    $page = ltrim(strtolower($href), '/');
    $active = request()->is($page);
@endphp

<div class="flex items-center gap-2 w-full">
    <span class="bg-{{ $active ? 'accent-main' : 'none' }} rounded-xl w-[3px] h-[30px] "></span>
    <a href="{{ $href }}" class="flex py-2 px-4 rounded-xl 
        {{ $active ? 'bg-accent-base text-accent-main' : 'hover:bg-base-700' }}
        text-md items-center font-bold w-full">
        {{ $slot }}
        <p>{{ ucfirst($page) }}</p>
    </a>
</div>

