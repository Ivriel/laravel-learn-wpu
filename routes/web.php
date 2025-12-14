<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
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
        "title"=> "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "name"=> "Ivriel Gunawan",
        "email" => "gunawanivriel@gmail.com",
        "image"=> "download.jpg",
        "title"=>"About"
    ]);
});



Route::get('/posts', [
    PostController::class,'index'
]);

Route::get("posts/{post:slug}",[PostController::class,"show"]); // route model binding. defaultnya kalau post aja dia kirim id. makanya perlu ditambahi :slug biar dia kirim slug

Route::get('/categories',function(){
     return view('categories',[
        "title"=> 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}',function(Category $category){
    return view('category',[
        "title"=> $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});