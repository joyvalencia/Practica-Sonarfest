<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\ArtistaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('artistes', ArtistaController::class)->parameters([
    'artistes' => 'artista'
])->middleware('auth');


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/concerts', [ConcertController::class, 'index'])->name('concerts.index');
    Route::get('/concerts/create', [ConcertController::class, 'create'])->name('concerts.create');
    Route::post('/concerts', [ConcertController::class, 'store'])->name('concerts.store');
    Route::get('/concerts/{concert}', [ConcertController::class, 'show'])->name('concerts.show');
});

//rutas de entrada
Route::middleware('auth')->group(function () {
    Route::get('/entrades', [EntradaController::class,
        'mevesentrades'])->name('entrades.meves');
    Route::get('/concerts/{concert}/comprar', [EntradaController::class,
        'create'])->name('entrades.create');
    Route::post('/concerts/{concert}/comprar', [EntradaController::class,
        'store'])->name('entrades.store');
    Route::get('/concerts/{concert}/assistents', [EntradaController::class,
        'assistents'])->name('entrades.assistents');
});

require __DIR__.'/auth.php';
