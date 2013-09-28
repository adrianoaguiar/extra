<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 03:21
 */
# SellerItemsSkuOrigin.php


namespace LuzPropria\Extra\Api\Seller;


use LuzPropria\Extra\Utils\Interfaces\Method;

class SellerItemsSkuOrigin implements Method {

    /**
     * SKU ID do produto do Lojista.
     *
     * @var string
     */
    private $skuOrigin;

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
     * @return mixed
     */
    public function getSkuOrigin()
    {
        return $this->skuOrigin;
    }


    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /sellerItems/skuOrigin/{skuOrigin}
    }
}