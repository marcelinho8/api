<?php

require '../vendor/autoload.php';
require '../inc/database.class.php';


$app = new Slim\App();

$arrayPessoas[] = array('id' => 1, 'nome' => 'Marcelo');
$arrayPessoas[] = array('id' => 2, 'nome' => 'SSA');
$arrayPessoas[] = array('id' => 3, 'nome' => 'Josa');

$app->get('/pessoas', function ($request, $response, $args) {
    global $arrayPessoas;
    $response->getBody()->write(json_encode($arrayPessoas));
    $newResponse = $response->withHeader(
        'Content-type',
        'application/json; charset=utf-8'
    );

    return $newResponse;
});


$app->run();