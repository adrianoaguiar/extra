<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 03:39
 */
# Product.php


namespace LuzPropria\Extra\Api\Load;
use LuzPropria\Extra\Utils\ArrayCollection;


/**
 * Class Product
 * @package LuzPropria\Extra\Api\Load
 */
class Product {

    /**
     * SKU ID do produto no Marketplace,
     *
     * @var string
     */
    private $skuIdOrigin;

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
     * Marca. Ex Sony
     *
     * @var string
     */
    private $brand;

    /**
     *  EAN do produto
     *
     * @var string
     */
    private $EAN;

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
     *  Lista de categorias,
     *
     * @var ArrayCollection
     */
    private $categoryList;

    /**
     * Lista de atributos do Produto
     *
     * @var ArrayCollection
     */
    private $productUdaLists;

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
     * Quantidade disponível
     *
     * @var int
     */
    private $availableQuantity;

    /**
     * Tempo de fabricação em dias (padrão é 0)
     *
     * @var int
     */
    private $handlingTime;

    /**
     * Nome da variante do produto
     *
     * @var string
     */
    private $variantName;

    /**
     * ID do parcelamento
     *
     * @var int
     */
    private $installmentId;

    /**
     * Lista de URLs de vídeos,
     *
     * @var ArrayCollection
     */
    private $videos;

    /**
     * Lista de URLs de imagens. Pelo menos uma imagem precisa ser informada.
     *
     * @var ArrayCollection
     */
    private $images;

    function __construct()
    {
        $this->images = new ArrayCollection();
        $this->videos = new ArrayCollection();
        $this->productUdaLists = new ArrayCollection();
        $this->categoryList = new ArrayCollection();
    }


    /**
     * @param $EAN
     * @return $this
     */
    public function setEAN($EAN)
    {
        $this->EAN = $EAN;
        return $this;
    }

    /**
     * @return string
     */
    public function getEAN()
    {
        return $this->EAN;
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
     * @param $availableQuantity
     * @return $this
     */
    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = (int)$availableQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * @param $brand
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param ArrayCollection $categoryList
     * @return $this
     */
    public function setCategoryList(ArrayCollection $categoryList)
    {
        $this->categoryList = $categoryList;
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getCategoryList()
    {
        return $this->categoryList;
    }

    /**
     * @param $category
     * @return $this
     */
    public function addCategoryList($category)
    {
        $this->categoryList->add($category);
        return $this;
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
     * @param ArrayCollection $images
     * @return $this
     */
    public function setImages(ArrayCollection $images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param $image
     * @return $this
     */
    public function addImage($image)
    {
        $this->images->add($image);
        return $this;
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
     * @param ArrayCollection $productUdaLists
     * @return $this
     */
    public function setProductUdaLists(ArrayCollection $productUdaLists)
    {
        foreach($productUdaLists as $productUda) {
            if($productUda instanceof ProductUdas) {
                $this->addProductUda($productUda);
            }
        }
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getProductUdaLists()
    {
        return $this->productUdaLists;
    }

    /**
     * @param $productUda
     * @return $this
     */
    public function addProductUda(ProductUdas $productUda)
    {
        $this->productUdaLists->add($productUda);
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
     * @param $skuIdOrigin
     * @return $this
     */
    public function setSkuIdOrigin($skuIdOrigin)
    {
        $this->skuIdOrigin = $skuIdOrigin;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkuIdOrigin()
    {
        return $this->skuIdOrigin;
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

    /**
     * @param ArrayCollection $videos
     * @return $this
     */
    public function setVideos(ArrayCollection $videos)
    {
        $this->videos = $videos;
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getVideos()
    {
        return $this->videos;
    }

    public function addVideo($video)
    {
        $this->videos->add($video);
    }
}