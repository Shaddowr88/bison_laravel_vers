<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Batiment extends Model
{
    // use SoftDeletes;

//Les parties commune qui appartiennent au batiments.
    public function parties(){
        return $this->belongsToMany('App\partie');
    }


    public function appartement(){
        return $this->belongsTo('App\appartement')->withTimestamps();
    }

    public function copros()
    {
        return $this->hasMany("App\copro")->withTimestamps();
    }


}
