<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 12/09/13
 */
# Product.php

namespace LuzPropria\Extra\Api\Product;


use LuzPropria\Extra\Api\Orders\Traits\OrderStatusTrait;
use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Recupera uma lista de Produtos.
 * A lista de Produtos pode ter seu retorno paginado, é possível selecionar os campos do response
 * e filtrar os resultados (ver Pesquisas e Filtros nas Considerações de Design).
 *
 * Class Product
 * @package LuzPropria\Extra\Api\Product
 */
class Products implements Method {

    /**
     *  Implementado
     *  _offset
     *  _limit
     */
    use OrderStatusTrait;

    /**
     * Texto livre para busca de produtos.
     *
     * @var string
     */
    private $searchText;

    /**
     * ID da categoria utilizada para realizar busca de produtos
     *
     * @var int
     */
    private $idCategory;


    /**
     * Neste serviço um dos dois parâmetros (searchText ou idCategory) precisa, obrigatoriamente, ser informado.
     *
     * bucar em string searchText ou int idCategory
     *
     * @param $search
     */
    public function search($search)
    {
        if(is_int($search) || ((int)$search) > 0)
            $this->idCategory = (int)$search;
        else
            $this->searchText = (string)$search;
    }

    /**
     * Verifica se pesquisa é valida
     *
     * @return bool
     */
    public function isSearchValid()
    {
        return $this->idCategory > 0 OR strlen($this->searchText) > 0;
    }

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /products
    }
}