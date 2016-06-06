<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    //
    public function paint()
    {
        return $this->belongsTo('App\Paint');
    }
      public function sclupture()
    {
        return $this->belongsTo('App\Sclupture');
    }
     
 public function calligraphie()
    {
        return $this->belongsTo('App\Calligraphie');
    }
     public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
  public function exhibition()
    {
        return $this->belongsTo('App\Exhibition');
    }




}
