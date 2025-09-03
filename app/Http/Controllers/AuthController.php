<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerView() {
        return view("auth.register");
    }   

    public function register(RegisterRequest $request){

        try {

            $user=new User();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=Hash::make($request->password);

            $user->save();
            
            return redirect()->route('login.view')->with('success', 'Utilisateur créé avec succès');
        
        } catch (\Throwable $th) {
            return redirect()->route('register')->with('error', 'Une erreur est survenue');
        }

    }


    public function loginView() {
        return view('auth.login');
    }

}
