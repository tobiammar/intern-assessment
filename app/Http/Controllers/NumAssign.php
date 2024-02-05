<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumAssign extends Controller
{
    public function initialValue(){
        $A = array(null,41,18,21,63,2,53,5,57,60,93,28,3,90,39,80,88,49,60,26,28);
        $alpha = $A[5] + $A[20];
        $beta = $A[15] / $A[7];
        $charlie = $A[13] * $A[12];
        return view('welcome',compact('alpha','beta','charlie'));
    }
}
