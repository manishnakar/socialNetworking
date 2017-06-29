<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'content', 'live', 'post_on',
    ];

    public function setLiveAttribute($value)
    {
        $this->attributes['live'] = (bool) $value;
    }
}
