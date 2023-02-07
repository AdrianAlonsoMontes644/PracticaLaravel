<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::resource('generos', \App\Http\Controllers\GeneroController::class)->middleware('auth');
Route::resource('peliculas', \App\Http\Controllers\PeliculaController::class)->middleware('auth');
Route::resource('libros', \App\Http\Controllers\LibroController::class)->middleware('auth');
Route::resource('series', \App\Http\Controllers\SeriesController::class)->middleware('auth');
Route::resource('juegos', \App\Http\Controllers\JuegoController::class)->middleware('auth');
Route::resource('comics', \App\Http\Controllers\ComicController::class)->middleware('auth');
Route::resource('animes', \App\Http\Controllers\AnimeController::class)->middleware('auth');
Route::resource('mangas', \App\Http\Controllers\MangaController::class)->middleware('auth');
Route::resource('empezado', \App\Http\Controllers\EmpezadoController::class)->middleware('auth');
Route::resource('interes', \App\Http\Controllers\IntereController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
