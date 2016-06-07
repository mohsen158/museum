<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    public function artworks()
    {
        return $this->hasMany('App\Artwork');
    }
}
