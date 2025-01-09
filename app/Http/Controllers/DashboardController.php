<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Routing\Controllers\HasMiddleware;
// use Illuminate\Routing\Controllers\Middleware;

// Appel de la fonction "implements HasMiddleware" pour utiliser le middleware et dans le cas ou on veut faire un middleware bien plus poussé
class DashboardController extends Controller
{

    // public static function middleware(): array
    // {
    //     return [
    //         'auth'
    //     ];
    // }

    public function index(){
        return view('users.dashboard');
    }

}
