<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 10:29
 */
# Categories.php


namespace LuzPropria\Extra\Api\Categorie;


use LuzPropria\Extra\Api\Orders\Traits\OrderStatusTrait;
use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Recupera uma lista de categorias.
 * A lista de categorias pode ter seu retorno paginado, é possível selecionar os
 * campos do response e filtrar os resultados (ver documentação).
 *
 * Class Categories
 * @package LuzPropria\Extra\Api\Categorie
 */
class Categories implements Method {

    /**
     *
     * _offset
     * _limit
     */
    use OrderStatusTrait;

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /categories
    }
}