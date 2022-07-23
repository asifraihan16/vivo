<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    protected $table = 'photo_galleries';
    protected $fillable = ['mobile_series_versions_id','title', 'img', 'img_thumbnail', 'status', 'users_id', 'campaign_id', 'is_photographer_image'];

    public function mobile_series_version()
    {
        return $this->belongsTo(MobileSeriesVersion::class, 'mobile_series_versions_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'photo_galleries_tags', 'photo_galleries_id', 'tags_id');
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
