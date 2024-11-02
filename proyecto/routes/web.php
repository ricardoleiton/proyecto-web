<?php
// routes/web.php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\SuggestionController;
use App\Http\Middleware\AdminMiddleware; // Importa el middleware

// Rutas públicas
Route::view('/', 'welcome')->name('welcome');
Route::view('contacto', 'contacto')->name('contacto');
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/videos', [VideoController::class, 'index'])->name('videos');
Route::view('login', 'login')->name('login');
Route::post('/suggest', [SuggestionController::class, 'store'])->name('suggestion.store');

// Dashboard protegido por auth y verificación de email
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas protegidas por auth y admin (solo para administradores)
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index'); // Ruta para listar usuarios
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

require __DIR__.'/auth.php';

