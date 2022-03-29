<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileSeriesVersion extends Model
{
    protected $table = 'mobile_series_versions';
    protected $fillable = ['mobile_series_id','name','img','status'];
}
