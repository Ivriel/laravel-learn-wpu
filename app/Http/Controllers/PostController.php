<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'All Posts',
            "active" => 'posts',
            // 'posts' => Post::all(), 
            // pakai eager loading (with)
            'posts' => Post::latest()->get(), // biar urutan postingannya terurut berdasarkan id
            ]);
    }

    public function show(Post $post) { // route model binding
            
    return view("post",[
        "title" =>'Single Post',
        "active" => 'posts',
        "post" => $post
    ]);
    }
}

