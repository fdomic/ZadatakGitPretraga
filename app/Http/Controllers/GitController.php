<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\Http;


class GitController extends ApsController
{
    public function findScoreFromGit($term){
        $RocksResponse = Http::get('https://api.github.com/search/issues?q='.$request->input('term').'%20rocks');
        $SucksResponse = Http::get('https://api.github.com/search/issues?q='.$request->input('term').'%20sucks'); 
        
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
