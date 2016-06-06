<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sculpture extends Model
{
    //
    public function artworks()
    {
        return $this->hasMany('App\Artwork');
    }
}
