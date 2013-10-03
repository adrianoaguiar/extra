<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# StockUpdate.php


namespace LuzPropria\Extra\Api\Seller;


class StockUpdate {

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
     * @return string
     */
    function __toString()
    {
        return json_encode(get_object_vars($this));
    }


} 