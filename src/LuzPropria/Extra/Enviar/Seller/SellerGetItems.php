<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 16:29
 */
# SellerGetItems.php


namespace LuzPropria\Extra\Enviar\Seller;


use Guzzle\Http\Client;
use LuzPropria\Extra\Autenticacao\Autenticacao;
use LuzPropria\Extra\Enviar\Exception\ExceptionAutenticacao;
use LuzPropria\Extra\Enviar\Exception\ResultInvalidException;
use LuzPropria\Extra\Enviar\Interfaces\ClassSendInterface;
use LuzPropria\Extra\Utils\Interfaces\Method;
use LuzPropria\Extra\Api\Seller\Response\SellerItem;
use LuzPropria\Extra\Utils\ArrayCollection;

class SellerGetItems implements ClassSendInterface {

    /**
     * @var \LuzPropria\Extra\Api\Seller\SellerGetItems
     */
    private $_class;

    /**
     * @var Autenticacao
     */
    private $_auth;

    /**
     * @var
     */
    private $_response;

    /**
     * Classe inicial
     *
     * @param Method $class
     */
    public function __construct(Method $class)
    {
        $this->_class = $class;
    }

    /**
     * @param Autenticacao $auth
     * @return mixed
     */
    public function setAutentication(Autenticacao $auth)
    {
        $this->_auth = $auth;
    }

    /**
     * @return Autenticacao
     * @throws \LuzPropria\Extra\Enviar\Exception\ExceptionAutenticacao
     */
    public function getAutentication()
    {
        if(!$this->_auth instanceof Autenticacao) {
            throw new ExceptionAutenticacao('Authentication is not defined');
        }
        return $this->_auth;
    }

    /**
     * Verificar os campos obrigatorios
     *
     * @return mixed
     */
    public function isValid()
    {
        return is_int($this->_class->getLimit()) && is_int($this->_class->getOffset());
    }

    /**
     * @return mixed
     */
    public function send()
    {
        if($this->_class->method() === 'GET') {

            $client = new Client($this->getAutentication()->getEnvironment(), array(
                'request.options' => array(
                    'headers' => array(
                        'nova-app-token' => $this->getAutentication()->getAppToken(),
                        'nova-auth-token' => $this->getAutentication()->getAuthToken(),
                    ),
                    'query'   => array(
                        '_offset' => $this->_class->getOffset(),
                        '_limit'  => $this->_class->getLimit(),
                    ),
                )
            ));

            /** @var \Guzzle\Http\Message\Request $request */
            $request = $client->get('sellerItems');
            $this->_response = $request->send();
        }
    }

    /**
     * @return ArrayCollection|mixed
     * @throws \LuzPropria\Extra\Enviar\Exception\ResultInvalidException
     */
    public function result()
    {
        $array_collection = json_decode($this->_response->getBody(), true);
        if(!is_array($array_collection)) {
            throw new ResultInvalidException('invalid return');
        }
        return new ArrayCollection(array_map(function($v){
            $obj = new SellerItem();
            $obj->setSkuOrigin($v['skuOrigin']);
            $obj->setSkuId($v['skuId']);
            $obj->setDefaultPrice($v['defaultPrice']);
            $obj->setSalePrice($v['salePrice']);
            $obj->setAvailableQuantity($v['availableQuantity']);
            $obj->setTotalQuantity($v['totalQuantity']);
            return $obj;
        }, $array_collection));
    }
}