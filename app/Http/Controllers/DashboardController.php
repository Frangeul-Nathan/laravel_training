<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        // Façon manuel de le faire mais vu qu'on a déjà fait la relation hasMany on peut le faire d'une façon plus simple
        // $posts = Post::where('user_id', Auth::id())->get();

        $posts = Post::where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(6);


        // on passe dans la vue en tant que paramètre ['posts' => $posts]
        return view('users.dashboard', ['posts' => $posts]);
    }

}
