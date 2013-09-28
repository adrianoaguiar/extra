<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 11:20
 */
# RefundInfo.php


namespace LuzPropria\Extra\Api\Ticket\Response;


class RefundInfo
{

    /**
     * Missing description,
     *
     * @var string
     */
    private $codConsumerDoc;

    /**
     * Missing description,
     *
     * @var string
     */
    private $flgApproved;

    /**
     * Número da conta bancária,
     *
     * @var string
     */
    private $numBankAccount;

    /**
     * Número da agência bancária,
     *
     * @var string
     */
    private $numBankAgency;

    /**
     * Banco
     *
     * @var Bank
     */
    private $bank;

    /**
     * @param Bank $bank
     * @return $this
     */
    public function setBank(Bank $bank)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return Bank
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param $codConsumerDoc
     * @return $this
     */
    public function setCodConsumerDoc($codConsumerDoc)
    {
        $this->codConsumerDoc = $codConsumerDoc;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodConsumerDoc()
    {
        return $this->codConsumerDoc;
    }

    /**
     * @param $flgApproved
     * @return $this
     */
    public function setFlgApproved($flgApproved)
    {
        $this->flgApproved = $flgApproved;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlgApproved()
    {
        return $this->flgApproved;
    }

    /**
     * @param $numBankAccount
     * @return $this
     */
    public function setNumBankAccount($numBankAccount)
    {
        $this->numBankAccount = $numBankAccount;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumBankAccount()
    {
        return $this->numBankAccount;
    }

    /**
     * @param $numBankAgency
     * @return $this
     */
    public function setNumBankAgency($numBankAgency)
    {
        $this->numBankAgency = $numBankAgency;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumBankAgency()
    {
        return $this->numBankAgency;
    }


} 