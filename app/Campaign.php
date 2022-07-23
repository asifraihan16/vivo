<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';
    protected $fillable = ['title','title_detail','img1','img2','img3','desc', 'campaign_status', 'started_at', 'ended_at'];

    public function gallery_photos()
    {
        return $this->hasMany(PhotoGallery::class);
    }
}
