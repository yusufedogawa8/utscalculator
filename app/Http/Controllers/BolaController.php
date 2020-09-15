<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BolaController extends Controller
{
    public function calculatefunc(Request $request){
        $first = 4 / 3;
        $p = 3.14;
        $r = $request->input('r');
        $result = $first * $p * $r * $r * $r;
        if($result == 0){
            return redirect('/bola')->with('bola', 'Masukkan angka yang valid'); 
        } else {
            return redirect('/bola')->with('bola', 'Jawabannya :'.' '.$result);
        }
    }
}
