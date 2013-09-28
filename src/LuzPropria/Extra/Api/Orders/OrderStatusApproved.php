<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# OrderStatusApproved.php


namespace LuzPropria\Extra\Api\Orders;


use LuzPropria\Extra\Api\Orders\Traits\OrderStatusTrait;
use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Class OrderStatusApproved
 * @package LuzPropria\Extra\Api\Orders
 */
class OrderStatusApproved implements Method {

    use OrderStatusTrait;
    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /orders/status/approved/
    }
} 