<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# ProductSku.php


namespace LuzPropria\Extra\Api\Product;


use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Recupera detalhes do produto informado.
 *
 * Class ProductSku
 * @package LuzPropria\Extra\Api\Product
 */
class ProductSku implements Method {

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
        return 'GET'; // /products/sku/{skuId}
    }
}