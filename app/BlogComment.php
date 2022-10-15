<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $fillable = ['comment_body', 'parent_comment_id', 'user_id', 'comment_author_name', 'comment_author_email', 'blog_id'];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
