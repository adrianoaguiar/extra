<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 02/10/13 21:08
 */
# SellerItemsStock.php


namespace LuzPropria\Extra\Enviar\Seller;


use Guzzle\Http\Client;
use Guzzle\Http\Exception\ClientErrorResponseException;
use LuzPropria\Extra\Autenticacao\Autenticacao;
use LuzPropria\Extra\Enviar\Exception\ExceptionAutenticacao;
use LuzPropria\Extra\Enviar\Exception\NotUpdateException;
use LuzPropria\Extra\Enviar\Interfaces\ClassSendInterface;
use LuzPropria\Extra\Utils\Interfaces\Method;


class SellerItemsStock implements ClassSendInterface {
    /**
     * @var \LuzPropria\Extra\Api\Seller\SellerItemsStock
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
        /** @var \LuzPropria\Extra\Api\Seller\StockUpdate $stock_update */
        $stock_update = $this->_class->getStockUpdate();
        return is_int($stock_update->getAvailableQuantity()) && is_int($stock_update->getTotalQuantity());
    }

    /**
     * @return mixed|void
     * @throws \LuzPropria\Extra\Enviar\Exception\NotUpdateException
     */
    public function send()
    {
        if($this->_class->method() === 'PUT') {
            $client = new Client($this->getAutentication()->getEnvironment(), array(
                'request.options' => array(
                    'headers' => array(
                        'nova-app-token' => $this->getAutentication()->getAppToken(),
                        'nova-auth-token' => $this->getAutentication()->getAuthToken(),
                    )
                )
            ));
            /** @var \Guzzle\Http\Message\EntityEnclosingRequest $request */
            $request = $client->put(sprintf('sellerItems/%s/stock', $this->_class->getSkuId()));
            $request->setBody(sprintf('%s', $this->_class->getStockUpdate()), 'application/json');
            /** @var \Guzzle\Http\Message\Response _response */
            try {
                $this->_response = $request->send();
            } catch(ClientErrorResponseException $e) {
                throw new NotUpdateException(json_decode($e->getResponse()->getBody())->errorDesc);
            }
        }
    }

    /**
     * @return bool|mixed
     * @throws \LuzPropria\Extra\Enviar\Exception\NotUpdateException
     */
    public function result()
    {
        if($this->_response->getStatusCode() !== 204) {
            throw new NotUpdateException($this->_response->getBody());
        }
        return true;
    }
} 