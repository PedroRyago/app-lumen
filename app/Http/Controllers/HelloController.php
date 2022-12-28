<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    // public function helloDefault(Request $request){

    //     if($request->session()->has('nome')){
    //         $nome = $request->input('nome');
    //         return view('hello', ['nome' => $nome]);
    //     } else {
    //         return view('helloDefault');
    //     }

    // }

    public function hello($name){
        return view('hello', ['name' => $name]);
    }
}

?>