@props(['image'])
<div class="mt-8">
    <img src="https://image.tmdb.org/t/p/w500/{{ $image['file_path'] }}" alt="movies"
        class="hover:opacity-75 transition ease-in-out duration-150">
</div>
