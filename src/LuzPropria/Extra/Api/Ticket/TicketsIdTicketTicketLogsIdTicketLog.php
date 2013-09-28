<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 13:19
 */
# TicketsIdTicketTicketLogsIdTicketLog.php


namespace LuzPropria\Extra\Api\Ticket;


use LuzPropria\Extra\Utils\Interfaces\Method;

class TicketsIdTicketTicketLogsIdTicketLog implements Method {

    /**
     * Identificador do protocolo.
     *
     * @var string
     */
    private $idTicket;

    /**
     * @var string
     */
    private $idTicketLog;

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
     * @param $idTicketLog
     * @return $this
     */
    public function setIdTicketLog($idTicketLog)
    {
        $this->idTicketLog = $idTicketLog;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdTicketLog()
    {
        return $this->idTicketLog;
    }

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /tickets/{idTicket}/ticketLogs/{idTicketLog}
    }
}