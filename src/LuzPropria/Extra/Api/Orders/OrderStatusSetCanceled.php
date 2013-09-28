<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# OrderStatusCanceled.php


namespace LuzPropria\Extra\Api\Orders;
use LuzPropria\Extra\Utils\Interfaces\Method;


/**
 * Propõe o cancelamento do Pedido informado. Operação assíncrona
 *
 * Class OrderStatusCanceled
 * @package LuzPropria\Extra\Api\Orders
 */
class OrderStatusSetCanceled extends Order implements Method {

    /**
     * Texto com o motivo
     *
     * @var string
     */
    private $reason;

    /**
     * Texto com o motivo
     *
     * @param $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Texto com o motivo
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Validar motivo cancelamento
     *
     * @return bool
     */
    public function isReason()
    {
        return !is_null($this->reason) OR !strlen($this->reason) === 0;
    }

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'POST';
    }

} 