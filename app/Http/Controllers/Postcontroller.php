<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class Postcontroller extends Controller
{
    public function index(){
        return view('home', [
            "title" => "home",
            "posts" => Post::all()
    
        ]);
    }

    public function show($slug){
        return view('post', [
            "title" => "single post",
            "post" => Post::find($slug)
        ]);
    }
}
