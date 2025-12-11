<?php

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



Route::get('/blog', function () {

    $blog_posts = [
    [
        "title" =>"Judul Post Pertama",
        "slug"=>"judul-post-pertama",
        "author" => "Ivriel Gunawan",
        "body" => "
Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, possimus commodi dolorum delectus voluptatum, numquam quidem et cupiditate blanditiis, incidunt illum eaque consequatur officiis doloribus rem nam assumenda. Consequuntur nihil vero sapiente quam velit praesentium autem eligendi cupiditate sed quo? Excepturi tempora aspernatur praesentium quos delectus tempore corrupti hic quasi veritatis dicta laudantium magnam porro fugit doloribus, eum ut et eius ad repellat, id natus. Accusamus ipsum voluptas ducimus officiis, eaque, incidunt tenetur cum facilis dignissimos similique minima, vitae deserunt.",
    ],
    [
        "title" =>"Judul Post Kedua",
        "slug"=>"judul-post-kedua",
        "author" => "Buddy Steve",
        "body" => "
Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, 
possimus commodi dolorum delectus voluptatum, numquam quidem et cupiditate 
blanditiis, incidunt illum eaque consequatur officiis doloribus rem nam assumenda.
 Consequuntur nihil vero sapiente quam velit praesentium autem eligendi cupiditate sed quo?
  Excepturi tempora aspernatur praesentium quos delectus tempore corrupti hic quasi veritatis
   dicta laudantium magnam porro fugit doloribus, eum ut et eius ad repellat, id natus. Accusamus 
   ipsum voluptas ducimus officiis, eaque, incidunt tenetur cum facilis dignissimos similique
    minima, vitae deserunt.
OSAS
",
    ]
    ];

    return view('posts',[
        "title"=>"Posts",
        "posts" => $blog_posts
    ]);
});

Route::get("posts/{slug}",function($slug){
      $blog_posts = [
    [
        "title" =>"Judul Post Pertama",
        "slug"=>"judul-post-pertama",
        "author" => "Ivriel Gunawan",
        "body" => "
Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, possimus commodi dolorum delectus voluptatum, numquam quidem et cupiditate blanditiis, incidunt illum eaque consequatur officiis doloribus rem nam assumenda. Consequuntur nihil vero sapiente quam velit praesentium autem eligendi cupiditate sed quo? Excepturi tempora aspernatur praesentium quos delectus tempore corrupti hic quasi veritatis dicta laudantium magnam porro fugit doloribus, eum ut et eius ad repellat, id natus. Accusamus ipsum voluptas ducimus officiis, eaque, incidunt tenetur cum facilis dignissimos similique minima, vitae deserunt.",
    ],
    [
        "title" =>"Judul Post Kedua",
        "slug"=>"judul-post-kedua",
        "author" => "Buddy Steve",
        "body" => "
Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, 
possimus commodi dolorum delectus voluptatum, numquam quidem et cupiditate 
blanditiis, incidunt illum eaque consequatur officiis doloribus rem nam assumenda.
 Consequuntur nihil vero sapiente quam velit praesentium autem eligendi cupiditate sed quo?
  Excepturi tempora aspernatur praesentium quos delectus tempore corrupti hic quasi veritatis
   dicta laudantium magnam porro fugit doloribus, eum ut et eius ad repellat, id natus. Accusamus 
   ipsum voluptas ducimus officiis, eaque, incidunt tenetur cum facilis dignissimos similique
    minima, vitae deserunt.
OSAS
",
    ]
    ];

    $new_post = null;

    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
            break;
        }
    }

    return view("post",[
        "title" =>'Single Post',
        "post" => $new_post
    ]);
});