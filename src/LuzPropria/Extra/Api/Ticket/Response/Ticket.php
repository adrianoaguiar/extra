<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 10:49
 */
# Ticket.php


namespace LuzPropria\Extra\Api\Ticket\Response;


use LuzPropria\Extra\Api\Orders\Exception\FormatDateInvalidException;
use LuzPropria\Extra\Utils\ArrayCollection;

class Ticket {

    /**
     * Nome do Cliente
     *
     * @var string
     */
    private $nameCustomer;

    /**
     * ID do ticket
     *
     * @var string
     */
    private $idTicket;

    /**
     * Descrição do ticket
     *
     * @var string
     */
    private $description;

    /**
     * Missing description
     *
     * @var string
     */
    private $codOpener;

    /**
     * Data de criação
     *
     * @var \DateTime
     */
    private $createDate;

    /**
     * Texto com o motivo
     *
     * @var string
     */
    private $reason;

    /**
     * Ação efetuada no ticket
     *
     * @var string
     */
    private $action;

    /**
     * Missing description
     *
     * @var string
     */
    private $responsible;

    /**
     * Código do ticket
     *
     * @var string
     */
    private $codTicket;

    /**
     * Missing description
     *
     * @var string
     */
    private $order;

    /**
     * Missing description
     *
     * @var string
     */
    private $flgFeeRefund;

    /**
     * Missing description
     *
     * @var string
     */
    private $flgIntervention;

    /**
     * Missing description
     *
     * @var string
     */
    private $idOrderConsumer;

    /**
     * Título do ticket
     *
     * @var string
     */
    private $ticketSubject;

    /**
     * Missing description
     *
     * @var string
     */
    private $openingCodOwner;

    /**
     * Data de encerramento
     *
     * @var |DateTime
     */
    private $endDate;

    /**
     * Missing description
     *
     * @var string
     */
    private $slaStartDate;

    /**
     * Missing description
     *
     * @var string
     */
    private $slaExpirationDate;

    /**
     * Missing description
     *
     * @var string
     */
    private $status;

    /**
     * Data da última atualização
     *
     * @var \DateTime
     */
    private $datLastUpdate;

    /**
     * Lista de objetos ticketLogs relacionado ao ticket.
     *
     * @var ArrayCollection
     */
    private $ticketLogs;

    /**
     * Lista de obejtos orderInfos
     *
     * @var ArrayCollection
     */
    private $orderInfos;


    public function __construct()
    {
        $this->ticketLogs = new ArrayCollection();
        $this->orderInfos = new ArrayCollection();
    }

    /**
     * @param $date_set
     * @return \DateTime
     * @throws \LuzPropria\Extra\Api\Orders\Exception\FormatDateInvalidException
     */
    private function getDate($date_set)
    {
        if($date_set instanceof \DateTime)
            $date_return = $date_set;
        else {
            $date = \DateTime::createFromFormat("Y-m-d", $date_set);
            if(null === $date)
                $date = \DateTime::createFromFormat("d/m/Y", $date_set);
            if(null === $date)
                throw new FormatDateInvalidException('date format invalid');

            $date_return = $date;
        }
        return $date_return;
    }
    /**
     * @param $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param $codOpener
     * @return $this
     */
    public function setCodOpener($codOpener)
    {
        $this->codOpener = $codOpener;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodOpener()
    {
        return $this->codOpener;
    }

    /**
     * @param $codTicket
     * @return $this
     */
    public function setCodTicket($codTicket)
    {
        $this->codTicket = $codTicket;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodTicket()
    {
        return $this->codTicket;
    }

    /**
     * @param $createDate
     * @return $this
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $this->getDate($createDate);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param $datLastUpdate
     * @return $this
     */
    public function setDatLastUpdate($datLastUpdate)
    {
        $this->datLastUpdate = $this->getDate($datLastUpdate);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatLastUpdate()
    {
        return $this->datLastUpdate;
    }

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $this->getDate($endDate);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param $flgFeeRefund
     * @return $this
     */
    public function setFlgFeeRefund($flgFeeRefund)
    {
        $this->flgFeeRefund = $flgFeeRefund;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlgFeeRefund()
    {
        return $this->flgFeeRefund;
    }

    /**
     * @param $flgIntervention
     * @return $this
     */
    public function setFlgIntervention($flgIntervention)
    {
        $this->flgIntervention = $flgIntervention;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlgIntervention()
    {
        return $this->flgIntervention;
    }

    /**
     * @param $idOrderConsumer
     * @return $this
     */
    public function setIdOrderConsumer($idOrderConsumer)
    {
        $this->idOrderConsumer = $idOrderConsumer;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdOrderConsumer()
    {
        return $this->idOrderConsumer;
    }

    /**
     * @param $idTicket
     * @return $this
     */
    public function setIdTicket($idTicket)
    {
        $this->idTicket = $idTicket;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdTicket()
    {
        return $this->idTicket;
    }

    /**
     * @param $nameCustomer
     * @return $this
     */
    public function setNameCustomer($nameCustomer)
    {
        $this->nameCustomer = $nameCustomer;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameCustomer()
    {
        return $this->nameCustomer;
    }

    /**
     * @param $openingCodOwner
     * @return $this
     */
    public function setOpeningCodOwner($openingCodOwner)
    {
        $this->openingCodOwner = $openingCodOwner;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpeningCodOwner()
    {
        return $this->openingCodOwner;
    }

    /**
     * @param $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param ArrayCollection $orderInfos
     * @return $this
     */
    public function setOrderInfos(ArrayCollection $orderInfos)
    {
        foreach($orderInfos as $info) {
            if($info instanceof OrderInfos) {
                $this->addOrderInfo($info);
            }
        }
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getOrderInfos()
    {
        return $this->orderInfos;
    }

    public function addOrderInfo(OrderInfos $info)
    {
        $this->orderInfos->add($info);
        return $this;
    }

    /**
     * @param $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param $responsible
     * @return $this
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * @param $slaExpirationDate
     * @return $this
     */
    public function setSlaExpirationDate($slaExpirationDate)
    {
        $this->slaExpirationDate = $slaExpirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlaExpirationDate()
    {
        return $this->slaExpirationDate;
    }

    /**
     * @param $slaStartDate
     * @return $this
     */
    public function setSlaStartDate($slaStartDate)
    {
        $this->slaStartDate = $slaStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlaStartDate()
    {
        return $this->slaStartDate;
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
     * @param ArrayCollection $ticketLogs
     * @return $this
     */
    public function setTicketLogs(ArrayCollection $ticketLogs)
    {
        foreach($ticketLogs as $log) {
            if($log instanceof TicketLogs) {
                $this->addLog($log);
            }
        }
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getTicketLogs()
    {
        return $this->ticketLogs;
    }

    /**
     * @param TicketLogs $log
     * @return $this
     */
    public function addLog(TicketLogs $log)
    {
        $this->ticketLogs->add($log);
        return $this;
    }

    public function addTicketLog(TicketLogs $log)
    {
        return $this->addLog($log);
    }

    /**
     * @param $ticketSubject
     * @return $this
     */
    public function setTicketSubject($ticketSubject)
    {
        $this->ticketSubject = $ticketSubject;
        return $this;
    }

    /**
     * @return string
     */
    public function getTicketSubject()
    {
        return $this->ticketSubject;
    }

} 