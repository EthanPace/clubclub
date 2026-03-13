<nav class="h-100% w-[20rem] bg-base-800 rounded py-4 pr-4 flex flex-col gap-1">
    <div class="flex items-center m-6">
        <x-heroicon-s-chat-bubble-left-right class="w-10 h-10 mr-3 inline bg-accent-main p-1 rounded-xl"/>
        <h1 class="text-3xl font-bold">ClubClub</h1>
    </div>

    <x-nav.link href="/clubs">
        <x-heroicon-s-squares-2x2 class="w-5 h-5 mr-2"/>
    </x-nav.link>

    <x-nav.link href="/lists">
        <x-heroicon-s-bookmark class="w-5 h-5 mr-2"/>
    </x-nav.link>

    <x-nav.link href="/reading">
        <x-heroicon-s-book-open class="w-5 h-5 mr-2"/>
    </x-nav.link>

    <x-nav.link href="/watching">
        <x-heroicon-s-film class="w-5 h-5 mr-2"/>
    </x-nav.link>

    <x-nav.link href="/playing">
        <x-heroicon-s-puzzle-piece class="w-5 h-5 mr-2"/>
    </x-nav.link>

    <x-nav.link href="/doing">
        <x-heroicon-s-identification class="w-5 h-5 mr-2"/>
    </x-nav.link>

    <x-nav.link href="/bookmarks">
        <x-heroicon-s-star class="w-5 h-5 mr-2"/>
    </x-nav.link>

    <x-nav.link href="/writing">
        <x-heroicon-s-backspace class="w-5 h-5 mr-2"/>
    </x-nav.link>
</nav>