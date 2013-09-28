<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 12:15
 */
# TicketsIdTicketPut.php


namespace LuzPropria\Extra\Api\Ticket;

use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Operação utilizada para alterar um protocolo. É possível confirmar uma troca/devolução ou encerrar um protocolo.
 *
 * Tipos possíveis para o protocolo:
 * - closeTicket: Encerrar protocolo
 * - changeConfirmation: Confirmar troca/devolução
 *
 * Ações possíveis para a alteração do protocolo:
 * - changeproduct: Troca
 * - accountchargeback: Estorno em conta corrente
 * - creditcardchargeback: Estorno no cartão de crédito
 *
 *
 * Class TicketsIdTicketPut
 * @package LuzPropria\Extra\Api\Ticket
 */
class TicketsIdTicketPut implements Method {

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
     * Objeto editTicket.
     *
     * @var EditTicket
     */
    private $ticket;

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
     * @param EditTicket $ticket
     * @return $this
     */
    public function setTicket(EditTicket $ticket)
    {
        $this->ticket = $ticket;
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Api\Ticket\EditTicket
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'PUT'; // /tickets/{idTicket}
    }
}