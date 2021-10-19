<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Support\Str;
use App\Models\category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => category::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatesData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'body' => 'required',
            'category_id' => 'required',
            'image' => 'image|file'
        ]);


        $validatesData['user_id'] = auth()->user()->id;
        $validatesData['script'] = Str::limit(strip_tags( $request->body, 100));

        Post::create($validatesData);
        return redirect('/dashboard/posts')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => category::all()
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
            'category_id' => 'required',
        ];

        // fungsi agar gak ada slug yg numpuk
        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }
        $validatesData = $request->validate($rules);

        $validatesData['user_id'] = auth()->user()->id;
        $validatesData['script'] = Str::limit(strip_tags( $request->body, 100));

        Post::where('id', $post->id)->update($validatesData);
        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'post has been deleted'); 
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
