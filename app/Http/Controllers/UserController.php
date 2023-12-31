<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Create(Request $request){
        $u = new User();

        $u -> name = $request -> post('name');
        $u -> surname = $request -> post('surname');
        $u -> email = $request -> post('email');
        $u -> password = Hash::make($request -> post('password'));

        $u -> save();

        return redirect('/login')->with('userCreated', true);
    }

    public function Login(Request $request){
        $login = $request->only([
            'email', 'password'
        ]);
        if(!Auth::attempt($login))
            return redirect('/login')->with('badLogin', true);
        
        return redirect('/')->with('goodLogin', true);            
    }

    public function Update(Request $request){

    }

    public function Delete(Request $request, $id){

    }

    public function Logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
