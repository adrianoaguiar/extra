<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# index.php


include __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Reques;
use Symfony\Component\HttpFoundation\Response;
use LuzPropria\Extra\Autenticacao\Autenticacao;
use LuzPropria\Extra\Enviar\Extra;

$response = new Response(null, 501, array('Content-Type' => 'text/plain'));


$auth = new Autenticacao();
$auth->setAuthToken('gliMhFhTgHB');
$auth->setAppToken('lJW5BcHRGZkiDbNi'); // BaGQxlRcHJGduqCz 0gliMhFhTgHB
$auth->setSandbox('sandbox');

$extra = new Extra($auth);

$categorias_lista = new \LuzPropria\Extra\Api\Categorie\Categories();
$categorias_lista->setOffset(0)->setLimit(10);


try {

    $retorno = $extra->send($categorias_lista);

    $response->setContent($retorno);
    $response->setStatusCode(200);

} catch (\Exception $e ) {
    $response->setStatusCode(404);
    $response->setContent($e->getMessage());
}
$response->send();

/*
use Guzzle\Http\Client;

$client = new Client('http://sandbox.extra.com.br/api/v1');
$request = $client->get('products?idCategory=1&_offset=10&_limit=10',
    array(
        'nova-app-token' => 'lJW5BcHRGZkiDbNi',
        'nova-auth-token' => '0gliMhFhTgHB' //BaGQxlRcHJGduqCz
    )
);

try {
    //print_r($request->getHeaderLines());
    $response = $request->send();

    var_dump($response->getStatusCode());

} catch (Exception $e) {
    echo $e->getMessage();
}
///*/