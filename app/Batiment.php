<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Batiment extends Model
{
    //

//    use SoftDeletes;
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
