<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# OrderStatusPartiallyDelivered.php


namespace LuzPropria\Extra\Api\Orders;


use LuzPropria\Extra\Api\Orders\Traits\OrderStatusTrait;
use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Retorna uma lista de pedidos com status Parcialmente Entregue que estão relacionados com o token do lojista informado.
 *
 *
 * Class OrderStatusPartiallyDelivered
 * @package LuzPropria\Extra\Api\Orders
 */
class OrderStatusPartiallyDelivered implements Method {

    use OrderStatusTrait;
    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {

    }
} 