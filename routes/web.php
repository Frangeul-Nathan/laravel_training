<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Façon la plus rapide et efficace pour faire une route
Route::view('/', 'posts.index')->name('home');

// Façon plus longue mais marche également pour faire une route
// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);
