<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 10:48
 */
# TicketsGet.php


namespace LuzPropria\Extra\Api\Ticket;

use LuzPropria\Extra\Api\Orders\Traits\OrderStatusTrait;
use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Operação utilizada para consultar os protocolos na plataforma do Marketplace.
 *
 * Só serão exibidos os protocolos que sejam de propriedade do lojista/parceiro que está efetuando a consulta.
 *
 * Class TicketsGet
 * @package LuzPropria\Extra\Api\Ticket
 */
class TicketsGet implements Method {

    /**
     *
     * _offset
     * _limit
     */
    use OrderStatusTrait;

    /**
     * Id do lojista.
     *
     * @var string
     */
    private $idSeller;

    /**
     * Status do Protocolo.
     *
     * @var string
     */
    private $status;

    /**
     * Código do protocolo.
     *
     * @var string
     */
    private $code;

    /**
     * Nome do comprador (ou parte dele)
     *
     * @var string
     */
    private $customerName;

    /**
     * Data inicio de corte para última atualização do pedido, (padrão yyyy-MM-dd).
     *
     * @var \DateTime
     */
    private $startDate;

    /**
     * Data fim de corte para última atualização do pedido, (padrão yyyy-MM-dd).
     *
     * @var \DateTime
     */
    private $endDate;

    /**
     * @param $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $customerName
     * @return $this
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param \DateTime $endDate
     * @return $this
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param $idSeller
     * @return $this
     */
    public function setIdSeller($idSeller)
    {
        $this->idSeller = $idSeller;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdSeller()
    {
        return $this->idSeller;
    }

    /**
     * @param \DateTime $startDate
     * @return $this
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
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
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /tickets
    }
}