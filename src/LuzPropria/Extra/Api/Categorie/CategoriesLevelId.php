<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 10:39
 */
# CategoriesLevelId.php


namespace LuzPropria\Extra\Api\Categorie;


use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Recupera detalhes de uma categoria informada.
 *
 * Class CategoriesLevelId
 * @package LuzPropria\Extra\Api\Categorie
 */
class CategoriesLevelId implements Method {

    /**
     * Id da categoria
     *
     * @var string
     */
    private $levelId;

    /**
     * @param $levelId
     * @return $this
     */
    public function setLevelId($levelId)
    {
        $this->levelId = $levelId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLevelId()
    {
        return $this->levelId;
    }

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /categories/{levelId}
    }
}