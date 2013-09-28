<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 12/09/13
 */
# Product.php


namespace LuzPropria\Extra\Api\Product\Response;
use LuzPropria\Extra\Utils\ArrayCollection;


/**
 * Class Product
 * @package LuzPropria\Extra\Api\Product\Response
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
     * @var ArrayCollection
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
     * @var ArrayCollection
     */
    private $productUdaLists;

    /**
     * ID da categoria
     *
     * @var ArrayCollection
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


    /**
     *
     */
    public function __construct()
    {
        $this->GTIN = new ArrayCollection();
        $this->productUdaLists = new ArrayCollection();
        $this->levelIdList = new ArrayCollection();
    }

    /**
     * @param ArrayCollection $GTIN
     * @return $this
     */
    public function setGTIN(ArrayCollection $GTIN)
    {
        $this->GTIN = $GTIN;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getGTIN()
    {
        return $this->GTIN;
    }

    /**
     * @param $item
     * @return $this
     */
    public function addGTIN($item)
    {
        $this->GTIN->add($item);
        return $this;
    }

    /**
     * @param $Height
     * @return $this
     */
    public function setHeight($Height)
    {
        $this->Height = (double)$Height;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param $ISBN
     * @return $this
     */
    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
        return $this;
    }

    /**
     * @return string
     */
    public function getISBN()
    {
        return $this->ISBN;
    }

    /**
     * @param $Length
     * @return $this
     */
    public function setLength($Length)
    {
        $this->Length = (double)$Length;
        return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->Length;
    }

    /**
     * @param $Weight
     * @return $this
     */
    public function setWeight($Weight)
    {
        $this->Weight = (double)$Weight;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param $Width
     * @return $this
     */
    public function setWidth($Width)
    {
        $this->Width = (double)$Width;
        return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param $defaultPrice
     * @return $this
     */
    public function setDefaultPrice($defaultPrice)
    {
        $this->defaultPrice = (double)$defaultPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultPrice()
    {
        return $this->defaultPrice;
    }

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $handlingTime
     * @return $this
     */
    public function setHandlingTime($handlingTime)
    {
        $this->handlingTime = (int)$handlingTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getHandlingTime()
    {
        return $this->handlingTime;
    }

    /**
     * @param $installmentId
     * @return $this
     */
    public function setInstallmentId($installmentId)
    {
        $this->installmentId = (int)$installmentId;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstallmentId()
    {
        return $this->installmentId;
    }

    /**
     * @param ArrayCollection $levelIdList
     * @return $this
     */
    public function setLevelIdList(ArrayCollection $levelIdList)
    {
        foreach($levelIdList as $item) {
            $this->addLevelId($item);
        }
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getLevelIdList()
    {
        return $this->levelIdList;
    }

    /**
     * @param $item
     * @return $this
     */
    public function addLevelId($item)
    {
        if(is_int($item) || ((int)$item) > 0)
            $this->levelIdList->add($item);
        return $this;
    }

    /**
     * @param Media $medias
     * @return $this
     */
    public function setMedias(Media $medias)
    {
        $this->medias = $medias;
        return $this;
    }

    /**
     * @return Media
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * @param $prodId
     * @return $this
     */
    public function setProdId($prodId)
    {
        $this->prodId = $prodId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProdId()
    {
        return $this->prodId;
    }

    /**
     * @param ArrayCollection $productUdaLists
     * @return $this
     */
    public function setProductUdaLists(ArrayCollection $productUdaLists)
    {
        foreach($productUdaLists as $item)
        {
            if($item instanceof ProductUdas){
                $this->addProductUda($item);
            }
        }
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getProductUdaLists()
    {
        return $this->productUdaLists;
    }

    /**
     * @param $item
     * @return $this
     */
    public function addProductUda(ProductUdas $item)
    {
        $this->productUdaLists->add($item);
        return $this;
    }

    /**
     * @param $salePrice
     * @return $this
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = (double)$salePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @param $sellingTitle
     * @return $this
     */
    public function setSellingTitle($sellingTitle)
    {
        $this->sellingTitle = $sellingTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellingTitle()
    {
        return $this->sellingTitle;
    }

    /**
     * @param $skuId
     * @return $this
     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param $variantName
     * @return $this
     */
    public function setVariantName($variantName)
    {
        $this->variantName = $variantName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariantName()
    {
        return $this->variantName;
    }

}