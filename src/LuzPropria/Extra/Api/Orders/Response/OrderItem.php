<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 10:15
 */
# orderItem.php

namespace LuzPropria\Extra\Api\Orders\Response;

/**
 * Recupera detalhes do pedido informado.
 *
 * Class OrderItem
 * @package LuzPropria\Extra\Api\Orders\Response
 *

 *
 * orderItemId: string {ID do Item no pedido},
 * skuId: string {SKU ID do produto no Marketplace},
 * salePrice: double {Preço de venda unitário},
 * deliveryDate: date {Data limite que o Item do pedido poderá ser entregue (data de entrega)},
 * freightTime: int {Prazo de transporte gasto com frete em dias úteis},
 * leadTime: int {Tempo de disponibilidade})
 *
 */
class OrderItem {

    /**
     * ID do Item no pedido
     *
     * @var string
     */
    private $orderItemId;

    /**
     * SKU ID do produto no Marketplace
     *
     * @var string
     */
    private $skuId;

    /**
     * Preço de venda unitário
     *
     * @var float
     */
    private $salePrice;

    /**
     * Data limite que o Item do pedido poderá ser entregue (data de entrega)
     *
     * @var \DateTime
     */
    private $deliveryDate;

    /**
     * Prazo de transporte gasto com frete em dias úteis
     *
     * @var int
     */
    private $freightTime;

    /**
     * Tempo de disponibilidade
     *
     * @var int
     */
    private $leadTime;

    /**
     * @param \DateTime $deliveryDate
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param int $freightTime
     */
    public function setFreightTime($freightTime)
    {
        $this->freightTime = $freightTime;
    }

    /**
     * @return int
     */
    public function getFreightTime()
    {
        return $this->freightTime;
    }

    /**
     * @param int $leadTime
     */
    public function setLeadTime($leadTime)
    {
        $this->leadTime = $leadTime;
    }

    /**
     * @return int
     */
    public function getLeadTime()
    {
        return $this->leadTime;
    }

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
     * @param float $salePrice
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;
    }

    /**
     * @return float
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @param string $skuId
     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
    }

    /**
     * @return string
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

}