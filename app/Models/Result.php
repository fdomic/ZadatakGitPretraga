<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'result';
  
    protected $casts =[
        
        'rock' => 'int',
        'suck' => 'int',
        'score' => 'float' ,

    ];
	
    protected $fillable = [ 
        'term',
        'rocks',
        'sucks',
        'score'   
    ];
}
