@props(['type' => "text", 'name', 'value' => ''])
<input class="bg-base-800 text-white rounded-xl p-2 font-bold font-['Outfit'] 
    focus:outline-none focus:ring-2 focus:ring-accent-main focus:ring-offset-2 focus:ring-offset-base-900 w-full" 
    type="{{ $type }}"
    id="{{ $name }}"
    name="{{ $name }}" 
    placeholder="{{ ucwords($name) }}"
    value="{{ $value }}"
>{{ $slot ?? '' }}</input>