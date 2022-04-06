<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['title','img','desc'];

    public function comments()
    {
        return $this->hasMany(BlogComment::class, 'blog_id');
    }
}
