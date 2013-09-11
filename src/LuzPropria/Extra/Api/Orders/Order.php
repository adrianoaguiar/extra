<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 09:24
 */
# Order.php

namespace LuzPropria\Extra\Api\Orders;


class Order {

    /**
     * ID do pedido
     *
     * @var string
     */
    private $orderId;

    /**
     * @param string $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
}