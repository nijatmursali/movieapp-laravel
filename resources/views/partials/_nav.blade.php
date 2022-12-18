<header>
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex gap-2 flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li>
                    <a href="/">MovieApp</a>
                </li>
                <li class="ml-16">
                    <a href="/" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="ml-6">
                    <a href="{{ route('shows.index') }}" class="hover:text-gray-300">Tv Shows</a>
                </li>
                <li class="ml-6">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex items-center">
                <livewire:search-dropdown>
                    <div class="ml-4"><a href="#"><img src="/img/avatar.png" alt="avatar"
                                class="rounded-full w-8 h-8" /></a></div>
            </div>
        </div>
    </nav>
</header>
