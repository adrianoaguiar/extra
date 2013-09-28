<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 13:14
 */
# TicketsIdTicketTicketLogsPost.php


namespace LuzPropria\Extra\Api\Ticket;


use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Este serviço é chamado pelo sistema parceiro (lojista) para criar um novo ticket log (acompanhamento de protocolo).
 *
 * Class TicketsIdTicketTicketLogsPost
 * @package LuzPropria\Extra\Api\Ticket
 */
class TicketsIdTicketTicketLogsPost implements Method{


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
     * @var NewTicketLog
     */
    private $newTicketLog;

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
     * @param NewTicketLog $newTicketLog
     * @return $this
     */
    public function setNewTicketLog(NewTicketLog $newTicketLog)
    {
        $this->newTicketLog = $newTicketLog;
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Api\Ticket\NewTicketLog
     */
    public function getNewTicketLog()
    {
        return $this->newTicketLog;
    }

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'POST'; // /tickets/{idTicket}/ticketLogs
    }
}