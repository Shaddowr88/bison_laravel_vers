<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    //


//    public function etage()
//    {
//        return number_format($this->$etage->integerValue());
//    }

    public function comun_part(){
        return $this->belongsTo('App\Comun_part');
    }

    public function appartement(){
        return $this->belongsToMany('App\Appartement')->withTimestamps();
    }

}
