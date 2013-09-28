<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# OrderStatusSent.php


namespace LuzPropria\Extra\Api\Orders;


use LuzPropria\Extra\Api\Orders\Traits\OrderStatusTrait;
use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Recupera uma lista de pedidos com status Enviado que estão relacionados com o token do lojista informado.
 * Este estado representa os pedidos cujos itens foram todos entregues.
 *
 * Class OrderStatusSent
 * @package LuzPropria\Extra\Api\Orders
 */
class OrderStatusSent implements Method {

    use OrderStatusTrait;

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /orders/status/sent/
    }
} 