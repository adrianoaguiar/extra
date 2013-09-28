<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 12:17
 */
# EditTicket.php


namespace LuzPropria\Extra\Api\Ticket;


class EditTicket
{

    /**
     * closeTicket (Encerrar protocolo) ou changeConfirmation (Confirmar troca/devolução).,
     *
     * @var string
     */
    private $Type;

    /**
     * Identificador do protocolo. Deve ser o mesmo passado via path param.,
     *
     * @var string
     */
    private $idTicket;

    /**
     * Campo textual para comentário.,
     *
     * @var string
     */
    private $comment;

    /**
     * Indica se um e-mail será enviado ao comprador (true ou false),
     *
     * @var boolean
     */
    private $sendMsg;

    /**
     * Id do pedido do lojista. Campo só é obrigatório quando uma confirmação de troca/devolução. Type = “changeConfirmation”,
     *
     * @var string
     */
    private $orderId;

    /**
     * Id do item do pedido. Campo só é obrigatório quando uma confirmação de troca/devolução. Type = “changeConfirmation”,
     *
     * @var string
     */
    private $orderItemId;

    /**
     * Prazo para troca (envio do novo produto). Campo só é obrigatório quando for uma confirmação de troca/devolução. Type = “changeConfirmation” e action = “changeProduct”,
     *
     * @var int
     */
    private $time;

    /**
     * Indica se o protocolo será encerrado após a confirmação de troca/devolução (true ou false). Campo só é obrigatório quando uma confirmação de troca/devolução. Type = “changeConfirmation”,
     *
     * @var boolean
     */
    private $closeProtocol;

    /**
     * changeproduct (troca), accountchargeback (estorno em conta corrente), creditcardchargeback (estorno no cartão de crédito). Campo só é obrigatório quando uma confirmação de troca/devolução. Type = “changeConfirmation”
     *
     * @var String
     */
    private $action;

    /**
     * @param $Type
     * @return $this
     */
    public function setType($Type)
    {
        $this->Type = array_key_exists($Type, array(
            'closeTicket' => 'Encerrar protocolo',
            'changeConfirmation' => 'Confirmar troca/devolução',
        )) ? $Type : 'closeTicket';
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = array_key_exists($action, array(
            'changeproduct' => 'troca',
            'accountchargeback' => 'estorno em conta corrente',
            'creditcardchargeback' => 'estorno no cartão de crédito',

        ));
        return $this;
    }

    /**
     * Campo só é obrigatório quando uma confirmação de troca/devolução.
     * Type = “changeConfirmation”
     *
     * @return bool
     */
    public function hasAction()
    {
        return $this->Type === 'changeConfirmation';
    }

    /**
     * @return String
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param boolean $closeProtocol
     * @return $this
     */
    public function setCloseProtocol($closeProtocol)
    {
        $this->closeProtocol = (bool)$closeProtocol;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCloseProtocol()
    {
        return $this->closeProtocol;
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
     * Order Valid
     * @return bool
     */
    public function hasOrderId()
    {
        return $this->Type === 'changeConfirmation';
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

    /**
     * Campo só é obrigatório quando uma confirmação de troca/devolução.
     * Type = “changeConfirmation”
     *
     * @return bool
     */
    public function hasOrderItemId()
    {
        return $this->Type === 'changeConfirmation';
    }

    /**
     * @param boolean $sendMsg
     * @return $this
     */
    public function setSendMsg($sendMsg)
    {
        $this->sendMsg = (bool)$sendMsg;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSendMsg()
    {
        return $this->sendMsg;
    }

    /**
     * @param $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = (int)$time;
        return $this;
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     *  Campo só é obrigatório quando for uma confirmação de troca/devolução.
     *  Type = “changeConfirmation” e
     *  action = “changeProduct”
     *
     * @return bool
     */
    public function hasTime()
    {
        return $this->Type === 'changeConfirmation' && $this->action === 'changeProduct';
    }

} 