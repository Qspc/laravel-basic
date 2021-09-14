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

    public function show(Post $post){
        return view('post', [
            "title" => "single post",
            "post" => $post
        ]);
    }

    public function create(){
        return view('posts.create');
    }
}