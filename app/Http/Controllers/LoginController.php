<?php

namespace App\Http\Controllers;

use App\Models\Corretaje;
use App\Models\Remodelacion;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vivienda;
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
            $corretajesAtendidos = Corretaje::where('estado',0)->count();
            $corretajesNoAtendidos = Corretaje::where('estado',1)->count();
            $remodelacionesAtendidas = Remodelacion::where('estado',0)->count();
            $remodelacionesNoAtendidas = Remodelacion::where('estado',1)->count();
            $imagenes = Vivienda::count();
            session([
                'corretajesAtendidos' => $corretajesAtendidos,
                'corretajesNoAtendidos' => $corretajesNoAtendidos,
                'remodelacionesAtendidas' => $remodelacionesAtendidas,
                'remodelacionesNoAtendidas' => $remodelacionesNoAtendidas,
                'imagenes' => $imagenes,
            ]);
            
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

