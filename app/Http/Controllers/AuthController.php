<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Register User
    public function  register(Request $request){
        // Validate
        $request->validate([
            'username' => 'required | min:3 | max:15',
            'email' => 'required | max:30 | email',
            'password' => 'required | min:5 | max:20 | confirmed'
        ]);

        dd('ok');

        // Register

        // Login

        // Redirect
    }
}
