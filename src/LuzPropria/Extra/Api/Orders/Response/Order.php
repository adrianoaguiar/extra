<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 10:03
 */
# Order.php

namespace LuzPropria\Extra\Api\Orders\Response;


use LuzPropria\Extra\Utils\ArrayCollection;

/**
 * Recupera detalhes do pedido informado.
 *
 * Class Order
 * @package LuzPropria\Extra\Api\Orders\Response
 *
 * orderId: string {ID do pedido},
 * orderMasterId: string {ID do pedido master},
 * totalAmount: double {Total do pedido},
 * purchaseDate: Date {Data da compra},
 * freightChargedAmount: double {Valor cobrado pelo frete},
 * freightActualAmount: double {Valor nominal do frete (sem descontos e abatimentos, com margem comercial)},
 * orderItems: Array[orderItem] {Lista de Itens do Pedido},
 * billingInformations: Array[billingInformation] {Lista de entidades billingInformation},
 * shippingInformationsList: Array[shippingInformation] {Lista de entidades shipppingInformation},
 * documentNr: string {CPF ou CNPJ do cliente},
 * inscricaoEstadual: string {Inscrição estadual (IE)},
 * customerEmail: string {e-mail do cliente gerado pelo marketplace},
 * customerName: string {Nome do cliente},
 * customerGender: string {Sexo do cliente (em caso de pessoa física)},
 * paymentTpId: int {Código do meio de pagamento},
 * freightAdditionalInfo: String {Informação adicional gerada na consulta de frete},
 * approvedDate: date {Data de aprovação de pagamento do pedido},
 * trackingList: Array[tracking] {Lista de tracking do Pedido},
 * customerPhoneNumber: string {DDD+telefone residencial (pessoa física) ou comercial (pessoa jurídica)}
 *
 */
class Order {

    /**
     * ID do pedido
     *
     * @var string
     */
    private $orderId;

    /**
     * ID do pedido master
     *
     * @var string
     */
    private $orderMasterId;

    /**
     * Total do pedido
     *
     * @var float
     */
    private $totalAmount;

    /**
     * Data da compra
     *
     * @var \DateTime
     */
    private $purchaseDate;

    /**
     * Valor cobrado pelo frete
     *
     * @var float
     */
    private $freightChargedAmount;

    /**
     * Valor nominal do frete (sem descontos e abatimentos, com margem comercial)
     *
     * @var float
     */
    private $freightActualAmount;

    /**
     * Lista de Itens do Pedido
     *
     * @var ArrayCollection
     */
    private $orderItems;

    /**
     * Lista de entidades billingInformation
     *
     * @var ArrayCollection
     */
    private $billingInformations;

    /**
     * Lista de entidades shipppingInformation
     *
     * @var ArrayCollection
     */
    private $shippingInformationsList;

    /**
     * CPF ou CNPJ do cliente
     *
     * @var string
     */
    private $documentNr;

    /**
     * Inscrição estadual (IE)
     *
     * @var string
     */
    private $inscricaoEstadual;

    /**
     * e-mail do cliente gerado pelo marketplace
     *
     * @var string
     */
    private $customerEmail;

    /**
     * Nome do cliente
     *
     * @var string
     */
    private $customerName;

    /**
     * Sexo do cliente (em caso de pessoa física)
     *
     * @var string
     */
    private $customerGender;

    /**
     * Código do meio de pagamento
     *
     * @var int
     */
    private $paymentTpId;

    /**
     * Informação adicional gerada na consulta de frete
     *
     * @var string
     */
    private $freightAdditionalInfo;

    /**
     * Data de aprovação de pagamento do pedido
     *
     * @var \DateTime
     */
    private $approvedDate;

    /**
     * Lista de tracking do Pedido
     *
     * @var ArrayCollection
     */
    private $trackingList;

    /**
     * DDD+telefone residencial (pessoa física) ou comercial (pessoa jurídica)
     *
     * @var string
     */
    private $customerPhoneNumber;


    /**
     *
     */
    public function __construct()
    {
        $this->orderItems               =   new ArrayCollection();
        $this->billingInformations      =   new ArrayCollection();
        $this->shippingInformationsList =   new ArrayCollection();
        $this->trackingList             =   new ArrayCollection();
    }

    /**
     * @param float $freightActualAmount
     */
    public function setFreightActualAmount($freightActualAmount)
    {
        $this->freightActualAmount = $freightActualAmount;
    }

    /**
     * @return float
     */
    public function getFreightActualAmount()
    {
        return $this->freightActualAmount;
    }

    /**
     * @param float $freightChargedAmount
     */
    public function setFreightChargedAmount($freightChargedAmount)
    {
        $this->freightChargedAmount = $freightChargedAmount;
    }

    /**
     * @return float
     */
    public function getFreightChargedAmount()
    {
        return $this->freightChargedAmount;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param \LuzPropria\Extra\Utils\ArrayCollection $orderItems
     */
    public function setOrderItems($orderItems)
    {
        if($orderItems instanceof ArrayCollection) {
            $this->orderItems = $orderItems;
        }
        else {
            $this->orderItems->add($orderItems);
        }
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getOrderItems()
    {
        return $this->orderItems;
    }

    /**
     * @param string $orderMasterId
     */
    public function setOrderMasterId($orderMasterId)
    {
        $this->orderMasterId = $orderMasterId;
    }

    /**
     * @return string
     */
    public function getOrderMasterId()
    {
        return $this->orderMasterId;
    }

    /**
     * @param \DateTime $purchaseDate
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;
    }

    /**
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * @param float $totalAmount
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param \DateTime $approvedDate
     */
    public function setApprovedDate($approvedDate)
    {
        $this->approvedDate = $approvedDate;
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDate()
    {
        return $this->approvedDate;
    }

    /**
     * @param \LuzPropria\Extra\Utils\ArrayCollection $billingInformations
     */
    public function setBillingInformations($billingInformations)
    {
        $this->billingInformations = $billingInformations;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getBillingInformations()
    {
        return $this->billingInformations;
    }

    /**
     * @param string $customerEmail
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * @param string $customerGender
     */
    public function setCustomerGender($customerGender)
    {
        $this->customerGender = $customerGender;
    }

    /**
     * @return string
     */
    public function getCustomerGender()
    {
        return $this->customerGender;
    }

    /**
     * @param string $customerName
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param string $customerPhoneNumber
     */
    public function setCustomerPhoneNumber($customerPhoneNumber)
    {
        $this->customerPhoneNumber = $customerPhoneNumber;
    }

    /**
     * @return string
     */
    public function getCustomerPhoneNumber()
    {
        return $this->customerPhoneNumber;
    }

    /**
     * @param string $documentNr
     */
    public function setDocumentNr($documentNr)
    {
        $this->documentNr = $documentNr;
    }

    /**
     * @return string
     */
    public function getDocumentNr()
    {
        return $this->documentNr;
    }

    /**
     * @param string $freightAdditionalInfo
     */
    public function setFreightAdditionalInfo($freightAdditionalInfo)
    {
        $this->freightAdditionalInfo = $freightAdditionalInfo;
    }

    /**
     * @return string
     */
    public function getFreightAdditionalInfo()
    {
        return $this->freightAdditionalInfo;
    }

    /**
     * @param string $inscricaoEstadual
     */
    public function setInscricaoEstadual($inscricaoEstadual)
    {
        $this->inscricaoEstadual = $inscricaoEstadual;
    }

    /**
     * @return string
     */
    public function getInscricaoEstadual()
    {
        return $this->inscricaoEstadual;
    }

    /**
     * @param int $paymentTpId
     */
    public function setPaymentTpId($paymentTpId)
    {
        $this->paymentTpId = $paymentTpId;
    }

    /**
     * @return int
     */
    public function getPaymentTpId()
    {
        return $this->paymentTpId;
    }

    /**
     * @param \LuzPropria\Extra\Utils\ArrayCollection $shippingInformationsList
     */
    public function setShippingInformationsList($shippingInformationsList)
    {
        $this->shippingInformationsList = $shippingInformationsList;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getShippingInformationsList()
    {
        return $this->shippingInformationsList;
    }

    /**
     * @param \LuzPropria\Extra\Utils\ArrayCollection $trackingList
     */
    public function setTrackingList($trackingList)
    {
        $this->trackingList = $trackingList;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getTrackingList()
    {
        return $this->trackingList;
    }

}