<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Batiment extends Model
{
    // use SoftDeletes;

//Les parties commune qui appartiennent au batiments.
    public function comun_part(){
        return $this->belongsToMany('App\Comun__parts', 'bat_communpartt', 'batiments_id',
            'comun__parts_id');
    }


    public function appartement(){
        return $this->belongsToMany('App\Appartement')->withTimestamps();
    }

}
