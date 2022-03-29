<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photogallariestags extends Model
{
    protected $table = 'photo_galleries_tags';
    protected $fillable = ['photo_galleries_id','tags_id'];
}
