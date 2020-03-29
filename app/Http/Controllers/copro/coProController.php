<?php

namespace App\Http\Controllers\copro;
use App\Batiment;
use App\copros;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class coProController extends Controller
{
    public function index()
    {
        $copro = DB::table('copros')
           ->orderBy('created_at','desc')->paginate(8);
      return view('backend.ilot.copro', ['copros'=>$copro]);
    }

    public function viewByCopro (Request $request){
        // Récupérer tous les bâtiments d'une même copropriété,
        $batiments = Batiment::where('copro_id',$request->id)->get();
        return view('backend.ilot.index', compact('batiments'));
    }
}

