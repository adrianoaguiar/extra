<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 03:18
 */
# SellerGetItem.php


namespace LuzPropria\Extra\Api\Seller;


use LuzPropria\Extra\Utils\Interfaces\Method;


/**
 * Recupera detalhes do Item do Lojista através do sku informado.
 *
 * Class SellerGetItem
 * @package LuzPropria\Extra\Api\Seller
 */
class SellerGetItem implements Method {

    /**
     * SKU ID do produto no Marketplace.
     *
     * @var string
     */
    private $skuId;

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
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /sellerItems/{skuId}
    }
}