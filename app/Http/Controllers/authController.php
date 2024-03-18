<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    function login(User $user){
        $credentials = request()->validate([
            'email' =>'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            request()->session()->regenerate();

            return redirect()->route('user.show');
        }

        return back()->withErrors([
            'password' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    function logout(User $user){
        Auth::logout();

        request()->session()->invalidate();

        return redirect()->route('user.index');
    }
}
