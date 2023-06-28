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

Route::redirect('/', '/beranda');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->middleware('guest');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'show']);
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'getData']);
Route::post('/admin', [App\Http\Controllers\AdminController::class, 'postData']);
Route::post('/admin/edit/{id}', [App\Http\Controllers\AdminController::class, 'editData']);
Route::delete('/admin/{id}', [App\Http\Controllers\AdminController::class, 'deleteData']);

// User
Route::get('/beranda', [App\Http\Controllers\GuestController::class, 'show']);
Route::get('/berita', [App\Http\Controllers\GuestController::class, 'berita']);
Route::get('/berita/detail-berita/{id}', [App\Http\Controllers\GuestController::class, 'detail_berita']);
Route::get('/detail-berita/{id}', [App\Http\Controllers\GuestController::class, 'detail_berita']);

//Post
Route::get('/create', [App\Http\Controllers\posts\PostController::class, 'create']);
Route::post('/posts', [App\Http\Controllers\posts\PostController::class, 'store']);
