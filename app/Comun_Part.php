<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comun_Part extends Model
{
    //

    public function batiment(){
        return $this->belongsToMany('App\Batiment');
    }

}
