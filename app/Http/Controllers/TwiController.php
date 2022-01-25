<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwiController extends ApsController
{
     public function findScoreFromGit($term){

        //TODO URL ONLY
        //$RocksResponse = Http::get();
        //$SucksResponse = Http::get(); 
        $rocks = 0; //$RocksResponse->json("total_count");
        $sucks = 0; //$SucksResponse->json("total_count");
        $score = $this->calc($rocks,$sucks);

        $response = array(
            "term"=> $term,
            "rocks" => $rocks,
            "sucks" => $sucks,
            "score" => $score,
            "status" => 200

        );
        
        return $response;
    }
}
