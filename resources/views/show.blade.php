@extends('layout')
@section('content')
    <div class="single-movie border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="single-movie" class="w64 md:w-96" />
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
                <div class="mt-2">
                    <div class="flex items-center text-gray-400">
                        <span><i class="fa-solid fa-star text-orange-500 text-sm"></i></span>
                        <span class="ml-1">{{ $movie['vote_average'] * 10 }}</span>
                        <span class="mx-2">|</span>
                        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        <span class="mx-2">|</span>
                        <span>
                            @foreach ($movie['genres'] as $genre)
                                {{ $genre['name'] }}@if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </span>
                    </div>
                </div>
                <p class="text-gray-300 mt-8">
                    {{ $movie['overview'] }}
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                                <div class="ml-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                    <div class="trailer mt-12 flex gap-5">
                        <a href="{{ $movie['homepage'] }}"
                            class="flex items-center bg-green-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-green-600 transition ease-in-out duration-150">
                            <i class="fa-solid fa-circle-play"></i>
                            <span class="ml-2">Website</span></a>

                        @if (count($movie['videos']['results']) > 0)
                            <a href="https://youtube.com/watch?v{{ $movie['videos']['results'][0]['key'] }}"
                                class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                                <i class="fa-solid fa-circle-play"></i>
                                <span class="ml-2">Play Trailer</span></a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-col-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                        <x-cast :cast="$cast" />
                    @endif
                @endforeach
            </div>

        </div>
    </div>
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Photos</h2>
            <div class="grid grid-cols-1 sm:grid-col-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($movie['images']['backdrops'] as $image)
                    @if ($loop->index < 9)
                        <x-image-card :image="$image" />
                    @endif
                @endforeach
            </div>

        </div>
    </div>
@endsection
