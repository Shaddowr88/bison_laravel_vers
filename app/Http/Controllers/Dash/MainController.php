<?php

namespace App\Http\Controllers\Dash;

use App\Batiment;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function index(){
        $batiments = Batiment::all();
        return view('backend/index');
    }
}
