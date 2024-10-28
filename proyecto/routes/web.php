<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController; #importamos el controlador generado "PostController"
use App\Http\Controllers\ContactController; #importamos el controlador generado "ContactController"
use App\Http\Controllers\VideoController; #importamos el controlador generado "VideoController"
use App\Http\Controllers\SuggestionController; #importamos el controlador generado "SuggestionController"


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'welcome')->name('welcome'); //Ruta tipo get para acceso de página de inicio
Route::view('contacto', 'contacto')->name('contacto'); //Ruta de tipo get para acceso de página de contacto
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store'); //Ruta de tipo post para recibir los datos de página de contacto
Route::get('/blog', [PostController::class, 'index'])->name('posts.index'); //Ruta de tipo get para acceso de página de blog
Route::post('/blog', [PostController::class, 'store'])->name('posts.store'); //Ruta de tipo post para recibir los datos de página de blog
Route::get('/videos', [VideoController::class, 'index'])->name('videos'); //Ruta de tipo get para acceso de página de videos
Route::view('login', 'login')->name('login'); //Ruta de tipo get para acceso de página de login
Route::post('/suggest', [SuggestionController::class, 'store'])->name('suggestion.store'); //Ruta de tipo post para acceso a barra de sugerencias

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';