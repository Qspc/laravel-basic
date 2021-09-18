<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Models\category;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "title" => "laravel"
    ]);
});

Route::get('/post', function () {
    return view('post', [
        "title" => "post"
    ]);
});

//home awal
Route::get('home', [Postcontroller::class, 'index']);
//home tiap post masing2
Route::get('posts/{post:slug}', [Postcontroller::class, 'show']);
//home sorting kategori
Route::get('categories/{category:slug}', function (category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
//home sorting user
Route::get('author/{user}', function (User $user) {
    return view('posts', [
        'title' => 'User post',
        'posts' => $user->post,
    ]);
});