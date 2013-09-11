<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 10:29
 */
# BillingInformation.php

namespace LuzPropria\Extra\Api\Orders\Response;

use LuzPropria\Extra\Api\Orders\Response\Traits\InformationTrait;

/**
 * Recupera detalhes do pedido informado.
 *
 * Class BillingInformation
 * @package LuzPropria\Extra\Api\Orders\Response
 *
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
class BillingInformation
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
}