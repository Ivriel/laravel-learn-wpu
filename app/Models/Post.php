<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','excerpt','body'];// biar ga error di tinker. mass assignmet. ini boleh sisanya ga boleh
    protected $guarded = ['id'];// ini ga boleh. sisanya boleh
    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query,$search) { // hanya dijalankan ketika di requestnya ada search
              return $query->where('title','like','%' . $search . '%') // supaya bisa cari apapun yang ada di depan dan belakangnya. pake like juga
            ->orWhere('body','like','%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query,$category){ //hanya dijalankan ketika di requestnya ada category
            return $query->whereHas('category',function($query) use ($category){
                $query->where('slug',$category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query,$author)=>(
            $query->whereHas('author',fn($query) => $query->where(
                'username',$author
            ))
            ));
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id'); // cara bacanya liat model post dulu. post hanya bisa dimilikin oleh 1 user
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
