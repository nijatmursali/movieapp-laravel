<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $popularMovies = Http::withToken(
            config('services.tmdb.token')
        )->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];

        $nowPlayingMovies = Http::withToken(
            config('services.tmdb.token')
        )->get('https://api.themoviedb.org/3/movie/now_playing')->json()['results'];
        $genresArray = Http::withToken(
            config('services.tmdb.token')
        )->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        //dd($popularMovies);

        return view('index', ['movies' => $popularMovies, 'genres' => $genres, 'nowPlaying' => $nowPlayingMovies]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::withToken(
            config('services.tmdb.token')
        )->get('https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=credits,videos,images')->json();
        return view('show', [
            'movie' => $movie
        ]);
    }
}
