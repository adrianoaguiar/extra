<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 11:55
 */
# Tickets.php


namespace LuzPropria\Extra\Api\Ticket;

use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Serviço para criação de um novo protocolo.
 *
 * Tipos possíveis para o protocolo:
 * - contact: Falar com o comprador
 * - cancel: Solicitação de cancelamento
 *
 * T odo contato com o comprador, com exceção dos os emails transacionais que já são
 * enviados pelo Marketplace, deve ser realizado através desta API.
 *
 * Class Tickets
 * @package LuzPropria\Extra\Api\Ticket
 */
class Tickets implements Method {

    /**
     * Id do pedido do lojista.
     *
     * @var string
     */
    private $idSeller;

    /**
     * Objeto newTicket.
     *
     * @var NewTicket
     */
    private $newTicket;

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
     * @param NewTicket $newTicket
     * @return $this
     */
    public function setNewTicket(NewTicket $newTicket)
    {
        $this->newTicket = $newTicket;
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Api\Ticket\NewTicket
     */
    public function getNewTicket()
    {
        return $this->newTicket;
    }

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'POST'; // /tickets
    }
}