<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-base-900 text-white flex h-screen w-screen font-['Outfit']">
        <x-nav/>
        <main class="p-4 flex flex-col gap-4">
            {{ $slot }}
        </main>
    </body>
</html>
