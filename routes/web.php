<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/notes', [NoteController::class, 'index'])
    ->middleware('auth')
    ->name('notes.index');

Route::get('/notes/create', [NoteController::class, 'create'])
    ->middleware('auth')
    ->name('notes.create');

Route::post('/notes', [NoteController::class, 'store'])
    ->middleware('auth')
    ->name('notes.store');

Route::get('/notes/{note}', [NoteController::class, 'show'])
    ->middleware('auth')
    ->name('notes.show');

Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])
    ->middleware('auth')
    ->name('notes.edit');

Route::put('/notes/{note}', [NoteController::class, 'update'])
    ->middleware('auth')
    ->name('notes.update');

Route::delete('/notes/{note}', [NoteController::class, 'destroy'])
    ->middleware('auth')
    ->name('notes.destroy');
