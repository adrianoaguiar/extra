<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 11:29
 */
# Bank.php


namespace LuzPropria\Extra\Api\Ticket\Response;


class Bank {
	/**
	 * Código do banco, 
	 * 
	 * @var string
	 */
	private $codBank;

	/**
	 * Nome do banco 
	 * 
	 * @var string
	 */
	private $nameBank;

    /**
     * @param $codBank
     * @return $this
     */
    public function setCodBank($codBank)
    {
        $this->codBank = $codBank;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodBank()
    {
        return $this->codBank;
    }

    /**
     * @param $nameBank
     * @return $this
     */
    public function setNameBank($nameBank)
    {
        $this->nameBank = $nameBank;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameBank()
    {
        return $this->nameBank;
    }


} 