<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
    return view('home',[
        "title"=> "Home",
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "name"=> "Ivriel Gunawan",
        "email" => "gunawanivriel@gmail.com",
        "image"=> "download.jpg",
        "title"=>"About",
        'active' => 'about'
    ]);
});



Route::get('/posts', [
    PostController::class,'index'
]);

Route::get("posts/{post:slug}",[PostController::class,"show"]); // route model binding. defaultnya kalau post aja dia kirim id. makanya perlu ditambahi :slug biar dia kirim slug

Route::get('/categories',function(){
     return view('categories',[
        "title"=> 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login',[LoginController::class,'index']);
Route::get('/register',[RegisterController::class,'index']);