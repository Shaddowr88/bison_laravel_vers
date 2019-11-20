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

class MainController extends Controller
{
    public function index()
    {
//        $batiments = Batiment::all();
        $batiment = DB::table('batiments')
            ->orderBy('created_at','desc')->paginate(8);
        return view('backend.ilot.index', ['batiments'=>$batiment]);
    }

//    Cree de nouveaux batiments
    public function add()
    {
        $batiments = Batiment::all();
        $appartements = Appartement::all();
        $comun_parts = Comun_Part::all();
        $etages = etage::all();

        return view('backend.ilot.add', ['batiments' => $batiments, 'appartements' => $appartements,
            'comun_parts' => $comun_parts, '$etages' => $etages]);
    }

//    sauvegarde BD nouveaux batiments
    public function store(Request $request)
    {

        $request->validate([
                'nom' => 'required|max:25',
                'numero','etage','adresse',
                'description','batiment_id',]);
        $batiment = new Batiment();
        $batiment->nom = $request->nom;
        $batiment->numero = $request->numero;
        $batiment->adresse = $request->adresse;

        $comun_part = new Comun_Part();
        $comun_part->nom = $request->nom;
//        ddd(['batiments'=> $batiments, 'comun_parts'=>$comun_part]);
        $batiment->save();
        $comun_part->save();
        return redirect()->route('backend_add')
            ->with('notice', 'le Batiment <strong>'.$batiment->nom.'</strong> a bien été ajouté');

    }

    public function edit (Request $request){
      $batiment = Batiment::find($request->id);
//    dd($batiment);
        dd($request->id);
        return view('backend.ilot.edit', ['batiment' => $batiment]);

    }

//    public function edit(Request $request)
//    {
//      $batiment = Batiment::find($request->id);
//dd($batiment);
//
//
//    }

    public function update (Request $request){
        $batiments = Batiment::find($request->id);

        $request->validate([
            'nom' => 'required|max:255',
            'users',
            'etages',
            'batiment',
        ]);

        $batiments->nom = $request->nom;
        $batiments->user = $request->user;
        $batiments->save();
        $batiments->users()->sync($request->users);

        return redirect()->route('backend_homepage')
            ->with('notice',' Batiment  <strong>'.$batiments->nom. "</strong> a bien été modifié");
    }

}
