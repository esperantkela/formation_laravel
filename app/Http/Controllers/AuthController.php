<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * return login form
     */
    public function login()
    {
        return view('login');
    }

    /**
     * authenticated user
     */

     public function authentificate(Request $request)
     {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt($request->only('email', 'password'))){
            return redirect()->route('dashboard');
        }
        return back()->withErrors('Les identifiants ne correspondent pas');
     }
}
