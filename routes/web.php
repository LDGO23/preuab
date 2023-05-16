<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return redirect()->route('usuarios.index');

});

// Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');

// Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');

// Route::post('/usuarios/store', [UsuariosController::class, 'store'])->name('usuarios.store');

Route::resource('usuarios',UsuariosController::class);
Auth::routes();
Route::put('usuarios/{usuario}/cambiar-estado', [UsuariosController::class, 'cambiarEstado'])->name('usuarios.cambiar_estado');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
