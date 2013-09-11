<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 09:24
 */
# OrderItem.php

namespace LuzPropria\Extra\Api\Orders;


/**
 * Recupera detalhes de um Item específico do pedido.
 *
 * Class OrderItem
 * @package LuzPropria\Extra\Api\Orders
 */
class OrderItem extends Order {

    /**
     * ID do Item do pedido
     *
     * @var string
     */
    private $orderItemId;

    /**
     * Propõe o cancelamento dos Itens de Pedido informados.
     *
     *  ATENÇÃO: Para recupera detalhes de um Item específico do pedido não setar essa variavel.
     *
     * @var ItemCancelationRequest
     */
    private $itemCancelationRequest;

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
     * Verificar (
     *      Propõe o cancelamento dos Itens de Pedido informados "true".
     *  ou
     *      Para recupera detalhes de um Item específico do pedido não setar essa variavel "false".
     * )
     * @return bool
     */
    public function isItemCancelationRequest()
    {
        return $this->itemCancelationRequest instanceof ItemCancelationRequest;
    }


}