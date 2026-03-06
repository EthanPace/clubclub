@props(['type' => "text", 'name', 'value' => ''])
<input class="bg-[#1b1b18] text-[#0a0a0a] rounded p-2" 
    type="{{ $type }}"
    id="{{ $name }}"
    name="{{ $name }}" 
    placeholder="{{ ucwords($name) }}"
    value="{{ $value }}"
>{{ $slot ?? '' }}</input>