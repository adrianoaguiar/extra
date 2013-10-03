<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 02/10/13 19:25
 */
# SellerItem.php


namespace LuzPropria\Extra\Enviar\Seller;


use LuzPropria\Extra\Autenticacao\Autenticacao;
use LuzPropria\Extra\Enviar\Exception\ExceptionAutenticacao;
use LuzPropria\Extra\Enviar\Interfaces\ClassSendInterface;
use LuzPropria\Extra\Utils\Interfaces\Method;

class SellerItem implements ClassSendInterface {

    /**
     * @var \LuzPropria\Extra\Api\Seller\SellerItems
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
        return strlen($this->_class->getSkuId()) > 0
            && is_double($this->_class->getDefaultPrice())
            && is_double($this->_class->getSalePrice())
            && is_int($this->_class->getAvailableQuantity())
            && is_int($this->_class->getTotalQuantity())
        ;
    }

    /**
     * @return mixed
     */
    public function send()
    {
        if($this->_class->method() === 'GET') {

        }
    }

    /**
     * Retornar resultado
     *
     * @return mixed
     */
    public function result()
    {
        // TODO: Implement result() method.
    }
}