<?php

namespace App\Http\Controllers\Proprio;

use App\budget;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $budgetsChart = budget::all();
        $budgetsChart->labels(['Jan', 'Feb', 'Mar']);
        $budgetsChart->dataset('budgets by trimester', 'line', [10, 25, 13]);
        return view('budgets', [ 'budgetsChart' => $budgetsChart ] );
    }

}
