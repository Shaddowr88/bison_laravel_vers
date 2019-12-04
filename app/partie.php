<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partie extends Model
{
    //
    public function batiment(){
        return $this->belongsToMany('App\Batiment');
    }

}
