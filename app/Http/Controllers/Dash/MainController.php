<?php

namespace App\Http\Controllers\Dash;

use App\Batiment;
use App\Http\Controllers\Controller;
use App\Intervenant;
use App\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function index(){
//        $batiments = Batiment::all();
        return view('backend/index');
    }

    public function declaration()
    {
        $batiments = Batiment::all();
        $intervenant = Intervenant::all();
        $user = User::all();
        $inter_M = Intervenant::all();


        return view('backend.Users.message02', ['batiments' => $batiments,
                                                'metier' => $inter_M,
                                                'intervenants' => $intervenant,
                                                'user' => $user
        ]);
    }
}
