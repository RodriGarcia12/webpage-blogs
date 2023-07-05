<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function Create(Request $request){
        $b = new Blog();

        $b -> title = $request -> post('title');
        $b -> text = $request -> post('text');
        
        $b -> save();

        return redirect('/')->with('blogCreated', true);
    }

    public function Read(Request $request){
        $b = Blog::all();

        return view('home',['blogs' => $b]);
    }

    public function Update(Request $request){

    }

    public function Delete(Request $request, $id){

    }

}
