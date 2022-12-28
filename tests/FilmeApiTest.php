<?php

namespace Tests;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FilmeApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testarListaFilmes()
    {
        $this->get('/api/v1/filme');
        $this->assertEquals(200, $this->response->getStatusCode());
    }

    // public function testarFilmePorId()
    // {
    //     $dados = [
    //         'titulo' => 'Harry Potter e as Relíquias da Morte',
    //         'ano' => 2010
    //     ];

    //     $res = $this->post('/api/v1/filmes', $dados);

    //     $this->get('/api/v1/filmes/' . $filme_id)->seeJson($dados);
    // }

    // public function testarCriarFilme()
    // {
    //     $this->post('/api/v1/filmes', [
    //         'titulo' => 'Harry Potter e as Relíquias da Morte',
    //         'ano' => 2010
    //     ])->seeJson([
    //         'titulo' => 'Harry Potter e as Relíquias da Morte',
    //         'ano' => 2010
    //     ]);
    // }

    // public function testarAtualizarFilme()
    // {
    //     $this->put('/api/v1/filmes/1', [
    //         'titulo' => 'Harry Potter e as Relíquias da Mortee',
    //         'ano' => 2010
    //     ])->seeJson([
    //         'titulo' => 'Harry Potter e as Relíquias da Mortee',
    //         'ano' => 2010
    //     ]);
    // }

    // public function testarDeletarFilme()
    // {
    //     $this->post('/api/v1/filmes', [
    //         'titulo' => 'Harry Potter e as Relíquias da Morte',
    //         'ano' => 2010
    //     ]);

    //     $filme_id = $this->response->original->id;

    //     $this->delete('/api/v1/filmes/' . $filme_id)->seeJsonEquals([
    //         'titulo' => 'Harry Potter e as Relíquias da Morte',
    //         'ano' => 2010
    //     ]);
    // }
}

?>