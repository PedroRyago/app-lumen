<?php
    namespace App\Http\Controllers;
    use App\Models\Filme;
    use Illuminate\Http\Request;

    class FilmeApiController extends Controller
    {
        public function listar()
        {
            $filmes = Filme::all();
            return response()->json($filmes);
        }

        public function retornarFilme($id)
        {
            $filme = Filme::find($id);
            if (is_null($filme)) {
                return response()->json('', 204);
            }
            return response()->json($filme);
        }

        public function cadastrarFilme(Request $request)
        {
            $filme = Filme::create($request->all());
            return response()->json($filme, 201);
        }

        public function atualizarFilme(Request $request, $id)
        {
            $filme = Filme::find($id);
            if (is_null($filme)) {
                return response()->json([
                    'message' => 'Filme não encontrado'
                ], 404);
            }
            $filme->update($request->all());
            return response()->json($filme);
        }

        public function deletarFilme($id)
        {
            $filme = Filme::find($id);
            if (is_null($filme)) {
                return response()->json([
                    'message' => 'Filme não encontrado'
                ], 404);
            }
            $filme->delete();
            return response()->json([
                'message' => 'Filme removido com sucesso'
            ], 200);
        }
    }

?>