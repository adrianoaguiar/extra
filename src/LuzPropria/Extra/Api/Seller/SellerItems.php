<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# SellerItems.php


namespace LuzPropria\Extra\Api\Seller;
use LuzPropria\Extra\Utils\Interfaces\Method;


/**
 * Serviço utilizado para registrar (associar) Itens do Lojista que já estão disponíveis para venda no Marketplace.
 *
 * Essa operação deve enviar apenas Itens do Lojista que nunca foram vendidos e que já existam e sejam válidos no Marketplace.
 * Caso o objetivo seja atualizar preço e estoque os serviços utilizados devem ser:
 *  - /sellerItem/{skuId}/price
 *  - /sellerItem/{skuId}/stock
 *
 * Observações:
 * 1) É necessário aguardar o período de 01 (uma) hora para que os produtos associados estejam disponíveis para consulta.
 *    Isso é necessário para ambos ambientes: Produção e Sandbox.
 * 2) Caso o objetivo seja realizar uma carga de vários produtos, existentes ou não no Marketplace, utilizar POST /loads/products.
 *
 * O campo installmentId é utilizado para passar o tipo de parcelamento que o produto pode ser vendido.
 * Esse é uma campo obsoleto que está na API para atender alguns necessidade da API antiga.
 * Há um serviço, ainda não disponibilizado na API, que retorna os valores possíveis de parcelamento,
 * mas até o presente momento, não existe a inteção de disponibilizá-lo.
 * Por enquanto, esse campo pode ser passado sem valor algum.
 *
 *
 * Class SellerItems
 * @package LuzPropria\Extra\Api\Seller
 */
class SellerItems implements Method {

    /**
     * Ítem do Lojista.
     * @var SellerItem
     */
    private $sellerItem;

    /**
     * @param SellerItem $sellerItem
     * @return $this
     */
    public function setSellerItem(SellerItem $sellerItem)
    {
        $this->sellerItem = $sellerItem;
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Api\Seller\SellerItem
     */
    public function getSellerItem()
    {
        return $this->sellerItem;
    }

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'POST';  // /sellerItems
    }
}