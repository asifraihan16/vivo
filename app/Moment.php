<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{
    protected $fillable = ['title', 'image_path', 'image_link', 'description', 'image_type', 'image_order', 'image_span_col', 'is_active'];
}
