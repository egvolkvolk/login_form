<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Providers\RouteServiceProvider; 

class LoginController extends Controller
{
    public function create(){
        return view('login');
    }

    public function store(Request $request){
       $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string|min:5',
       ]);

       if(Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))){
        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::HOME);
       }

       return back()
            ->withInput()
            ->withErrors([
                'email' => 'Incorret email or password'
            ]);
    }

    public function destroy(){
        Auth::logout();
        return redirect()->route('index');
    }

}
