<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 03:30
 */
# LoadsProducts.php


namespace LuzPropria\Extra\Api\Load;
use LuzPropria\Extra\Utils\ArrayCollection;
use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Operação utilizada para enviar uma nova carga de produtos.
 * Através desta é possível passar, de forma não obrigatória, informações dos produtos, categorias e
 * informações de venda do vendedor como valor, quantidade, etc.
 *
 * -----
 *
 * Observação: Esta é uma operação assíncrona e, por isso, é preciso aguardar o período de 01 hora para
 * consultar os produtos. Isso é necessário para ambos ambientes: Produção e Sandbox.
 *
 * -----
 *
 * O conteúdo JSON ou XML deste POST, que contém a lista de objetos product (JSON) ou produto (XML),
 * deve ser compactado em formato GZip e enviado no corpo da requisição. Devido ao formato GZip, é
 * necessário alterar o HTTP Header: content-type para application/gzip para o correto funcionamento.
 * Esta é a única API que não recebe JSON puro no conteúdo do body.
 *
 * Para os testes em SANDBOX é obrigatório passar uma categoria fixa chamada 'Teste>API'.
 * Caso seja enviada qualquer outra categoria, o produto ficará no status Pendente de Categorização ou de
 * duplicação e, em Sandbox, não há tratamento para esse tipo de status.
 * Em produção, envie a categoria real do seu produto seguindo a seguinte regra:
 * 'Informática>Notebook', onde Informática é a categoria pai e Notebook é a subcategoria
 * e elas devem ser separadas pelo sinal de maior '>'.
 * -----
 * Retorno do Serviço
 * O retorno deste serviço é baseado no padrão definido para métodos POST segundo o Status
 * HTTP 201 - Created. O ID da carga é retornado no header location,
 * conforme exemplo: /loads/products/123456
 *
 * Class LoadsProducts
 * @package LuzPropria\Extra\Api\Load
 */
class LoadsProducts implements Method {

    /**
     * Arquivo em formato GZip cujo conteúdo é um arquivo JSON que
     * contêm uma lista de objetos product.
     *
     * @var ArrayCollection
     */
    private $Gzip;

    
    /**
     * @param ArrayCollection $products
     * @return $this
     */
    public function setProducts(ArrayCollection $products)
    {
        foreach($products as $product) {
            if($product instanceof Product) {
                $this->addProduct($product);
            }
        }
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getProducts()
    {
        return $this->Gzip;
    }

    /**
     * @return string
     */
    public function getProductsEncode()
    {
        return gzencode(json_encode($this->Gzip->toArray()), 9);
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function addProduct(Product $product)
    {
        $this->Gzip->add($product);
        return $this;
    }


    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'POST'; // /loads/products
    }
}