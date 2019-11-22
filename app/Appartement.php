<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    //
    public function batiments()
    {
        return $this->hasOne("App\batiment")->withTimestamps();
    }

    public function user()
    {
        return $this->hasOne("App\user")->withTimestamps();
    }

    public function hasBatiment($batiment)
    {
        if ($this->batiments()->where('nom', "=", $batiment)->first()) {
            return true;
        }
        return false;
    }

}
