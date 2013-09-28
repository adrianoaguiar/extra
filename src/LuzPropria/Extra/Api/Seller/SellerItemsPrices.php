<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# SellerItemsPrices.php


namespace LuzPropria\Extra\Api\Seller;


use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Atualiza o preço ´de´ e o preço ´por´ (preço real para venda) do Item do Lojista informado.
 *
 * Class SellerItemsPrices
 * @package LuzPropria\Extra\Api\Seller
 */
class SellerItemsPrices implements Method {

    /**
     * SKU ID do produto no Marketplace.
     *
     * @var string
     */
    private $skuId;

    /**
     * Objeto priceUpdate.
     *
     * @var PriceUpdate
     */
    private $priceUpdate;

    /**
     * @param PriceUpdate $priceUpdate
     * @return $this
     */
    public function setPriceUpdate(PriceUpdate $priceUpdate)
    {
        $this->priceUpdate = $priceUpdate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceUpdate()
    {
        return $this->priceUpdate;
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
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'PUT'; // /sellerItems/{skuId}/prices
    }
}