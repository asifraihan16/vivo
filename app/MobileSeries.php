<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileSeries extends Model
{
    protected $table = 'mobile_series';
    protected $fillable = ['name','img','status'];

    public function mobile_series_versions()
    {
        return $this->hasMany(MobileSeriesVersion::class, 'mobile_series_id');
    }
}
