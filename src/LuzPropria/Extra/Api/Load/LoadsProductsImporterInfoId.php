<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 03:31
 */
# LoadsProductsImporterInfoId.php


namespace LuzPropria\Extra\Api\Load;


use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Operação utilizada para consultar o status da carga dos produtos.
 *
 * Class LoadsProductsImporterInfoId
 * @package LuzPropria\Extra\Api\Load
 */
class LoadsProductsImporterInfoId implements Method {

    /**
     * ID da operação de importação.
     *
     * @var string
     */
    private $importerInfoId;

    /**
     * @param $importerInfoId
     * @return $this
     */
    public function setImporterInfoId($importerInfoId)
    {
        $this->importerInfoId = $importerInfoId;
        return $this;
    }

    /**
     * @return string
     */
    public function getImporterInfoId()
    {
        return $this->importerInfoId;
    }


    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /loads/products/{importerInfoId}
    }
}