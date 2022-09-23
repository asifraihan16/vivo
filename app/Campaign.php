<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';
    protected $fillable = ['title','title_detail','img1','img2','img3','desc', 'campaign_status', 'start_date', 'started_at', 'ended_at'];

    public function gallery_photos()
    {
        return $this->hasMany(PhotoGallery::class);
    }

    public function getStatusAttribute ()
    {
        $class = 'secondary';
        $text = 'Draft';
        if ($this->campaign_status == 2 && now()->gte($this->start_date)) {
            $class = 'success';
            $text = 'Running';
        }
        
        if ($this->campaign_status == 3) {
            $class = 'danger';
            $text = 'Closed';
        }

        return "<span class='text-{$class}'>{$text}</span>";
    }
}
