<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Appel du model User
use App\Models\User;
// Appel de Auth pour utiliser la méthode
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register User
    public function  register(Request $request){
        // Validate
        // Ajout d'une variable $fields pour stocker les données de la requête qui en suite est appelé dans la méthode user
        $fields = $request->validate([
            'username' => 'required | min:3 | max:15',
            'email' => 'required | max:30 | email | unique:users',
            'password' => 'required | min:5 | max:20 | confirmed'
        ]);

        // Register
        // Ajout de la méthode create pour enregistrer les données dans la base de données, ensuite création d'une variable $user pour stocker les données de la requête
        $user = User::create($fields);

        
        // Login
        // Ajout de la méthode Auth pour se connecter automatiquement après l'inscription
        Auth::login($user);

        // Redirect
        return redirect()->route('home');
    }

    // Login User
    public function login(Request $request){
        // Validate
        $fields = $request->validate([
            'email' => 'required | max:30 | email',
            'password' => 'required'
        ]);
        

        // Try to login the user
        if(Auth::attempt($fields, $request->remember)){
            // Va faire une redirection sur la page ou l'utilisateur voulait êtreavant de se connecter
            return redirect()->intended('/');
        } else {
            // Si les identifiants ne sont pas corrects, on retourne un message d'erreur
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.'
            ]);
        }
    }
}
