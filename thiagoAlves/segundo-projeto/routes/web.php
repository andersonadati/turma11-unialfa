<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\TemporadasController;
use App\Http\Controllers\EpisodiosController;
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

Route::get('/series', [SerieController::class, 'index'])->name('series.index');
Route::get('/series/create', [SerieController::class, 'create'])->name('series.create');

Route::post('/series', [SerieController::class, 'store'])->name('series.store');
Route::get('/series/{id}', [SerieController::class, 'show'])->name('series.show');
Route::delete('/series/{id}', [SerieController::class, 'destroy'])->name('series.destroy');
Route::get('/series/{id}/temporadas/', [TemporadasController::class, 'index'])->name('temporadas.index');
Route::post('/series/editaNome', [SerieController::class, 'editaNome'])->name('series.editaNome');

Route::get('/temporadas/{temporada}/episodios', [EpisodiosController::class, 'index'])->name('episodios.index');

Route::post('/temporadas/{temporada}/episodios/assistir', [EpisodiosController::class, 'assistir']);
