<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 03:53
 */
# ProductUdas.php


namespace LuzPropria\Extra\Api\Load;


class ProductUdas {

    /**
     * Nome do atributo
     *
     * @var string
     */
    private $udaNamed;

    /**
     * Valor do atributo
     *
     * @var string
     */
    private $udaValue;

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