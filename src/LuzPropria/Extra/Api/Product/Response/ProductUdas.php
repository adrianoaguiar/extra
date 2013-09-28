<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 12/09/13
 */
# ProductUdas.php


namespace LuzPropria\Extra\Api\Product\Response;

/**
 * Class ProductUdas
 * @package LuzPropria\Extra\Api\Product\Response
 * udaId (int, optional): ID do atributo,
 * udaNamed (string, optional): Nome do atributo,
 * udaValue (string, optional): Valor do atributo
 */
class ProductUdas {

    /**
     * ID do atributo,
     *
     * @var int
     */
    private $udaId;

    /**
     * Nome do atributo,
     *
     * @var string
     */
    private $udaNamed;

    /**
     * Valor do atributo.
     *
     * @var string
     */
    private $udaValue;


    /**
     * @param int $udaId
     * @return $this
     */
    public function setUdaId($udaId)
    {
        $this->udaId = (int)$udaId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUdaId()
    {
        return $this->udaId;
    }

    /**
     * @param $udaNamed
     * @return $this
     */
    public function setUdaNamed($udaNamed)
    {
        $this->udaNamed = $udaNamed;
        return $this;
    }

    /**
     * @return string
     */
    public function getUdaNamed()
    {
        return $this->udaNamed;
    }

    /**
     * @param $udaValue
     * @return $this
     */
    public function setUdaValue($udaValue)
    {
        $this->udaValue = $udaValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getUdaValue()
    {
        return $this->udaValue;
    }

}