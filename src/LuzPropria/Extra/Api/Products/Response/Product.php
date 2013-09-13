<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 12/09/13
 */
# Product.php


namespace LuzPropria\Extra\Api\Products\Response;


/**
 * Class Product
 * @package LuzPropria\Extra\Api\Products\Response
 *
 * skuId (string, optional): SKU ID do produto no Marketplace,
 * prodId (string, optional): ID que identifica o grupo do produto no Marketplace,
 * sellingTitle (string, optional): Nome do sku no Marketplace. Ex Televisor de LCD Sony Bravia 40”....,
 * description (string, optional): Descrição do produto. Ex A Sony Bravia traz um novo conceito...,
 * GTIN (Array[string], optional): Lista de GTIN (EAN) do produto,
 * ISBN (string, optional): ISBN do produto,
 * defaultPrice (double, optional): Preço “de” no Marketplace,
 * salePrice (double, optional): Preço de venda no Marketplace,
 * productUdaLists (Array[productUdas], optional): Lista de entidades uda,
 * levelIdList (Array[int], optional): ID da categoria,
 * Weight (double, optional): Peso do produto,
 * Length (double, optional): Comprimento do produto,
 * Width (double, optional): Largura do produto,
 * Height (double, optional): Altura do produto,
 * variantName (string, optional): Nome da variante do produto,
 * handlingTime (int, optional): Tempo de fabricação em dias (padrão é 0),
 * installmentId (int, optional): ID do parcelamento,
 * medias (media, optional): (Opcional) Informações de Media
 *
 */
class Product {

    /**
     * SKU ID do produto no Marketplace,
     *
     * @var string
     */
    private $skuId;

    /**
     * ID que identifica o grupo do produto no Marketplace,
     *
     * @var string
     */
    private $prodId;

    /**
     * Nome do sku no Marketplace
     * Ex Televisor de LCD Sony Bravia 40”....,
     *
     * @var string
     *
     */
    private $sellingTitle;

    /**
     * Descrição do produto
     * Ex A Sony Bravia traz um novo conceito...,
     *
     * @var string
     */
    private $description;

    /**
     * Lista de GTIN (EAN) do produto
     *
     * @var array
     */
    private $GTIN;

    /**
     * ISBN do produto
     *
     * @var string
     */
    private $ISBN;

    /**
     * Preço “de” no Marketplace
     *
     * @var float
     */
    private $defaultPrice;

    /**
     * Preço de venda no Marketplace
     *
     * @var float
     */
    private $salePrice;

    /**
     * Lista de entidades uda
     *
     * @var array
     */
    private $productUdaLists;

    /**
     * ID da categoria
     *
     * @var array
     */
    private $levelIdList;

    /**
     * Peso do produto
     *
     * @var float
     */
    private $Weight;

    /**
     * Comprimento do produto
     *
     * @var float
     */
    private $Length;

    /**
     * Largura do produto
     *
     * @var float
     */
    private $Width;

    /**
     * Altura do produto
     *
     * @var float
     */
    private $Height;

    /**
     * Nome da variante do produto
     *
     * @var string
     */
    private $variantName;

    /**
     * Tempo de fabricação em dias (padrão é 0)
     *
     * @var int
     */
    private $handlingTime;

    /**
     * ID do parcelamento
     *
     * @var int
     */
    private $installmentId;

    /**
     * Informações de Media
     *
     * @var Media
     */
    private $medias;

}