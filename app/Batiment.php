<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    //


    public function etage()
    {
        return number_format($this->$etage->integerValue());
    }

    public function partiescommunes()
    {
        return $this->belongsTo('App\partiescommunes');
    }

    public function appartement(){
        return $this->belongsToMany('App\Appartement')->withTimestamps()
            ->withPivot('numero');
    }

}
