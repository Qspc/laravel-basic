<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

//login controller
Route::get('login', [Logincontroller::class, 'index']);

//register controller
Route::get('register', [Registercontroller::class, 'index']);
Route::post('register', [Registercontroller::class, 'store']);


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
Route::get('author/{user:id}', function (User $user) {
    return view('posts', [
        'title' => $user->name,
        'posts' => $user->posts,
    ]);
});