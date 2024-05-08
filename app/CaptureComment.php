<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaptureComment extends Model
{
    public function nestedcomment()
    {
       return $this->hasMany('App\CaptureComment', 'parent_id','id');
    }
}
