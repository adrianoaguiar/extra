<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13
 */
# SellerGetItems.php


namespace LuzPropria\Extra\Api\Seller;


use LuzPropria\Extra\Api\Orders\Traits\OrderStatusTrait;
use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Recupera itens do Lojista que estão relacionados com o token do lojista informado.
 * A lista de Itens do Lojista pode ter seu retorno paginado, é possível selecionar os campos
 * do response e filtrar os resultados (ver Pesquisas e Filtros nas Considerações de Design).
 *
 * Class SellerGetItems
 * @package LuzPropria\Extra\Api\Seller
 */
class SellerGetItems implements Method {
    /**
     *
     * _offset
     * _limit
     */
    use OrderStatusTrait;

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /sellerItems
    }
}