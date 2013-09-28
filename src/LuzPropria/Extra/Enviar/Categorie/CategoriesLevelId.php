<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 17:43
 */
# CategoriesLevelId.php


namespace LuzPropria\Extra\Enviar\Categorie;


use Guzzle\Http\Client;
use LuzPropria\Extra\Api\Categorie\Response\Category;
use LuzPropria\Extra\Api\Categorie\Response\CategorYuda;
use LuzPropria\Extra\Autenticacao\Autenticacao;
use LuzPropria\Extra\Enviar\Exception\ExceptionAutenticacao;
use LuzPropria\Extra\Enviar\Exception\ResultInvalidException;
use LuzPropria\Extra\Enviar\Interfaces\ClassSendInterface;
use LuzPropria\Extra\Utils\ArrayCollection;
use LuzPropria\Extra\Utils\Interfaces\Method;

class CategoriesLevelId implements ClassSendInterface {

    /**
     * @var \LuzPropria\Extra\Api\Categorie\CategoriesLevelId
     */
    private $_class;

    /**
     * @var Response
     */
    private $_response;

    /**
     * @var Autenticacao
     */
    private $_auth;

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
     * @throws ExceptionAutenticacao
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
        return true;
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

                    ),
                )
            ));

            /** @var \Guzzle\Http\Message\Request $request */
            $request = $client->get(sprintf('categories/%s',$this->_class->getLevelId()));
            $this->_response = $request->send();
        }
    }

    /**
     * @return mixed|void
     * @throws \LuzPropria\Extra\Enviar\Exception\ResultInvalidException
     */
    public function result()
    {
        $array_collection = json_decode($this->_response->getBody(), true);
        if(!is_array($array_collection)) {
            throw new ResultInvalidException('invalid return');
        }
        $category = new Category();
        $category->setLevelId($array_collection['levelId']);
        $category->setLevelName($array_collection['levelName']);
        $category->setLevelFatherId($array_collection['levelFatherId']);           
        $category->setUdaList(new ArrayCollection(array_map(function($v){

        }, $array_collection['udaList'])));
        return $category;
    }
}