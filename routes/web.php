<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Programas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/ver/{id_programa}', [Programas::class, 'show'])->name('ver');

Route::get('/play/{id_episodio}/{id_programa}', [Programas::class, 'playPrograma'])->name('play');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/favoritos', function () {
        return view('favoritos');
    })->name('favoritos');

    Route::get('/ajustes', function () {
        return view('ajustes');
    })->name('ajustes');
});
