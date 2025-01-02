<?php

use Illuminate\Support\Facades\Route;

// Façon la plus rapide et efficace pour faire une route
Route::view('/', 'posts.index')->name('home');

// Façon plus longue mais marche également pour faire une route
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

