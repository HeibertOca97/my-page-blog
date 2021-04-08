<?php

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

\Illuminate\Support\Facades\Auth::routes(["register" => false, "verify"=>false]);

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('inicio');

Route::get('/portafolio', [App\Http\Controllers\PageController::class, 'project'])->name('portafolio');

Route::get('/acerca-de', [App\Http\Controllers\PageController::class, 'about'])->name('about');

Route::post('/message-contact/author-web-sitie', [App\Http\Controllers\PageController::class, 'store'])->name('contactar');

Route::get('/blog', [App\Http\Controllers\PageController::class, 'blog'])->name('blog');

Route::get('/politica-de-privacidad', [App\Http\Controllers\PageController::class, 'privacy'])->name('privacy');

Route::get('/login', [App\Http\Controllers\PageController::class, 'login'])->name('login');

