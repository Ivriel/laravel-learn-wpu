<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'All Posts',
            // 'posts' => Post::all(), 
            // pakai eager loading (with)
            'posts' => Post::with(['author','category'])->latest()->get(), // biar urutan postingannya terurut berdasarkan id
            ]);
    }

    public function show(Post $post) { // route model binding
            
    return view("post",[
        "title" =>'Single Post',
        "post" => $post
    ]);
    }
}

