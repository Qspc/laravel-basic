<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

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

Route::get('home', [Postcontroller::class, 'index']);


Route::get('posts/{slug}', [Postcontroller::class, 'show']);