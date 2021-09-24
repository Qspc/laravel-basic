<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Clockwork\Storage\Search;

class Postcontroller extends Controller
{
    public function index(){
        // dd(request('search'));
        // $posts = Post::latest();

        // if(request('search')){
        //     $posts->where('title', 'like', '%', request('search'), '%');
        // }

        return view('home', [
            "title" => "home",
            "posts" => Post::latest()
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