<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pessoa;
use DB;

class PessoaController extends Controller
{
    public function cadastro(){
        return view('cadastroPessoa');
    }
  
    public function cadastrar(Request $request){

        $validator = Validator::make($request->all(), [
            'nome' => 'required|max:255',
            'email' => 'required|email',
            'cpf' => 'required|numeric|digits:11|cpf',
        ]);

        if ($validator->fails()) {
            return view('cadastroPessoa', ['errors' => $validator->errors()]);
        }

        $nome = $request->input('nome');
        $email = $request->input('email');
        $cpf = $request->input('cpf');

        $pessoa = Pessoa::create(
            ['nome' => $nome, 'email' => $email, 'cpf' => $cpf]
        );

        return redirect('/pessoas');
    }

    public function listar(){
        $pessoas = Pessoa::all();
        return view('listarPessoas', ['pessoas' => $pessoas]);
    }

    public function listarFilmes($pessoa_id){
        $pessoa = Pessoa::find($pessoa_id);
        $filmes = $pessoa->filmes()->get();
        return view('listarFilmes', ['filmes' => $filmes]);
    }

}

?>