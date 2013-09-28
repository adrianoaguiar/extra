<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 10:14
 */
# LoadResponse.php


namespace LuzPropria\Extra\Api\Load\Response;
use LuzPropria\Extra\Api\Orders\Exception\FormatDateInvalidException;

/**
 * importerInfoId (string): ID da operação de importação,
 * status (string): Status do processamento de carga,
 * creationDate (string): Data de envio do arquivo para carga,
 * executionDate (string): Data de execução da carga
 *
 *
 * Class LoadResponse
 * @package LuzPropria\Extra\Api\Load\Response
 */
class LoadResponse {

    /**
     * ID da operação de importação,
     *
     * @var string
     */
    private $importerInfoId;

    /**
     * Status do processamento de carga,
     *
     * @var string
     */
    private $status;

    /**
     * Data de envio do arquivo para carga,
     *
     * @var \DateTime
     */
    private $creationDate;

    /**
     * Data de execução da carga
     *
     * @var \DateTime
     */
    private $executionDate;

    /**
     * @param $creationDate
     * @return $this
     * @throws \LuzPropria\Extra\Api\Orders\Exception\FormatDateInvalidException
     *
     * Date Format "Y-m-d" or "d/m/Y"
     *
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
     * @param $executionDate
     * @return $this
     * @throws \LuzPropria\Extra\Api\Orders\Exception\FormatDateInvalidException
     */
    public function setExecutionDate($executionDate)
    {
        if($executionDate instanceof \DateTime)
            $this->executionDate = $executionDate;
        else {
            $date = \DateTime::createFromFormat("Y-m-d", $executionDate);
            if(null === $date)
                $date = \DateTime::createFromFormat("d/m/Y", $executionDate);
            if(null === $date)
                throw new FormatDateInvalidException('date format invalid');

            $this->executionDate = $date;
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExecutionDate()
    {
        return $this->executionDate;
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
} 