<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# Product.php


namespace LuzPropria\Extra\Api\Product;
use LuzPropria\Extra\Utils\Interfaces\Method;


/**
 * Recupera detalhes do produto informado.
 *
 * Class Product
 * @package LuzPropria\Extra\Api\Product
 */
class Product implements Method {

    /**
     * ID que identifica o grupo do produto no Marketplace.
     *
     * @var string
     */
    private $productId;

    /**
     * @param $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }


    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /products/{productId}
    }
}