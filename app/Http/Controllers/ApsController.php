<?php

namespace App\Http\Controllers;

use App\Models\Result;

use Illuminate\Http\Request;

Abstract class ApsController 
{
    public function getResult($term){
        
        $data = Result::where('term',$term )->find();

        if(!$data){

            $result = $this->findScoreFromGit($term) ;
            $data = new Result($result);
            $data->save();

        }

    }

    protected function calc($rocks, $stucks){
        $total = $rocks + $stucks;
        if($total == 0) return 0;
        $score = 10 * $rock / ($rock + $sucks );

        return   $score;
    }
    
}
