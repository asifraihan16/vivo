<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaptureFuture extends Model
{

    protected $fillable = ['title', 'image_path', 'image_link', 'description', 'image_type', 'image_order', 'image_span_col', 'is_active', 'year'];

    public function comments()
    {
        return $this->hasMany('App\CaptureComment', 'capture_future_id');
    }

}

