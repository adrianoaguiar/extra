<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 03:31
 */
# LoadsProductsImporterInfoIdSkuOrigin.php


namespace LuzPropria\Extra\Api\Load;

/**
 * Operação utilizada para consultar o status de um produto carregado através de operação de importação.
 *
 * Segue abaixo a lista de status possíveis para os produtos importados:
 * - Pendente de Aprovação
 * - Pendente de Categorização ou Deduplicação
 * - Produto enviado para integração
 * - Produto pendente de leitura na integração
 * - Produto disponível no Admin
 * - Produto indexado
 * - Produto Recusado
 * - Importação cancelada
 *
 *
 * Class LoadsProductsImporterInfoIdSkuOrigin
 * @package LuzPropria\Extra\Api\Load
 */
class LoadsProductsImporterInfoIdSkuOrigin {

    /**
     * ID da operação de importação
     *
     * @var string
     */
    private $importerInfoId;

    /**
     * SKU ID do produto do Lojista carregado através da operação de importação.
     *
     * @var string
     */
    private $skuOrigin;


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
     * @param $skuOrigin
     * @return $this
     */
    public function setSkuOrigin($skuOrigin)
    {
        $this->skuOrigin = $skuOrigin;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkuOrigin()
    {
        return $this->skuOrigin;
    }



} 