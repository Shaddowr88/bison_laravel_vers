<?php

namespace App\Http\Controllers\copro;
use App\copros;
use App\Batiment;
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
      ddd($copro);

    }

    public function viewByCopro (Request $request){
       $copros = copros::all();
       $batiments = Batiment::all();
       $copro = copros::find($request->id);
       $batiments_id=[];
//      foreach ($copro -> $batiments as $b)
//      {
//            $batiments_id[]=$b->id;
//      }
        return view('backend.ilot.index', [
            'copros' => $copros,
            'copro' => $copro,
//            'batiments_id' => $batiments_id,
            'batiments' => $batiments,
        ]);
    }

}


