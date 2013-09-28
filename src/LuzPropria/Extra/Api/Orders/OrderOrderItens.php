<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 09:24
 */
# OrderItem.php

namespace LuzPropria\Extra\Api\Orders;
use LuzPropria\Extra\Utils\Interfaces\Method;


/**
 * Recupera detalhes de um Item específico do pedido.
 *
 * Class OrderItem
 * @package LuzPropria\Extra\Api\Orders
 */
class OrderOrderItens extends Order implements Method {

    /**
     * ID do Item do pedido
     *
     * Extra: get /orders/{orderId}/orderItems/{orderItemId}/
     *
     * @var string
     */
    private $orderItemId;



    /**
     * @param string $orderItemId
     */
    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->orderItemId;
    }

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /orders/{orderId}/orderItems/{orderItemId}/
    }
}