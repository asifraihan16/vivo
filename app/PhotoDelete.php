<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoDelete extends Model
{
    protected $fillable = ['title', 'photo_link', 'author_user_id', 'author_user', 'upload_date', 'deleted_by_user_id', 'like_count'];
}
