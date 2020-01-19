<?php

namespace App\Http\Controllers\Dash;

use App\appartement;
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

//        {
//
//            $batiments = Batiment::all();
//            $apparts = appartement::all();
//            $apparts = appartement::find($request->id);
//
//            foreach ($appart->parties as $p) {
//                $parties_id[]=$p->id;
//            }
//            return view('backend.ilot.edit', [
//                'batiment' => $batiment,
//                'batiments' => $batiments,
//                'parties' => $parties,
//                'parties_id' => $parties_id,
//
//            ]);



    }

    public function declaration()
    {
        $batiments = Batiment::all();
        $intervenant = Intervenant::all();
        $user = User::all();
        $interMetier = Intervenant::all();

        return view('backend.Users.message02', ['batiments' => $batiments,
                                                'metier' => $interMetier,
                                                'intervenants' => $intervenant,
                                                'user' => $user
        ]);
    }

    public function contact_syndic(){
        return view('backend.Contact.index');
    }

    public function contact_prestataire(){
        return view('backend.Contact.prestataire');
    }

    public function contact_utility(){
        return view('backend.Contact.utilis');
    }


    public function Mine(){
        return view('backend.ilot.messages.creat');
    }

    public function signal(){
        return view('backend.mine.signal');
    }


    public function Documents(){
        return view('backend.Document.index');
    }


    public function dating(){
        return view('backend.Document.dating');
    }

    public function settlement(){
        return view('backend.Document.settlement');
    }




}
