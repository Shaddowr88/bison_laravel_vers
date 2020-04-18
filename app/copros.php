<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class copros extends Model
{
    public function batiment()
    {
        return $this->hasMany('App\Batiment','copro_id','id');
    }

    public function budget()
    {
        return $this->hasMany('App\budget','copro_id','id');
    }

}
