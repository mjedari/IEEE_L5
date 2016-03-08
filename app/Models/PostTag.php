<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $table = 'post_tag';

    public function posts() {
        return $this->belongsToMany('App\Models\Post');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\Tag');
    }
}
