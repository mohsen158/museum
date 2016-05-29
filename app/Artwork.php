<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    //
    public function paints()
    {
        return $this->belongsTo('App\Paint');
    }
}
