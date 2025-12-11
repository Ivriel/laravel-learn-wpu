<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Ivriel Gunawan',
            'body' => '
Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, possimus commodi dolorum delectus voluptatum, numquam quidem et cupiditate blanditiis, incidunt illum eaque consequatur officiis doloribus rem nam assumenda. Consequuntur nihil vero sapiente quam velit praesentium autem eligendi cupiditate sed quo? Excepturi tempora aspernatur praesentium quos delectus tempore corrupti hic quasi veritatis dicta laudantium magnam porro fugit doloribus, eum ut et eius ad repellat, id natus. Accusamus ipsum voluptas ducimus officiis, eaque, incidunt tenetur cum facilis dignissimos similique minima, vitae deserunt.',
        ],
        [
            'title' => 'Judul Post Kedua Steve',
            'slug' => 'judul-post-kedua',
            'author' => 'Buddy Steve',
            'body' => '
Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, 
possimus commodi dolorum delectus voluptatum, numquam quidem et cupiditate 
blanditiis, incidunt illum eaque consequatur officiis doloribus rem nam assumenda.
 Consequuntur nihil vero sapiente quam velit praesentium autem eligendi cupiditate sed quo?
  Excepturi tempora aspernatur praesentium quos delectus tempore corrupti hic quasi veritatis
   dicta laudantium magnam porro fugit doloribus, eum ut et eius ad repellat, id natus. Accusamus 
   ipsum voluptas ducimus officiis, eaque, incidunt tenetur cum facilis dignissimos similique
    minima, vitae deserunt.
OSAS
',
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts); // pakai self karena dia static
    }

    public static function find($slug)
    {
        $posts = static::all(); // postingan yang banyak.static :: itu khusus buat function static

        return $posts->firstWhere('slug', $slug); // ambil smeua post bentuk collection. lalu cari yang pertama ditemukan dimana slugnya = slug

    }
}
