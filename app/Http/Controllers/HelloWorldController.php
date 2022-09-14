<?php

namespace App\Http\Controllers;

class HelloWorldController extends Controller
{
    public function hello($name){
        return view('hello', ['name' => $name]);
    }

    public function helloDefault(){
        return view('hello', ['name' => 'World']);
    }
}

?>