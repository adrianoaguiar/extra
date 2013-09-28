<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 11:03
 */
# TicketLogs.php


namespace LuzPropria\Extra\Api\Ticket\Response;


class TicketLogs {
	/**
	 * ID do ticket log, 
	 * 
	 * @var string
	 */
	private $idTicketLog;

	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $idUser;

	/**
	 * Descrição do ticket log, 
	 * 
	 * @var string
	 */
	private $txtDescription;

	/**
	 * Ação efetuada no ticket log, 
	 * 
	 * @var string
	 */
	private $action;

	/**
	 * Data de criação, 
	 * 
	 * @var string
	 */
	private $createDate;

	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $codOwner;

	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $typeOpener;

	/**
	 * Missing description 
	 * 
	 * @var string
	 */
	private $sellerAnsered;

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
     * @param $codOwner
     * @return $this
     */
    public function setCodOwner($codOwner)
    {
        $this->codOwner = $codOwner;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodOwner()
    {
        return $this->codOwner;
    }

    /**
     * @param $createDate
     * @return $this
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
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
     * @param $idUser
     * @return $this
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param $sellerAnsered
     * @return $this
     */
    public function setSellerAnsered($sellerAnsered)
    {
        $this->sellerAnsered = $sellerAnsered;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellerAnsered()
    {
        return $this->sellerAnsered;
    }

    /**
     * @param $txtDescription
     * @return $this
     */
    public function setTxtDescription($txtDescription)
    {
        $this->txtDescription = $txtDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getTxtDescription()
    {
        return $this->txtDescription;
    }

    /**
     * @param $typeOpener
     * @return $this
     */
    public function setTypeOpener($typeOpener)
    {
        $this->typeOpener = $typeOpener;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeOpener()
    {
        return $this->typeOpener;
    }


} 