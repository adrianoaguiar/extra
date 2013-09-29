<?php
/*
 * Project:
 * (c) Rogério Adriano da silva <rogerioadris.silva@gmail.com>
 * Criado em: Qui 05/Set/2013 hs 16:46
 * Descrição:
 */

namespace LuzPropria\Extra\Enviar;

use Guzzle\Service\Exception\ResponseClassException;
use LuzPropria\Extra\Autenticacao\Autenticacao;
use LuzPropria\Extra\Enviar\Exception\ExceptionAutenticacao;
use LuzPropria\Extra\Enviar\Exception\ParametersInvalidException;
use LuzPropria\Extra\Enviar\Interfaces\ClassSendInterface;
use LuzPropria\Extra\Utils\Interfaces\Method;
use Guzzle\Http\Client;

class Extra {

    /**
     * @var \LuzPropria\Extra\Autenticacao\Autenticacao
     */
    private $autenticacao;

    /**
     * Enviar dados
     *
     * @param Autenticacao $autenticacao
     */
    public function __construct(Autenticacao $autenticacao = null)
    {
        $this->setAutenticacao($autenticacao);
    }

    /**
     * @param \LuzPropria\Extra\Autenticacao\Autenticacao $autenticacao
     */
    public function setAutenticacao(Autenticacao $autenticacao)
    {
        $this->autenticacao = $autenticacao;
    }

    /**
     * @return Autenticacao
     * @throws Exception\ExceptionAutenticacao
     */
    public function getAutenticacao()
    {
        if(!$this->autenticacao instanceof Autenticacao) {
            throw new ExceptionAutenticacao('Authentication is not defined');
        }
        return $this->autenticacao;
    }

    private $class_reference = array(
        // Categorias
        'LuzPropria\Extra\Api\Categorie\Categories' => 'LuzPropria\Extra\Enviar\Categorie\Categories',
        'LuzPropria\Extra\Api\Categorie\CategoriesLevelId' => 'LuzPropria\Extra\Enviar\Categorie\CategoriesLevelId',

        // Seller
        'LuzPropria\Extra\Api\Seller\SellerGetItems'=> 'LuzPropria\Extra\Enviar\Seller\SellerGetItems',
        'LuzPropria\Extra\Api\Seller\SellerGetItem'=> 'LuzPropria\Extra\Enviar\Seller\SellerGetItem',
        'LuzPropria\Extra\Api\Seller\SellerItemsSkuOrigin'=> 'LuzPropria\Extra\Enviar\Seller\SellerItemsSkuOrigin',
    );

    /**
     * Classe envio
     *
     * @param Method $send
     * @return mixed
     * @throws \Guzzle\Service\Exception\ResponseClassException
     */
    private function getClassSend(Method $send)
    {
        $class_string = get_class($send);
        if(array_key_exists($class_string, $this->class_reference)) {
            $class = new $this->class_reference[$class_string]($send);
            if($class instanceof ClassSendInterface)
                return $class;
        }
        throw new ResponseClassException('class does not exist');
    }

    /**
     *
     */
    public function send(Method $send)
    {
        /** @var ClassSendInterface $class */
        $class = $this->getClassSend($send);

        // Validar parametros padrão
        if($class->isValid() === false) {
            throw new ParametersInvalidException('Default parameters not set');
        }

        // Setar autenticacao
        $class->setAutentication($this->getAutenticacao());

        // Fazer requisição
        $class->send();

        // Retorna resultado
        return $class->result();
    }


}
