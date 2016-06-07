<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permanent_collection extends Model
{
    //
    public function artworks()
    {
        return $this->hasMany('App\Artwork');
    }
}
