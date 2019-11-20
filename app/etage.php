<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class etage extends Model
{
    //
    //Récuperer les produits d'une catégorie
    public function batiments()
    {
        return $this->hasMany('App\Batiment');
    }


}
