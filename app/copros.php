<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class copros extends Model
{
    //
    public function batiments()
    {
        return $this->belongsTo("App\batiment")->withTimestamps();
    }


}
