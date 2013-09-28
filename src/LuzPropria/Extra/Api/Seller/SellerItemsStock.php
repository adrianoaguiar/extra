<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# SellerItemsStock.php

namespace LuzPropria\Extra\Api\Seller;
use LuzPropria\Extra\Utils\Interfaces\Method;


/**
 * Atualiza a quantidade disponível para venda do Item do Lojista informado.
 * Se atualizado para zero, o item não estará mais disponível para venda.
 *
 * Class SellerItemsStock
 * @package LuzPropria\Extra\Api\Seller
 */
class SellerItemsStock implements  Method {

    /**
     * SKU ID do produto no Marketplace.
     *
     * @var string
     */
    private $skuId;

    /**
     * Objeto stockUpdate.
     *
     * @var StockUpdate
     */
    private $stockUpdate;

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
     * @param StockUpdate $stockUpdate
     * @return $this
     */
    public function setStockUpdate(StockUpdate $stockUpdate)
    {
        $this->stockUpdate = $stockUpdate;
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Api\Seller\StockUpdate
     */
    public function getStockUpdate()
    {
        return $this->stockUpdate;
    }


    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'PUT'; // /sellerItems/{skuId}/stock
    }
}