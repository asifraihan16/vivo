<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileSeriesVersion extends Model
{
    protected $table = 'mobile_series_versions';
    protected $fillable = ['mobile_series_id','name','img','status'];

    public function mobile_series()
    {
        return $this->belongsTo(MobileSeries::class, 'mobile_series_id');
    }

    public function gallery_photos()
    {
        return $this->hasMany(PhotoGallery::class, 'mobile_series_versions_id');
    }
}
