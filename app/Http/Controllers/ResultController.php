<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResultController extends Controller
{
    public function getResult( Request $term){
        $RocksResponse = Http::get('https://api.github.com/search/issues?q=php%20rocks');
        $SucksResponse = Http::get('https://api.github.com/search/issues?q=php%20sucks'); 
        

        $rock =$RocksResponse->json("total_count");
        $suck =$SucksResponse->json("total_count");
        
        
        return response()->json($rock,$suck, 200);

    }

}
