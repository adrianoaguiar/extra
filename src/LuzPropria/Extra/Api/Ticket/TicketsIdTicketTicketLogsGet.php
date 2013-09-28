<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 13:03
 */
# TicketsIdTicketTicketLogsGet.php


namespace LuzPropria\Extra\Api\Ticket;


use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Operação utilizada para consultar os ticket logs (andamento) de um protocolo específico.
 *
 * Class TicketsIdTicketTicketLogsGet
 * @package LuzPropria\Extra\Api\Ticket
 */
class TicketsIdTicketTicketLogsGet implements Method {

    /**
     * Id do pedido do lojista.
     *
     * @var string
     */
    private $idSeller;

    /**
     * Identificador do protocolo.
     *
     * @var string
     */
    private $idTicket;

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
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /tickets/{idTicket}/ticketLogs
    }
}