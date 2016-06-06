<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    //
      public function artworks()
    {
        return $this->hasMany('App\Artwork');
    }
}

}
