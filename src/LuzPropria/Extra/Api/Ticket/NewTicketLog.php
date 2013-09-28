<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 13:15
 */
# NewTicketLog.php


namespace LuzPropria\Extra\Api\Ticket;


class NewTicketLog {

	/**
	 * Campo textual para comentário, 
	 * 
	 * @var string
	 */
	private $comment;

	/**
	 * Indica se um e-mail é enviado ao comprador (true ou false) 
	 * 
	 * @var boolean
	 */
	private $sendMsg;

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
        return is_bool($this->sendMsg) ? $this->sendMsg : false;
    }



} 