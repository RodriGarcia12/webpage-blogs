<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function Create(Request $request){
        $b = new Blog();
        $b -> author = $request -> post('author');
        $b -> title = $request -> post('title');
        $b -> text = $request -> post('text');
        $b -> created_at = $created_at->format('d-m-Y');
        $b -> save();

        return redirect('/')->with('blogCreated', true);
    }

    public function Read(Request $request){
        $b = Blog::paginate(3);
        
        return view('home',[
            'blogs' => $b
        ]);
    }

    public function Details(Request $request, $id){
        $blog = Blog::findOrFail($id);

        return redirect('/update', [
            'blogs' => $blog
        ]);
    }

    public function Update(Request $request, $id){
        $blog = Blog::findOrFail($id);

        $blog -> title = $request -> post('title');
        $blog -> text = $request -> post('text');
        
        $blog -> save();

        return redirect('/');
    }

    public function Delete(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $blog -> delete();

        return redirect('/');
    }

}
