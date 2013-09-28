<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 10:49
 */
# InformationTrait.php

namespace LuzPropria\Extra\Api\Orders\Response\Traits;


trait InformationTrait
{
    /**
     * Endereço (nome da rua, avenida ... )
     *
     * @var string
     */
    private $address;

    /**
     * Número do endereço
     *
     * @var string
     */
    private $addressNr;

    /**
     * Informações adicionais
     *
     * @var string
     */
    private $additionalInfo;

    /**
     * Bairro
     *
     * @var string
     */
    private $quarter;

    /**
     * Cidade
     *
     * @var string
     */
    private $city;

    /**
     * Estado
     *
     * @var string
     */
    private $state;

    /**
     * Identificação do País. Baseado na ISO-3166, padrão alpha 2
     *
     * @var string
     */
    private $countryId;

    /**
     * Preço de venda unitário
     *
     * @var string
     */
    private $postalCd;

    /**
     * Referência para entrega
     *
     * @var string
     */
    private $reference;

    /**
     * Campo extra para endereço 1
     *
     * @var string
     */
    private $addressExtraField1;

    /**
     * Campo extra para endereço 2
     *
     * @var string
     */
    private $addressExtraField2;

    /**
     * Número do prédio
     *
     * @var string
     */
    private $buildingNm;

    /**
     * @param string $additionalInfo
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $addressExtraField1
     */
    public function setAddressExtraField1($addressExtraField1)
    {
        $this->addressExtraField1 = $addressExtraField1;
    }

    /**
     * @return string
     */
    public function getAddressExtraField1()
    {
        return $this->addressExtraField1;
    }

    /**
     * @param string $addressExtraField2
     */
    public function setAddressExtraField2($addressExtraField2)
    {
        $this->addressExtraField2 = $addressExtraField2;
    }

    /**
     * @return string
     */
    public function getAddressExtraField2()
    {
        return $this->addressExtraField2;
    }

    /**
     * @param string $addressNr
     */
    public function setAddressNr($addressNr)
    {
        $this->addressNr = $addressNr;
    }

    /**
     * @return string
     */
    public function getAddressNr()
    {
        return $this->addressNr;
    }

    /**
     * @param string $buildingNm
     */
    public function setBuildingNm($buildingNm)
    {
        $this->buildingNm = $buildingNm;
    }

    /**
     * @return string
     */
    public function getBuildingNm()
    {
        return $this->buildingNm;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $countryId
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * @return string
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param string $postalCd
     */
    public function setPostalCd($postalCd)
    {
        $this->postalCd = $postalCd;
    }

    /**
     * @return string
     */
    public function getPostalCd()
    {
        return $this->postalCd;
    }

    /**
     * @param string $quarter
     */
    public function setQuarter($quarter)
    {
        $this->quarter = $quarter;
    }

    /**
     * @return string
     */
    public function getQuarter()
    {
        return $this->quarter;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }


}