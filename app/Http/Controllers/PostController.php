<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Posts',
            'posts' => Post::all(),
        ]);
    }

    public function show(Post $post) { // route model binding
            
    return view("post",[
        "title" =>'Single Post',
        "post" => $post
    ]);
    }
}

