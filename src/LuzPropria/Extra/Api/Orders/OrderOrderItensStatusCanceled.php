<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# OrderOrderItensStatusCanceled.php


namespace LuzPropria\Extra\Api\Orders;

/**
 * Propõe o cancelamento dos Itens de Pedido informados.
 *
 *
 * Class OrderOrderItensStatusCanceled
 * @package LuzPropria\Extra\Api\Orders
 */
class OrderOrderItensStatusCanceled extends OrderOrderItens {

    /**
     * @var ItemCancelationRequest
     */
    private $itemCancelationRequest;

    /**
     * @param \LuzPropria\Extra\Api\Orders\ItemCancelationRequest $itemCancelationRequest
     */
    public function setItemCancelationRequest(ItemCancelationRequest $itemCancelationRequest = null)
    {
        $this->itemCancelationRequest = $itemCancelationRequest;
    }

    /**
     * @return \LuzPropria\Extra\Api\Orders\ItemCancelationRequest
     */
    public function getItemCancelationRequest()
    {
        return $this->itemCancelationRequest;
    }

    /**
     * @return bool
     */
    public function isItemCancelationRequest()
    {
        return $this->itemCancelationRequest instanceof ItemCancelationRequest;
    }

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'POST'; // /orders/{orderId}/ordersItems/status/canceled/
    }
} 