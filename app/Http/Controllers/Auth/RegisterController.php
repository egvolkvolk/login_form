<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Providers\RouteServiceProvider; 

class RegisterController extends Controller
{
    public function create(){
        return view('registration');
    }

    public function store(Request $request){
       $request->validate([
        'name' => 'required|string',
        'email' => 'required|string|email|unique:users',
        'password' => 'required|confirmed|min:5',
       ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

    Auth::login($user);
    return redirect(RouteServiceProvider::HOME);

    }

}
