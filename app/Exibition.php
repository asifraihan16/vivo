<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exibition extends Model
{
    protected $table = 'exibitions';
    protected $fillable = [
    						'img1',
    						'img2',
    						'img3',
    						'img4',
    						'img5',
    						'img6',
    						'img7',
    						'img8',
    					];
}
