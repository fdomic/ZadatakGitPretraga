<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\GitController;
use App\Http\Controllers\TwiController;

class ResultController extends Controller
{
    public function getResult( Request $request){

        if(!$request->has('term')){
            $response = array(
                "errors"=>array(
                    "status" => "400",
                    "detail" => "Term is missing"
                    )
            );
                return response()->json($response, 400);
        }
        $provider = new GitController();
        $result = $provider->getScore($request->input('term'));

        $response = array(
            "data" => array(
                "id" => $result["id"],
                "type" => "score",
                "attributes" => $result
            )

        );    
        return response()->json($response, 200);
    }
}
