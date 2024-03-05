<?php

use App\Livewire\Ajustes\Ajustes;
use App\Livewire\Usuarios\Listar;
use App\Livewire\Empresas\Empresa;
use Illuminate\Support\Facades\Route;

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

    // empresas
    Route::get('/empresas', Empresa::class)->name('empresas');
    // reportes
    Route::get('/reportes', function () {
        return view('dashboard');
    })->name('reportes');
    // usuarios
    Route::get('/usuarios', Listar::class)->name('usuarios');
    // ajustes
    Route::get('/ajustes', Ajustes::class)->name('ajustes');

});
