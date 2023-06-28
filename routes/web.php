<?php

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
    return view('user.home');
});

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->middleware('guest');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'show']);
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'showAdmin']);

// User
Route::get('/beranda', [App\Http\Controllers\GuestController::class, 'show']);
Route::get('/berita', [App\Http\Controllers\GuestController::class, 'berita']);
Route::get('/berita/detail-berita', [App\Http\Controllers\GuestController::class, 'detail_berita']);
Route::get('/detail-berita', [App\Http\Controllers\GuestController::class, 'detail_berita']);

//Post
Route::get('/create', [App\Http\Controllers\posts\PostController::class, 'create']);
Route::post('/posts', [App\Http\Controllers\posts\PostController::class, 'store']);