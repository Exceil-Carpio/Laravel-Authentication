<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    function index(){
        if(Auth::check()){
            return view('LoggedIn', ['user' => Auth::user()]);
        }
        return view('welcome');
    }

    function create(){
        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);

        User::create($data);
        return redirect()->back();
    }

    function show(){
        $user = Auth::user();
        return view('LoggedIn', compact('user'));
    }

    function update(User $user){
        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

        $user->update($data);
        return view('welcome');
    }

    function delete(User $user){
        if($user->delete()){
            return view('welcome');
        }
    }
}
