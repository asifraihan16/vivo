<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    protected $table = 'photographers';
    protected $fillable = [
    						'mobile_series_id',
    						'mobile_series_versions_id1','img1',
    						'mobile_series_versions_id2','img2',
    						'mobile_series_versions_id3','img3',
    						'mobile_series_versions_id4','img4',
    						'mobile_series_versions_id5','img5',
    						'mobile_series_versions_id6','img6',
    						'mobile_series_versions_id7','img7',
    						'mobile_series_versions_id8','img8',
    						'mobile_series_versions_id9','img9',
    					];
}
