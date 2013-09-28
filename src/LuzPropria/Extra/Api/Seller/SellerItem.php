<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# SellerItem.php


namespace LuzPropria\Extra\Api\Seller;


/**
 * skuOrigin (string, optional): SKU ID do produto do Lojista,
 * skuId (string): SKU ID do produto no Marketplace,
 * defaultPrice (double): Preço “de” no Marketplace,
 * salePrice (double): Preço “por”. Preço real de venda,
 * availableQuantity (int): Quantidade disponível para venda,
 * installmentId (string, optional): ID do parcelamento do produto (não está em uso no momento),
 * totalQuantity (int): Quantidade disponível em estoque,
 * crossDockingTime (int, optional): Tempo de fabricação
 *
 *
 * Class SellerItem
 * @package LuzPropria\Extra\Api\Seller
 */
class SellerItem {

    /**
     * SKU ID do produto do Lojista
     *
     * @var string
     */
    private $skuOrigin;

    /**
     * SKU ID do produto no Marketplace
     *
     * @var string
     */
    private $skuId;


    /**
     * Preço ´de´
     *
     * @var double
     */
    private $defaultPrice;

    /**
     * Preço ´por´
     * @var double
     */
    private $salePrice;

    /**
     * ID do parcelamento do produto
     *
     * @var string
     */
    private $installmentId;

    /**
     * Quantidade disponível para venda
     *
     * @var int
     */
    private $availableQuantity;

    /**
     * Quantidade disponível em estoque
     *
     * @var int
     */
    private $totalQuantity;

    /**
     * Tempo de fabricação
     *
     * @var int
     */
    private $crossDockingTime;

    /**
     * @param $defaultPrice
     * @return $this
     */
    public function setDefaultPrice($defaultPrice)
    {
        $this->defaultPrice = (double)$defaultPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultPrice()
    {
        return $this->defaultPrice;
    }

    /**
     * @param $installmentId
     * @return $this
     */
    public function setInstallmentId($installmentId)
    {
        $this->installmentId = $installmentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstallmentId()
    {
        //return $this->installmentId;
        return '';
    }

    /**
     * @param $salePrice
     * @return $this
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = (double)$salePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @param $availableQuantity
     * @return $this
     */
    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = (int)$availableQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * @param $totalQuantity
     * @return $this
     */
    public function setTotalQuantity($totalQuantity)
    {
        $this->totalQuantity = (int)$totalQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

    /**
     * @param $crossDockingTime
     * @return $this
     */
    public function setCrossDockingTime($crossDockingTime)
    {
        $this->crossDockingTime = (int)$crossDockingTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getCrossDockingTime()
    {
        return $this->crossDockingTime;
    }

    /**
     * @param $skuId
     * @return $this
     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param $skuOrigin
     * @return $this
     */
    public function setSkuOrigin($skuOrigin)
    {
        $this->skuOrigin = $skuOrigin;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkuOrigin()
    {
        return $this->skuOrigin;
    }


} 