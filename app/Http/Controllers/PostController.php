<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $title= '';
        if(request('category')) {
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username',request('author'));
            $title = ' by '. $author->name;
        }
        return view('posts', [
            'title' => 'All Posts' . $title,
            "active" => 'posts',
            // pakai eager loading (with)
            'posts' => Post::latest()->filter(request(['search','category','author']))
            ->paginate(7)->withQueryString() // filter didapat dari scopeFilter di model
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