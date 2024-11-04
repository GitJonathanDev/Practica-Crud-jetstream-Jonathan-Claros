<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::controller(PersonaController::class)->group(function(){
    Route::get('/persona', 'index')->name('persona.index');
    Route::get('/persona/registrar', 'create')->name('persona.create');
    Route::post('/persona', 'store')->name('persona.store');
    Route::delete('/persona/{per_cod}', 'destroy')->name('persona.destroy');
    Route::get('/persona/{per_cod}', 'edit')->name('persona.edit');
    Route::put('/persona/{per_cod}', 'update')->name('persona.update');
    Route::post('/persona/buscar', 'search')->name('persona.search');
});

