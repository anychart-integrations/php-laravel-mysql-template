<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class ChartController extends Controller
{
    public function index(){
        $fruits = DB::select('SELECT * FROM fruits ORDER BY value DESC LIMIT 5');
        return view('chart',
            ['title' => 'Anychart PHP template',
            'chartTitle' => 'Top 5 fruits',
            'chartData' => json_encode($fruits),]);
    }
}
