<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','excerpt','body'];// biar ga error di tinker. mass assignmet. ini boleh sisanya ga boleh
    protected $guarded = ['id'];// ini ga boleh. sisanya boleh
}
