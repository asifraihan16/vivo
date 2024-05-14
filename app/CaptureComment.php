<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaptureComment extends Model
{
    protected $fillable = ['comment_body', 'parent_comment_id', 'capture_future_id', 'user_id'];

    public function replies()
    {
        return $this->hasMany(CaptureComment::class, 'parent_comment_id')->with('replies');
    }

    public function comment_by()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function capture_future()
    {
        return $this->belongsTo(CaptureFuture::class, 'capture_future_id');
    }
    
}
