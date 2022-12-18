@props(['cast'])

<div class="mt-8">
    <a href="#">
        <img src="https://image.tmdb.org/t/p/w500/{{ $cast['profile_path'] }}" alt="movies"
            class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <h2 class="text-lg mt-2 font-semibold text-gray-400">{{ $cast['original_name'] }}</h2>
        <h3 class="text-base text-gray-400">{{ $cast['character'] }}</h3>
    </div>
</div>
