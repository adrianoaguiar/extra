<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 11:03
 */
# OrderInfos.php


namespace LuzPropria\Extra\Api\Ticket\Response;


use LuzPropria\Extra\Utils\ArrayCollection;

class OrderInfos {
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $IdOrderConsumer;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $datOrder;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $flgApproved;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $idOrderItem;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $packageStatus;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $refundReason;
	/**
	 * ID SKU, 
	 * 
	 * @var string
	 */
	private $idSku;
	/**
	 * Nome do SKU, 
	 * 
	 * @var string
	 */
	private $namSku;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $numDays;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $valOrderRefund;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $qtyItem;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $qtyItemRefund;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $valUnitPrice;
	/**
	 * Valor do frete, 
	 * 
	 * @var string
	 */
	private $valFreight;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $valOtherCosts;
	/**
	 * Missing description, 
	 * 
	 * @var string
	 */
	private $idUser;
	/**
	 * Data da reembolso, 
	 * 
	 * @var string
	 */
	private $datRefund;
	/**
	 * Objeto refundInfo
	 * 
	 * @var RefundInfo
	 */
	private $refundInfo;
	/**
	 * Lista de obejtos cCPaymentInfos. 
	 * 
	 * @var ArrayCollection
	 */
	private $cCPaymentInfos;

    function __construct()
    {
        $this->cCPaymentInfos = new ArrayCollection();
    }


    /**
     * @param $IdOrderConsumer
     * @return $this
     */
    public function setIdOrderConsumer($IdOrderConsumer)
    {
        $this->IdOrderConsumer = $IdOrderConsumer;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdOrderConsumer()
    {
        return $this->IdOrderConsumer;
    }

    /**
     * @param ArrayCollection $cCPaymentInfos
     * @return $this
     */
    public function setCCPaymentInfos(ArrayCollection $cCPaymentInfos)
    {
        foreach($cCPaymentInfos as $info) {
            if($info instanceof CCPaymentInfos) {
                $this->addCCPaymentInfos($info);
            }
        }
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getCCPaymentInfos()
    {
        return $this->cCPaymentInfos;
    }

    /**
     * @param CCPaymentInfos $info
     */
    public function addCCPaymentInfos(CCPaymentInfos $info)
    {
        $this->cCPaymentInfos->add($info);
    }

    /**
     * @param $datOrder
     * @return $this
     */
    public function setDatOrder($datOrder)
    {
        $this->datOrder = $datOrder;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatOrder()
    {
        return $this->datOrder;
    }

    /**
     * @param $datRefund
     * @return $this
     */
    public function setDatRefund($datRefund)
    {
        $this->datRefund = $datRefund;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatRefund()
    {
        return $this->datRefund;
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
     * @param $idOrderItem
     * @return $this
     */
    public function setIdOrderItem($idOrderItem)
    {
        $this->idOrderItem = $idOrderItem;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdOrderItem()
    {
        return $this->idOrderItem;
    }

    /**
     * @param $idSku
     * @return $this
     */
    public function setIdSku($idSku)
    {
        $this->idSku = $idSku;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdSku()
    {
        return $this->idSku;
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
     * @param $namSku
     * @return $this
     */
    public function setNamSku($namSku)
    {
        $this->namSku = $namSku;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamSku()
    {
        return $this->namSku;
    }

    /**
     * @param $numDays
     * @return $this
     */
    public function setNumDays($numDays)
    {
        $this->numDays = $numDays;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumDays()
    {
        return $this->numDays;
    }

    /**
     * @param $packageStatus
     * @return $this
     */
    public function setPackageStatus($packageStatus)
    {
        $this->packageStatus = $packageStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageStatus()
    {
        return $this->packageStatus;
    }

    /**
     * @param $qtyItem
     * @return $this
     */
    public function setQtyItem($qtyItem)
    {
        $this->qtyItem = $qtyItem;
        return $this;
    }

    /**
     * @return string
     */
    public function getQtyItem()
    {
        return $this->qtyItem;
    }

    /**
     * @param $qtyItemRefund
     * @return $this
     */
    public function setQtyItemRefund($qtyItemRefund)
    {
        $this->qtyItemRefund = $qtyItemRefund;
        return $this;
    }

    /**
     * @return string
     */
    public function getQtyItemRefund()
    {
        return $this->qtyItemRefund;
    }

    /**
     * @param RefundInfo $refundInfo
     * @return $this
     */
    public function setRefundInfo(RefundInfo $refundInfo)
    {
        $this->refundInfo = $refundInfo;
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Api\Ticket\Response\RefundInfo
     */
    public function getRefundInfo()
    {
        return $this->refundInfo;
    }

    /**
     * @param $refundReason
     * @return $this
     */
    public function setRefundReason($refundReason)
    {
        $this->refundReason = $refundReason;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefundReason()
    {
        return $this->refundReason;
    }

    /**
     * @param $valFreight
     * @return $this
     */
    public function setValFreight($valFreight)
    {
        $this->valFreight = $valFreight;
        return $this;
    }

    /**
     * @return string
     */
    public function getValFreight()
    {
        return $this->valFreight;
    }

    /**
     * @param $valOrderRefund
     * @return $this
     */
    public function setValOrderRefund($valOrderRefund)
    {
        $this->valOrderRefund = $valOrderRefund;
        return $this;
    }

    /**
     * @return string
     */
    public function getValOrderRefund()
    {
        return $this->valOrderRefund;
    }

    /**
     * @param $valOtherCosts
     * @return $this
     */
    public function setValOtherCosts($valOtherCosts)
    {
        $this->valOtherCosts = $valOtherCosts;
        return $this;
    }

    /**
     * @return string
     */
    public function getValOtherCosts()
    {
        return $this->valOtherCosts;
    }

    /**
     * @param $valUnitPrice
     * @return $this
     */
    public function setValUnitPrice($valUnitPrice)
    {
        $this->valUnitPrice = $valUnitPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getValUnitPrice()
    {
        return $this->valUnitPrice;
    }


} 