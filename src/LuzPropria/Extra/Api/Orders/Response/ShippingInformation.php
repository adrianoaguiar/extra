<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 10:37
 */
# ShippingInformation.php

namespace LuzPropria\Extra\Api\Orders\Response;

use LuzPropria\Extra\Api\Orders\Response\Traits\InformationTrait;

/**
 * Recupera detalhes do pedido informado.
 *
 * Class ShippingInformation
 * @package LuzPropria\Extra\Api\Orders\Response
 *
 * deliveryType: string {Tipo de entrega (Normal, Expressa, Economica, Garantida, Agendada)},
 * scheduledDate: Date {Data para entrega agendada (quando existir)},
 * scheduledPeriod: string {Período da entrega agendada (quando existir)},
 * recipientName: string {Nome do contato no endereço},
 * address: string {Endereço (nome da rua, avenida ... )},
 * addressNr: string {Número do endereço},
 * additionalInfo: string {Informações adicionais para entrega},
 * quarter: string {Bairro},
 * City: string {Cidade},
 * State: string {Estado},
 * countryId: string {Identificação do País. Baseado na ISO-3166, padrão alpha 2},
 * postalCd: string {CEP}, reference: string {Referência para entrega},
 * addressExtraField1: string {Campo extra para endereço 1},
 * addressExtraField2: string {Campo extra para endereço 2},
 * buildingNm: string {Número do prédio}
 */
class ShippingInformation
{
    /**
     * Trait InformationTrait
     * address: string {Endereço (nome da rua, avenida ... )},
     * addressNr: string {Número do endereço},
     * additionalInfo: string {Informações adicionais para entrega},
     * quarter: string {Bairro},
     * City: string {Cidade},
     * State: string {Estado},
     * countryId: string {Identificação do País. Baseado na ISO-3166, padrão alpha 2},
     * postalCd: string {CEP}, reference: string {Referência para entrega},
     * addressExtraField1: string {Campo extra para endereço 1},
     * addressExtraField2: string {Campo extra para endereço 2},
     * buildingNm: string {Número do prédio}
     */
    use InformationTrait;


    /**
     * Tipo de entrega (Normal, Expressa, Economica, Garantida, Agendada)
     *
     * @var string
     */
    private $deliveryType;

    /**
     * Data para entrega agendada (quando existir)
     *
     * @var \DateTime
     */
    private $scheduledDate;

    /**
     * Período da entrega agendada (quando existir)
     *
     * @var string
     */
    private $scheduledPeriod;

    /**
     * Nome do contato no endereço
     *
     * @var string
     */
    private $recipientName;

    /**
     * @param string $deliveryType
     */
    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;
    }

    /**
     * @return string
     */
    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * @param string $recipientName
     */
    public function setRecipientName($recipientName)
    {
        $this->recipientName = $recipientName;
    }

    /**
     * @return string
     */
    public function getRecipientName()
    {
        return $this->recipientName;
    }

    /**
     * @param \DateTime $scheduledDate
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->scheduledDate = $scheduledDate;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledDate()
    {
        return $this->scheduledDate;
    }

    /**
     * @param string $scheduledPeriod
     */
    public function setScheduledPeriod($scheduledPeriod)
    {
        $this->scheduledPeriod = $scheduledPeriod;
    }

    /**
     * @return string
     */
    public function getScheduledPeriod()
    {
        return $this->scheduledPeriod;
    }

}