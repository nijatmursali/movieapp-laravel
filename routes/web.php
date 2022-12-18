<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MovieController@index')->name('movies.index');
Route::get('/movies/{id}', 'MovieController@show')->name('movies.show');

Route::get('/shows', 'TvShowController@index')->name('shows.index');
Route::get('/shows/{id}', 'TvShowController@show')->name('shows.show');

Route::get('/actors', 'ActorController@index')->name('actors.index');
Route::get('/actors/{id}', 'ActorController@show')->name('actors.show');
