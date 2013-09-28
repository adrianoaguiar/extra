<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 12:00
 */
# NewTicket.php


namespace LuzPropria\Extra\Api\Ticket;


class NewTicket {

	/**
	 * “contact” (falar com o comprador) ou “cancel” (solicitação de cancelamento), 
	 * 
	 * @var string
	 */
	private $Type;

	/**
	 * Id do pedido do lojista, 
	 * 
	 * @var string
	 */
	private $orderId;

	/**
	 * Id do item do pedido. Este valor só é obrigatório quando para tickets de cancelamento. Type = “cancel”, 
	 * 
	 * @var string
	 */
	private $orderItemId;

	/**
	 * Texto contendo o comentário do ticket 
	 * 
	 * @var string
	 */
	private $comment;

    /**
     * @param $Type
     * @return $this
     */
    public function setType($Type)
    {
        $this->Type = in_array($Type, array('contact','cancel')) ? $Type : 'contact';
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type ?: 'contact';
    }

    /**
     * @param $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param $orderItemId
     * @return $this
     */
    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->orderItemId;
    }


} 