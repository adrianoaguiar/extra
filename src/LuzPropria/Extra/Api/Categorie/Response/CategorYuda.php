<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 10:41
 */
# CategorYuda.php


namespace LuzPropria\Extra\Api\Categorie\Response;


class CategorYuda {

    /**
     *  Id do atributo
     *
     * @var int
     */
    private $udaId;

    /**
     * Nome do atributo
     *
     * @var string
     */
    private $udaName;

    /**
     * @param $udaId
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
     * @param $udaName
     * @return $this
     */
    public function setUdaName($udaName)
    {
        $this->udaName = $udaName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUdaName()
    {
        return $this->udaName;
    }


}