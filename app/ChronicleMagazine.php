<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChronicleMagazine extends Model
{
    protected $fillable = ['title', 'image_path', 'image_link', 'file_path', 'file_link', 'is_active'];
}
