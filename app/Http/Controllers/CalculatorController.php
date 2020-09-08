<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(Request $request) 
    {
        $ops = $request->input('operasi');
        $num1 = $request->input('ke1');
        $num2 = $request->input('ke2');
        $hasil = 0;
    
        if ($ops == 'tambah') {
          $hasil = $num1 + $num2;
        }elseif ($opt == 'kurang') {
         $hasil = $num1 - $num2; 
        }elseif ($opt == 'kali') {
          $hasil = $num1 * $num2;
        }elseif ($opt) {
          $hasil = $num1 / $num2;
        }else {
          $hasil = 0;
        }
        
        return redirect('/')->with('info', 'Hasilnya ' . $hasil);
    }

}
