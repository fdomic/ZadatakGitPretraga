<?php

namespace App\Http\Controllers;

use App\Models\Result;

use Illuminate\Http\Request;

Abstract class ApsController 
{
    public function getScore($term){
        
        $data = Result::where('term',$term )->first();

        if(!$data){

            $result = $this->findScoreFromGit($term) ;
            $data = new Result($result);
            $data->save();
        }

        return $data;
    }

    protected function calc($rocks, $sucks){
        $total = $rocks + $sucks;
        if($total == 0) return 0;

        $score = 10 * $rocks / ($rocks + $sucks );
        return   $score;
    }
    

    public abstract function findScoreFromGit($term);

}
