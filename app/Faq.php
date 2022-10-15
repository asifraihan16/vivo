<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['question', 'answer', 'is_active', 'question_order'];

    public function scopeActive($query)
    {
        $query->where('is_active', 1);
    }
}
