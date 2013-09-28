<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 10:31
 */
# Category.php


namespace LuzPropria\Extra\Api\Categorie\Response;


use LuzPropria\Extra\Utils\ArrayCollection;

class Category {

    /**
     * Id da categoria
     *
     * @var int
     */
    private $levelId;

    /**
     * Nome da categoria. Ex.: Televisores
     *
     * @var string
     */
    private $levelName;

    /**
     * Categoria pai (id do marketplace)
     *
     * @var int
     */
    private $levelFatherId;

    /**
     * Lista de entidades uda
     *
     * @var ArrayCollection
     */
    private $udaList;

    function __construct()
    {
        $this->udaList = new ArrayCollection();
    }

    /**
     * @param $levelFatherId
     * @return $this
     */
    public function setLevelFatherId($levelFatherId)
    {
        $this->levelFatherId = (int)$levelFatherId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevelFatherId()
    {
        return $this->levelFatherId;
    }

    /**
     * @param $levelId
     * @return $this
     */
    public function setLevelId($levelId)
    {
        $this->levelId = (int)$levelId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevelId()
    {
        return $this->levelId;
    }

    /**
     * @param $levelName
     * @return $this
     */
    public function setLevelName($levelName)
    {
        $this->levelName = $levelName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLevelName()
    {
        return $this->levelName;
    }

    /**
     * @param ArrayCollection $udaList
     * @return $this
     */
    public function setUdaList(ArrayCollection $udaList)
    {
        foreach($udaList as $yuda) {
            if($yuda instanceof CategorYuda) {
                $this->addUda($yuda);
            }
        }
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getUdaList()
    {
        return $this->udaList;
    }

    public function addUda(CategorYuda $yuda)
    {
        $this->udaList->add($yuda);
    }
} 