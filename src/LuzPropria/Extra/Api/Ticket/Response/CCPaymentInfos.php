<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 11:21
 */
# CCPaymentInfos.php


namespace LuzPropria\Extra\Api\Ticket\Response;


class CCPaymentInfos
{

    /**
     * Código de autorização,
     *
     * @var string
     */
    private $codAuthorization;

    /**
     * Número de documento,
     *
     * @var string
     */
    private $codConsumerDoc;

    /**
     * Missing description,
     *
     * @var string
     */
    private $codEstablishment;

    /**
     * Código do lote,
     *
     * @var string
     */
    private $codLot;

    /**
     * Data da compra,
     *
     * @var string
     */
    private $datPurchase;

    /**
     * Número do Cartão de Crédito,
     *
     * @var string
     */
    private $numCreditCard;

    /**
     * Número de parcelas,
     *
     * @var string
     */
    private $numInstallments;

    /**
     * Missing description,
     *
     * @var string
     */
    private $txtCreditCard;

    /**
     * Valor da compra
     *
     * @var string
     */
    private $valPurchase;

    /**
     * @param $codAuthorization
     * @return $this
     */
    public function setCodAuthorization($codAuthorization)
    {
        $this->codAuthorization = $codAuthorization;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodAuthorization()
    {
        return $this->codAuthorization;
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
     * @param $codEstablishment
     * @return $this
     */
    public function setCodEstablishment($codEstablishment)
    {
        $this->codEstablishment = $codEstablishment;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodEstablishment()
    {
        return $this->codEstablishment;
    }

    /**
     * @param $codLot
     * @return $this
     */
    public function setCodLot($codLot)
    {
        $this->codLot = $codLot;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodLot()
    {
        return $this->codLot;
    }

    /**
     * @param $datPurchase
     * @return $this
     */
    public function setDatPurchase($datPurchase)
    {
        $this->datPurchase = $datPurchase;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatPurchase()
    {
        return $this->datPurchase;
    }

    /**
     * @param $numCreditCard
     * @return $this
     */
    public function setNumCreditCard($numCreditCard)
    {
        $this->numCreditCard = $numCreditCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumCreditCard()
    {
        return $this->numCreditCard;
    }

    /**
     * @param $numInstallments
     * @return $this
     */
    public function setNumInstallments($numInstallments)
    {
        $this->numInstallments = $numInstallments;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumInstallments()
    {
        return $this->numInstallments;
    }

    /**
     * @param $txtCreditCard
     * @return $this
     */
    public function setTxtCreditCard($txtCreditCard)
    {
        $this->txtCreditCard = $txtCreditCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getTxtCreditCard()
    {
        return $this->txtCreditCard;
    }

    /**
     * @param $valPurchase
     * @return $this
     */
    public function setValPurchase($valPurchase)
    {
        $this->valPurchase = $valPurchase;
        return $this;
    }

    /**
     * @return string
     */
    public function getValPurchase()
    {
        return $this->valPurchase;
    }


} 