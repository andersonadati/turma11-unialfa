<?php

use App\Http\Controllers\EstudanteController;
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

Route::get('/estudantes', [EstudanteController::class, 'index'])->name('estudantes.index');
Route::get('/estudantes/create', [EstudanteController::class, 'create'])->name('estudantes.create');
Route::get('/estudantes/{id}', [EstudanteController::class, 'show'])->name('estudantes.show');
Route::get('/estudantes/{id}/edit', [EstudanteController::class, 'edit'])->name('estudante.edit');

Route::post('/estudantes', [EstudanteController::class, 'store'])->name('estudantes.store');
Route::put('/estudantes/{id}', [EstudanteController::class, 'update'])->name('estudantes.update');
Route::delete('/estudante/{id}', [EstudanteController::class, 'destroy'])->name('estudante.destroy');




