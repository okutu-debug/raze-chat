<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //----------------register--------------------------
    public function register(){
        return view("auth.register");
    }

    //------------register store-----------------------
    public function store(){
        $validated=request()->validate([
            "name"=> "required",
            "email"=> "required|unique:users,email|email",
            "password"=> "required|min:5|confirmed"
        ]);
        User::create([
            "name"=> $validated['name'],
            "email"=> $validated['email'],
            "password"=> Hash::make($validated['password'])
        ]);
        return redirect()->route('login')->with('success','Account successfully created');
    }

    //---------------------login-----------------------
    public function login(){
        return view("auth.login");
    }

    //--------------login validate----------------------
    public function validate(){
        request()->session()->regenerate();
        $validated=request()->validate([
            "email"=> "required",
            "password"=> "required"
        ]);
        if(auth()->attempt($validated)){
            request()->session()->regenerate();
            return redirect()->route('dashboard')->with('success','Login successful');
        }
        return redirect()->route('login')->withError([
            'email'=>'Invalid email or password'
        ]);
    }

     //---------------------logout----------------------
    public function logout(){
        auth()->logout(); // This logs out the currently authenticated user.
        request()->session()->invalidate(); // This invalidates the user's session.
        request()->session()->regenerateToken(); // This regenerates the CSRF token to prevent CSRF attacks.
        return redirect()->route('login')->with('success','Logout successful'); // Redirects the user to the login page with a success message.
    }

}
