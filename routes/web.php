<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

// Façon la plus rapide et efficace pour faire une route
// Route::view('/', 'posts.index')->name('home');

// Façon plus longue mais marche également pour faire une route
// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

Route::redirect('/', '/posts');

// On utilise la méthode resource pour créer plusieurs routes en une seule ligne, un CRUD.
Route::resource('posts', PostController::class);

// Middleware auth qui regroupe plusieurs routes pour éviter de les répéter et donc simplifier le code
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


// Middleware guest qui regroupe plusieurs routes pour éviter de les répéter et donc simplifier le code
Route::middleware(['guest'])->group(function () {

    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});



