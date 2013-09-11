<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 10:51
 */
# Tracking.php

namespace LuzPropria\Extra\Api\Orders\Response;


/**
 * Recupera detalhes do pedido informado.
 *
 * Class Tracking
 * @package LuzPropria\Extra\Api\Orders\Response
 *
 * orderId: string {ID de identificação do pedido},
 * orderItems: Array[string] {Lista de identificadores dos itens no pedido},
 * controlPoint: string {Status do pedido},
 * extraDescription: string {Descrição adicional sobre tracking},
 * occurenceDt: Date {Data da ocorrência},
 * carrierName: string {Nome da transportadora},
 * url: string {Url para consulta na transportadora},
 * objectId: string {ID do objeto na transportadora},
 * originDeliveryId: string {ID único da entrega para o lojista no parceiro, não pode haver repetição deste ID},
 * accessKeyNfe: string {Número da nota fiscal},
 * linkNfe: string {Url para consulta da NFE},
 * nfe: String {Número da NFE},
 * serieNfe: string {Número de serie da NFE}
 */
class Tracking
{
    /**
     * ID de identificação do pedido
     *
     * @var string
     */
    private $orderId;

    /**
     * Lista de identificadores dos itens no pedido
     *
     * @var array
     */
    private $orderItems;

    /**
     * Status do pedido
     *
     * @var string
     */
    private $controlPoint;

    /**
     * Descrição adicional sobre tracking
     *
     * @var string
     */
    private $extraDescription;

    /**
     * Data da ocorrência
     *
     * @var \DateTime
     */
    private $occurenceDt;

    /**
     * Nome da transportadora
     *
     * @var string
     */
    private $carrierName;

    /**
     * Url para consulta na transportadora
     *
     * @var string
     */
    private $url;

    /**
     * ID do objeto na transportadora
     *
     * @var string
     */
    private $objectId;

    /**
     * ID único da entrega para o lojista no parceiro, não pode haver repetição deste ID
     *
     * @var string
     */
    private $originDeliveryId;

    /**
     * Número da nota fiscal
     *
     * @var string
     */
    private $accessKeyNfe;

    /**
     * Url para consulta da NFE
     *
     * @var string
     */
    private $linkNfe;

    /**
     * Número da NFE
     *
     * @var string
     */
    private $nfe;

    /**
     * Número de serie da NFE
     *
     * @var string
     */
    private $serieNfe;

    /**
     * @param string $accessKeyNfe
     */
    public function setAccessKeyNfe($accessKeyNfe)
    {
        $this->accessKeyNfe = $accessKeyNfe;
    }

    /**
     * @return string
     */
    public function getAccessKeyNfe()
    {
        return $this->accessKeyNfe;
    }

    /**
     * @param string $carrierName
     */
    public function setCarrierName($carrierName)
    {
        $this->carrierName = $carrierName;
    }

    /**
     * @return string
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }

    /**
     * @param string $controlPoint
     */
    public function setControlPoint($controlPoint)
    {
        $this->controlPoint = $controlPoint;
    }

    /**
     * @return string
     */
    public function getControlPoint()
    {
        return $this->controlPoint;
    }

    /**
     * @param string $extraDescription
     */
    public function setExtraDescription($extraDescription)
    {
        $this->extraDescription = $extraDescription;
    }

    /**
     * @return string
     */
    public function getExtraDescription()
    {
        return $this->extraDescription;
    }

    /**
     * @param string $linkNfe
     */
    public function setLinkNfe($linkNfe)
    {
        $this->linkNfe = $linkNfe;
    }

    /**
     * @return string
     */
    public function getLinkNfe()
    {
        return $this->linkNfe;
    }

    /**
     * @param string $nfe
     */
    public function setNfe($nfe)
    {
        $this->nfe = $nfe;
    }

    /**
     * @return string
     */
    public function getNfe()
    {
        return $this->nfe;
    }

    /**
     * @param string $objectId
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    }

    /**
     * @return string
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @param \DateTime $occurenceDt
     */
    public function setOccurenceDt($occurenceDt)
    {
        $this->occurenceDt = $occurenceDt;
    }

    /**
     * @return \DateTime
     */
    public function getOccurenceDt()
    {
        return $this->occurenceDt;
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
     * @param array $orderItems
     */
    public function setOrderItems($orderItems)
    {
        $this->orderItems = $orderItems;
    }

    /**
     * @return array
     */
    public function getOrderItems()
    {
        return $this->orderItems;
    }

    /**
     * @param string $originDeliveryId
     */
    public function setOriginDeliveryId($originDeliveryId)
    {
        $this->originDeliveryId = $originDeliveryId;
    }

    /**
     * @return string
     */
    public function getOriginDeliveryId()
    {
        return $this->originDeliveryId;
    }

    /**
     * @param string $serieNfe
     */
    public function setSerieNfe($serieNfe)
    {
        $this->serieNfe = $serieNfe;
    }

    /**
     * @return string
     */
    public function getSerieNfe()
    {
        return $this->serieNfe;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}