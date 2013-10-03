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

//Recupera itens do Lojista
$seller_items = new \LuzPropria\Extra\Api\Seller\SellerGetItems();
$seller_items->setOffset(0)->setLimit(50);

//Recupera detalhes do Item do Lojista através do sku informado.
$seller_item = new \LuzPropria\Extra\Api\Seller\SellerGetItem();
$seller_item->setSkuId(21956411);

//Recupera detalhes do Item do Lojista através do sku do lojista.
$seller_items_skuorigin = new \LuzPropria\Extra\Api\Seller\SellerItemsSkuOrigin();
$seller_items_skuorigin->setSkuOrigin(848);

//Recupera Itens do Lojista que já estão disponíveis para venda
$seller_status_selling = new \LuzPropria\Extra\Api\Seller\SellerItemsStatusSelling();
$seller_status_selling->setOffset(0)->setLimit(2);

//Serviço utilizado para registrar (associar) Itens do Lojista que já estão disponíveis para venda no Marketplace.
$seller_item_post = new \LuzPropria\Extra\Api\Seller\SellerItem();
$seller_item_post
    ->setSkuId(10)
    ->setSkuOrigin('1')
    ->setDefaultPrice(11.10)
    ->setSalePrice(11.10)
    ->setAvailableQuantity(5)
    ->setTotalQuantity(8)

;
$seller_items_post = new \LuzPropria\Extra\Api\Seller\SellerItems();
$seller_items_post->setSellerItem($seller_item_post);

//Atualiza o preço ´de´ e o preço ´por´ (preço real para venda) do Item do Lojista informado.
$seller_price_update = new \LuzPropria\Extra\Api\Seller\PriceUpdate();
$seller_price_update->setDefaultPrice(20)->setSalePrice(20);
$seller_update_prices = new \LuzPropria\Extra\Api\Seller\SellerItemsPrices();
$seller_update_prices->setSkuId(21956924);
$seller_update_prices->setPriceUpdate($seller_price_update);

//Atualiza a quantidade disponível para venda do Item do Lojista informado.
$seller_stock_update = new \LuzPropria\Extra\Api\Seller\StockUpdate();
$seller_stock_update->setAvailableQuantity(20)->setTotalQuantity(20);
$seller_update_stock = new \LuzPropria\Extra\Api\Seller\SellerItemsStock();
$seller_update_stock->setSkuId(21956924);
$seller_update_stock->setStockUpdate($seller_stock_update);


try {

    $extra->send($seller_update_stock);
    $retorno = $extra->send($seller_status_selling);
    var_dump($retorno);
    //$response->setContent();
    $response->setStatusCode(200);
} catch (\Guzzle\Http\Exception\ClientErrorResponseException $e) {
    $response->setStatusCode(404);
    $response->setContent($e->getResponse()->getReasonPhrase());
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