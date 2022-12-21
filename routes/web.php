<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

Route::get('/home', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Anthony falah",
        "email" => "anthonyflh@gmail.com",
        "image" => "flazz.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

//halaman detail post
Route::get('posts/{slug}', [PostController::class, 'show']);


//login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//login Google
Route::get('/login/google', [LoginController::class, 'loginGoogle']);
Route::get('/login/google/callback', [LoginController::class, 'handleGooglecallback']);
