<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwiController extends Controller
{
     public function findScoreFromTwi($term){

        //TODO URL ONLY
        $RocksResponse = Http::get();
        $SucksResponse = Http::get(); 
        
        $rocks = $RocksResponse->json("total_count");
        $sucks = $SucksResponse->json("total_count");
        $score = $this->calc($rocks,$sucks);

        $response = array(
            "term"=> $term,
            "rocks" => $rocks,
            "sucks" => $sucks,
            "score" => $score,
            "status" => 200

        );
        
        return response()->json($response, 200);

    }
}
