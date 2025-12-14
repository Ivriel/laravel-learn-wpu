<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','excerpt','body'];// biar ga error di tinker. mass assignmet. ini boleh sisanya ga boleh
    protected $guarded = ['id'];// ini ga boleh. sisanya boleh

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id'); // cara bacanya liat model post dulu. post hanya bisa dimilikin oleh 1 user
    }
}
