<?php

namespace App\Http\Controllers\copro;
use App\appartement;
use App\Batiment;
use App\copros;
use App\Http\Controllers\Controller;
use App\partie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

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

    public function add() {
        $copros = copros:: all();
        return view('backend.ilot.copro.coproAdd', [
            'copros' => $copros,
        ]);
        dd($copros);
    }



    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:25',
            'ville'=> 'required|max:25','cp',
            'photo_principale'=>'required|image|max:1999'
        ]);
        if ($request->hasFile('photo_principale')) {
            $fileName = $request->file('photo_principale')->getClientOriginalName();
            $request->file('photo_principale')->storeAs('public/uploads', $fileName);
            $img = Image::make($request->file('photo_principale')->getRealPath());
//            $img->insert(public_path('img/favicon.png'), 'bottom-right', 10, 10);
//            dd($fileName);
            $img->save('storage/uploads/'. $fileName);
        }
        $copros = new copros();
        $copros->name = $request->name;
        $copros->ville = $request->ville;
        $copros->cp = $request->cp;
        $copros->photo_principale = $fileName;
//        dd($request);
        $copros->save();
        return redirect() ->route('backend_homepage')
            ->with('notice', 'le programme'.$copros->name.'a été crée');
    }


    public function update (Request $request){
        $copros = copros::find($request->id);
        $request->validate([
            'name' => 'required|max:25',
            'ville'=> 'required|max:25','cp',
            'photo_principale'=>'required|image|max:1999'
        ]);
        if ($request->hasFile('photo_principale')) {
            $fileName = $request->file('photo_principale')->getClientOriginalName();
            $request->file('photo_principale')->storeAs('public/uploads', $fileName);
            $img = Image::make($request->file('photo_principale')->getRealPath());
            $img->insert(public_path('img/favicon.png'), 'bottom-right', 10, 10);
            $img->save('storage/uploads/'. $fileName);
            $copros->photo_principale = $fileName;
        }
        $copros->name = $request->name;
        $copros->ville = $request->ville;
        $copros->cp = $request->cp;
        $copros->photo_principale = $fileName;
        $copros->save();
        return redirect()->route('backend_homepage')
            ->with('notice','Batiment a bien été modifié');
    }


    public function delete(Request $request){
        $copros = copros::find($request->id);
        $copros->delete ();
        return redirect()->route('backend_homepage')
            ->with('notice','programme supprimé !!!');
    }

    public function edit (Request $request){
        $copro = copros::find($request->id);
        $copros = copros::all();
        $batiments = Batiment::where('copro_id',$request->id)->get();
        return view('backend.ilot.copro.coproEdit', [
            'copro' => $copro,
            'copros' => $copros,
            'batiments' => $batiments,
            'photo_principale'=>'required|image|max:1999',
        ]);
    }




}

