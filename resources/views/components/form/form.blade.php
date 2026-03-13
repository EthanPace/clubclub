@props(['action', 'method' => "POST"])
<form class="flex flex-col gap-4 w-full" action="{{ $action }}" method="{{ $method }}">
    @csrf
    @if ($errors->any())
        <p class="text-red-500 text-sm mt-1 mx-auto">{{ $errors->first() }}</p>
    @else
        <p class="text-red-500 text-sm mt-1 mx-auto invisible">invisible placeholder</p>
    @endif
    {{ $slot }}
</form>