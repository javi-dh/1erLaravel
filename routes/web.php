<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('welcome');
});

Route::get('movies', 'MoviesController@index');
Route::get('movies/detail/{id}', 'MoviesController@searchMovieById');
Route::get('movies/test', 'MoviesController@test');

// Route::get('movies/detail/{id}', 'MoviesController@detail');
// Route::get('movies/create', 'MoviesController@createForm');
// Route::post('movies/create', 'MoviesController@create');
// Route::get('movies/update/{id}', 'MoviesController@updateForm');
// Route::put('movies/update/{id}', 'MoviesController@update');
// Route::delete('movies/delete/{id}', 'MoviesController@delete');
