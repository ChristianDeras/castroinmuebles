<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller 
{
    public function register (Request $request){

    }
    public function login (Request $request){
        $credentials = [
            "name" => $request->name,
            "password" => $request->password
        ];

        if (Auth::attempt($credentials,false)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }else{
            return redirect('login');
        }
    }
    public function logout (Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }

}

