<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    protected $table = 'photo_galleries';
    protected $fillable = ['mobile_series_versions_id','title','img','status'];
}
