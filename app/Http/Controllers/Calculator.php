<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller
{
    public function index(){
        return view('index');
    }
    public  function calculate(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;
        $select = $request->calculate;
            switch ($select) {
                case "+":
                    $res = $num1 + $num2;
                    break;
                case "-":
                     $res = $num1 - $num2;
                    break;
                case "*":
                     $res = $num1 * $num2;
                    break;
                case "/":
                    if($num2!=0){
                        $res = $num1 / $num2;
                    }else{
                        $res = "failed";
                    }
                    break;
            }
        return view('show',compact('res','num1','num2'));
    }
}
