<?php

namespace App\Http\Controllers\Lot;

use App\Appartement;
use App\Batiment;
use App\Comun_Part;
use App\equipement;
use App\etage;
use App\Http\Controllers\Controller;
use App\partie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Eloquent\SoftDeletes;

class MainController extends Controller
{
    public function index(){
        $batiment = DB::table('batiments')
            ->orderBy('created_at','desc')->paginate(8);
        return view('backend.ilot.index', ['batiments'=>$batiment]);
    }

//    Cree de nouveaux batiments
    public function add() {
        $batiments = Batiment::all();
        $appartements = Appartement::all();
        $parties = partie::all();
        return view('backend.ilot.add', ['batiments' => $batiments, 'appartements' => $appartements,
            'parties' => $parties]);
    }

//    sauvegarde BD nouveaux batiments
    public function store(Request $request){
        $request->validate([
                'nom' => 'required|max:25',
                'numero','etage','adresse',
                'description','batiment_id',]);

        $batiments = new Batiment();
        $batiments->nom = $request->nom;
        $batiments->numero = $request->numero;
        $batiments->adresse = $request->adresse;
        $batiments->save();

        if($request->parties) {
            foreach ($request->parties as $id) {
                $batiments->parties()->attach($id);
            }
        }

return redirect()->route('backend_add')->with('notice', 'le Batiment'.$batiments->nom.'a bien été ajouté');

    }


    public function edit (Request $request){
      $batiments = Batiment::find($request->id);
        $parties = partie::all();
        return view('backend.ilot.edit', ['batiment' => $batiments,'partie' => $parties]);
    }

//update
    public function update (Request $request){
        $request->validate(['nom','numero','adresse']);
        $batiment = Batiment::find($request->id);
        $batiment->nom = $request->nom;
        $batiment->numero = $request->numero;
        $batiment->adresse = $request->adresse;
        $batiment->save();
        return redirect()->route('backend_homepage')
        ->with('notice','Batiment a bien été modifié');
    }

//fonction delete
    public function delete(Request $request){
        $batiment = Batiment::find($request->id);

        $batiment->delete ();
        return redirect()->route('backend_homepage')
            ->with('notice','le batiment a été supprimé');
    }




    }
