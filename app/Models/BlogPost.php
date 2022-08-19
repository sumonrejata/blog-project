<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BlogPost extends Model
{
    use HasFactory;
    protected $guarded = [];
   

    // public function category()
    // {
    //     return $this->belongsTo(Category::class,'post_id','id');
    // }

    public function category()
    {
    return $this->belongsTo(Category::class,'post_id','id');
    //return $this->hasMany(Category::class,'post_id','id');

    }
}


