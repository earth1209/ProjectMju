<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function selsect(){
        //$dataactorsas = DB::table('actors_as')->get();
        //$dataactorsas = DB::table('actors_as')->find('1');
        $dataactorsas = DB::select('select * from actors_as where nameactors =?',['Student']);



        // var_dump($data);
        // die;
        dd($dataactorsas);

    }
}
