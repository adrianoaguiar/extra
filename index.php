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
//'Content-type: application/json' text/plain
//$response = new Response(null, 501, array('Content-Type' => 'application/json'));
$response = new Response(null, 501);


$auth = new Autenticacao();
$auth->setAuthToken('0gliMhFhTgHB');
$auth->setAppToken('lJW5BcHRGZkiDbNi');
$auth->setSandbox('sandbox');

$extra = new Extra($auth);

// Categorias
$categorias_lista = new \LuzPropria\Extra\Api\Categorie\Categories();
$categorias_lista->setOffset(0)->setLimit(50);

$categoria_detalhe = new \LuzPropria\Extra\Api\Categorie\CategoriesLevelId();
$categoria_detalhe->setLevelId(80056);

// Seller items
$seller_items = new \LuzPropria\Extra\Api\Seller\SellerGetItems();
$seller_items->setOffset(0)->setLimit(100);

$seller_item = new \LuzPropria\Extra\Api\Seller\SellerGetItem();
$seller_item->setSkuId(10);

$seller_items_skuorigin = new \LuzPropria\Extra\Api\Seller\SellerItemsSkuOrigin();
$seller_items_skuorigin->setSkuOrigin(1);

try {

    $retorno = $extra->send($seller_item);
    var_dump($retorno);
    //$response->setContent();
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