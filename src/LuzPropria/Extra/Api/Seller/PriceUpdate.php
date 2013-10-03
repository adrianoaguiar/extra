<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# PriceUpdate.php


namespace LuzPropria\Extra\Api\Seller;


/**
 *
 * O campo installmentId é utilizado para passar o tipo de parcelamento que o produto pode ser vendido.
 * Esse é uma campo obsoleto que está na API para atender alguns necessidade da API antiga.
 * Há um serviço, ainda não disponibilizado na API, que retorna os valores possíveis de parcelamento,
 * mas até o presente momento, não existe a inteção de disponibilizá-lo.
 * Por enquanto, esse campo pode ser passado sem valor algum.
 *
 * Class PriceUpdate
 * @package LuzPropria\Extra\Api\Seller
 */
class PriceUpdate {

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
     * @return string
     */
    function __toString()
    {
        return json_encode(get_object_vars($this));
    }
}