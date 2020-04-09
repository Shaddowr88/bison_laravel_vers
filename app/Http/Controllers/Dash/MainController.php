<?php

namespace App\Http\Controllers\Dash;

use App\appartement;
use App\Batiment;
use App\budget;
use App\Http\Controllers\Controller;
use App\Intervenant;
use App\partie;
use App\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // réccuperer les date de création des datas
    function getAllMonths(){
        $mounth_array = array();
        $budgetDates= batiment::orderBy('created_at','ASC')->pluck('created_at');
        $budgetDates=json_decode($budgetDates);

        if (! empty($budgetDates)){
            foreach ($budgetDates as $unformattedDate){
                $date = new \DateTime($unformattedDate);
       //reccupere les mois par numeros
                $monthNo = $date->format('m');
       //reccupere les mois par nom
                $monthName = $date->format('M');
                $monthArray[$monthNo] = $monthName;
            }
        }
        // retourne le mois de décembre
        //return $this->getMonthBudget(12);
      // return view('backend/index');
        return $monthArray;

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

// trier les données par mois
    function getMonthBudget( $month){
        $MouthBudgetCount = Batiment::whereMonth('created_at', $month)->get()->count();
       // retourne toute les donné en fonction d'un mois ( décembre )
        return $MouthBudgetCount;
    }

// réccuperé les données par mois
    function getMonthBudgetData(){
        $monthBudgetCountArray = array();
        $monthArray = $this->getAllMonths();
        $monthNameArray = array();
        if (! empty($monthArray)){
// crée un tableau
            foreach ($monthArray as $monthNo => $monthName){
                $monthBudgetCount = $this->getMonthBudget($monthNo);
                array_push( $monthBudgetCountArray, $monthBudgetCount);
                array_push($monthNameArray, $monthName );
            }
        }

        //$monthArray = $this->getAllMonths();
        $maxNo = max( $monthBudgetCountArray);
        $max = round(($maxNo + 10/2) /10 )*10;
        $monthBudgetDataArray = array(
            'months' => $monthArray,
            'budgetCountData' => $monthBudgetCountArray,
            'max'=> $maxNo,
        );

        //return $monthBudgetDataArray;
         return view('backend/index', [
             'month' => $monthArray,
             'budgetCountData' =>$monthBudgetCountArray,
             ]);
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
        $batiments = Batiment::all();
        $parties = partie::all();
        return view('backend.mine.signal',['batiments' => $batiments,
            'parties' => $parties,

        ]);
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
