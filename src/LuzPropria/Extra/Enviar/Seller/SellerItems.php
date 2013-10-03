<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 02/10/13 19:25
 */
# SellerItem.php


namespace LuzPropria\Extra\Enviar\Seller;


use Guzzle\Http\Client;
use Guzzle\Http\Exception\ClientErrorResponseException;
use LuzPropria\Extra\Api\Seller\Response\SellerCreate;
use LuzPropria\Extra\Autenticacao\Autenticacao;
use LuzPropria\Extra\Enviar\Exception\ExceptionAutenticacao;
use LuzPropria\Extra\Enviar\Exception\NotCreateException;
use LuzPropria\Extra\Enviar\Exception\ResultInvalidException;
use LuzPropria\Extra\Enviar\Interfaces\ClassSendInterface;
use LuzPropria\Extra\Utils\Interfaces\Method;

class SellerItems implements ClassSendInterface {

    /**
     * @var \LuzPropria\Extra\Api\Seller\SellerItems
     */
    private $_class;

    /**
     * @var Autenticacao
     */
    private $_auth;

    /**
     * @var \Guzzle\Http\Message\Response
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
        /** @var \LuzPropria\Extra\Api\Seller\SellerItem $selleritem */
        $selleritem = $this->_class->getSellerItem();
        return strlen($selleritem->getSkuOrigin()) > 0
            && is_double($selleritem->getDefaultPrice())
            && is_double($selleritem->getSalePrice())
            && is_int($selleritem->getAvailableQuantity())
            && is_int($selleritem->getTotalQuantity())
        ;
    }

    /**
     * @return mixed|void
     * @throws \LuzPropria\Extra\Enviar\Exception\NotCreateException
     */
    public function send()
    {
        if($this->_class->method() === 'POST') {
            $client = new Client($this->getAutentication()->getEnvironment(), array(
                'request.options' => array(
                    'headers' => array(
                        'nova-app-token' => $this->getAutentication()->getAppToken(),
                        'nova-auth-token' => $this->getAutentication()->getAuthToken(),
                    )
                )
            ));
            /** @var \Guzzle\Http\Message\EntityEnclosingRequest $request */
            $request = $client->post(sprintf('sellerItems'));
            $request->setBody(sprintf('%s', $this->_class->getSellerItem()), 'application/json');
            /** @var \Guzzle\Http\Message\Response _response */
            try {
                $this->_response = $request->send();
            } catch(ClientErrorResponseException $e) {
                throw new NotCreateException(json_decode($e->getResponse()->getBody())->errorDesc);
            }

        }
    }

    /**
     * @return SellerCreate|mixed
     * @throws \LuzPropria\Extra\Enviar\Exception\NotCreateException
     * @throws \LuzPropria\Extra\Enviar\Exception\ResultInvalidException
     */
    public function result()
    {
        if($this->_response->getStatusCode() !== 201) {
            throw new NotCreateException($this->_response->getBody());
        }
        $array_collection = json_decode($this->_response->getBody(), true);
        if(!is_array($array_collection)) {
            throw new ResultInvalidException('invalid return');
        }
        $seller_create = new SellerCreate();
        $seller_create->setArray($array_collection);
        return $seller_create;
    }
}