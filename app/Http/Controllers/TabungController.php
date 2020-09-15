<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabungController extends Controller
{
    public function calculatefunc(Request $request){
        $p = 3.14;
        $r2 = $request->input('r2');
        $t = $request->input('t');
        $result = $p * $r2 * $r2 * $t;
        if($result == 0){
            return redirect('/tabung')->with('tabung', 'Masukkan angka yang valid'); 
        } else {
            return redirect('/tabung')->with('tabung', 'Jawabannya :'.' '.$result);
        }
    }
}
