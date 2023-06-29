<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function Create(Request $request){
        $u = new User();

        $u -> name = $request -> post('name');
        $u -> surnname = $request -> post('surname');
        $u -> email = $request -> post('email');
        $u -> password = Hash::make($request -> post('password'));

        $u -> save();

        return redirect('/')->with('userCreated', true);
    }

    public function Read(Request $request){

    }

    public function Update(Request $request){

    }

    public function Delete(Request $request, $id){

    }
}
