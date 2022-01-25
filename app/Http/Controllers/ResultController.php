<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResultController extends Controller
{
    public function getResult( Request $request){

        $RocksResponse = Http::get('https://api.github.com/search/issues?q='.$request->has('term').'%20rocks');
        $SucksResponse = Http::get('https://api.github.com/search/issues?q='.$request->has('term').'%20sucks'); 
        
        $rock = $RocksResponse->json("total_count");
        $sucks = $SucksResponse->json("total_count");
        $score = 10 * $rock / ($rock + $sucks );
        

        $response = array(

            "rock" => $rock,
            "suck" => $sucks,
            "score" => $score ,

        );
        
        return response()->json($response, 200);

    }

}
