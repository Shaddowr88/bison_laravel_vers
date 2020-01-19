<?php

namespace App\Http\Controllers;

use App\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    //
    public function index(){
//    $batiments=Batiment::all();
////    dd($batiments);
    return view('batiments.batiment');
    }

}
