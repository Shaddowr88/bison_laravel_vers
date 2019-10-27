<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    //
//    public function prixTTC()
//    {
//        return number_format($this->prix_ht * 1.2, 2);
//    }
//
//    public function prixTTCPanier(){
//        return $this->prix_ht * 1.2;
//    }
//
//    public function qte()
//    {
//        return number_format($this->$qte->integerValue());
//    }
//    public function categorie()
//    {
//        return $this->belongsTo('App\Categorie');
//    }
//
//    public function recommandations(){
//        return $this->belongsToMany('App\Produit','produit_recommande',
//            'produit_id','produit_recommande_id')->withTimestamps();
//    }
//    public function tags(){
//        return $this->belongsToMany('App\tag')->withTimestamps();
//    }
//
//    public function tailles(){
//        return $this->belongsToMany('App\Taille')->withTimestamps()
//            ->withPivot('qte');
//    }

}
