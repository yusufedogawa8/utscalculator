<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculatefunc(Request $request){
        $operator = $request->input('operator');
        $first_num = $request->input('first');
        $second_num = $request->input('second');
        $result = 0;

        if($operator == "plus"){
            $result = $first_num + $second_num;
        } else if ($operator == "minus"){
            $result = $first_num - $second_num;
        } else if ($operator == "multiply"){
            $result = $first_num * $second_num;
        } else if ($operator == "divide"){
            $result = $first_num / $second_num;
        } else {
            $result = " Please fill the number CORRECTLY";
        }

        return redirect('/calculator')->with('info', 'Jawabannya :'.' '.$result);

    }
}
