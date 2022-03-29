<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MomentOfTheMonth extends Model
{
    protected $table = 'moment_of_the_months';
    protected $fillable = [
    						'title1','img1','link1',
    						'title2','img2','link2',
    						'title3','img3','link3',
    						'title4','img4','link4',
    						'title5','img5','link5',
    						'title6','img6','link6',
    						'title7','img7','link7',
    						'title8','img8','link8',
    					];
}
