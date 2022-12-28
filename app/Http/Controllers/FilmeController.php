<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use DB;

class FilmeController extends Controller
{
    public function listar(){
        $filmes = Filme::all();
        return view('listarFilmes', ['filmes' => $filmes]);
    }

    public function listarDoAno($ano){
        $filmes = Filme::where('ano', '=', $ano)->get();
        return view('listarFilmes', ['filmes' => $filmes]);
    }

}

?>