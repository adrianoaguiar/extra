<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 10:23
 */
# ProductLoadResponse.php


namespace LuzPropria\Extra\Api\Load\Response;


use LuzPropria\Extra\Api\Orders\Exception\FormatDateInvalidException;

class ProductLoadResponse {
/*
importerInfoId (string): ID da operação de importação,
statusCode (string): Código do Status do produto importado,
status (string): Status do produto importado,
skuOrigin (string): SKU ID do produto do Lojista,
creationDate (string): Data de envio do arquivo para carga contendo o produto
 */
    /**
     * ID da operação de importação
     *
     * @var string
     */
    private $importerInfoId;

    /**
     * Código do Status do produto importado
     *
     * @var string
     */
    private $statusCode;

    /**
     * Status do produto importado
     *
     * @var string
     */
    private $status;

    /**
     * SKU ID do produto do Lojista
     *
     * @var string
     */
    private $skuOrigin;

    /**
     * Data de envio do arquivo para carga contendo o produto
     *
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @param $creationDate
     * @return $this
     * @throws \LuzPropria\Extra\Api\Orders\Exception\FormatDateInvalidException
     */
    public function setCreationDate($creationDate)
    {
        if($creationDate instanceof \DateTime)
            $this->creationDate = $creationDate;
        else {
            $date = \DateTime::createFromFormat("Y-m-d", $creationDate);
            if(null === $date)
                $date = \DateTime::createFromFormat("d/m/Y", $creationDate);
            if(null === $date)
                throw new FormatDateInvalidException('date format invalid');

            $this->creationDate = $date;
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

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

    /**
     * @param $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
} 