<?php

namespace App\Http\Controllers\Lot;

use App\Appartement;
use App\Batiment;
use App\Comun_Part;
use App\equipement;
use App\etage;
use App\Http\Controllers\Controller;
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
        $comun_parts = Comun_Part::all();
        return view('backend.ilot.add', ['batiments' => $batiments, 'appartements' => $appartements,
            'comun_parts' => $comun_parts]);
    }

//    sauvegarde BD nouveaux batiments
    public function store(Request $request){
        $bat_partie = Batiment::find($request->id);
        $request->validate([
                'nom' => 'required|max:25',
                'numero','etage','adresse',
                'description','batiment_id',]);

        $batiment = new Batiment();
        $batiment->nom = $request->nom;
        $batiment->numero = $request->numero;
        $batiment->adresse = $request->adresse;
        $bat_partie->partie_id=$partie->id;
        $bat_partie->batiment_id=$batiment->id;


//      $batiment->comun__part = $request->comun__part;

        $batiment->save();
//       if($request->comun_parts) {
//            foreach ($request->comun_parts as $id) {
//                $batiment->comun_parts()->attach($id);
//            }
//    }

        dd($batiment);
return redirect()->route('backend_add')
            ->with('notice', 'le Batiment <strong>'.$batiment->nom.'</strong> a bien été ajouté');
    }


    public function edit (Request $request){
      $batiment = Batiment::find($request->id);
        return view('backend.ilot.edit', ['batiment' => $batiment]);
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
        ->with('notice',' Batiment  <strong>'.$batiment->nom. "</strong> a bien été modifié");
    }

//fonction delete
    public function delete(Request $request){
        $batiment = Batiment::find($request->id);
        $batiment->delete ();
        return redirect()->route('backend_homepage')
            ->with('notice','le batiment<trong>'.$batiment->nom.'</trong> a été supprimé');
    }




    }
