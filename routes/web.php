<?php

use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
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
Route::get('login', [Logincontroller::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [Logincontroller::class, 'signin']);
Route::post('logout', [Logincontroller::class, 'logout']);


//register controller
Route::get('register', [Registercontroller::class, 'index'])->middleware('guest');
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


Route::get('/dashboard', [Dashboardcontroller::class, 'index'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostcontroller::class)->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostcontroller::class, 'checkSlug'] )->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');