<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello/{name}', 'HelloController@hello');
// $router->get('/hello', 'HelloController@helloDefault');
$router->get('/pessoas/cadastro', 'PessoaController@cadastro');
$router->post('/pessoas', 'PessoaController@cadastrar');
$router->get('/pessoas', 'PessoaController@listar');
$router->get('/pessoas/{pessoa_id}/filmes', 'PessoaController@listarFilmes');
$router->get('/filmes', 'FilmeController@listar');
$router->post('/filmes/{ano}', 'FilmeController@listarDoAno');

$router->group(['prefix' => 'api/v1'], function($router) {
    $router->get('filme', 'FilmeApiController@listar');
    $router->get('filme/{id}', 'FilmeApiController@retornarFilme');
    $router->post('filme', 'FilmeApiController@cadastrarFilme');
    $router->put('filme/{id}', 'FilmeApiController@atualizarFilme');
    $router->delete('filme/{id}', 'FilmeApiController@deletarFilme');
});