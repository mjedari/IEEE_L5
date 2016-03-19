<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Post extends Model
{

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function postComments() {
        return $this->hasMany('App\Models\PostComment');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function getImagesAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    public function setImagesAttribute($value)
    {
//        if ($value == $this->attributes['image']) return;

        // crop image
        // open an image file
//        $img = Image::make($value[0]);

        // resize image instance
//        $img->resize(170, 170);

//        $pUrl = $img->dirname.'/'.$img->basename;
//        $processedValue = [];
//        array_push($processedValue, $pUrl);

        // save image in desired format
//        $img->save($processedValue[0]);

        // And store it to the attributes
        $this->attributes['images'] = json_encode($value);
    }

    public function getFilesAttribute($files)
    {
        return json_decode($files) ?: [];
    }

    public function setFilesAttribute($files)
    {
        $this->attributes['files'] = json_encode($files);
    }
}
