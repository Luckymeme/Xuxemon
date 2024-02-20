<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\AuthController;

// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/submit_login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas protegidas con autenticación y middleware de rol
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::middleware(['role:0'])->group(function () {
        Route::get('/pokemons', [PokemonController::class, 'index'])->name('pokemons.index');
        Route::get('/pokemons/create', [PokemonController::class, 'create'])->name('pokemons.create');
        Route::post('/pokemons', [PokemonController::class, 'store'])->name('pokemons.store');
        Route::get('/pokemons/{id}', [PokemonController::class, 'show'])->name('pokemons.show');
        Route::get('/pokemons/{id}/edit', [PokemonController::class, 'edit'])->name('pokemons.edit');
        Route::put('/pokemons/{id}', [PokemonController::class, 'update'])->name('pokemons.update');
        Route::delete('/pokemons/{id}', [PokemonController::class, 'destroy'])->name('pokemons.destroy');
    });
});
