<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GsController extends Controller
{
    public function showData(){
       $dataFromGs = file_get_contents('http://gsx2json.com/api?id=19_ZG6dinb7yI9uSbdhxYhKlULb1fhMmrgpnctSF6G6Q&columns=false');
        $gsData = json_decode($dataFromGs);
       return view('pages.home',['data'=>$gsData->rows]);
    }
}
