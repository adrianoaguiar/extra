<?php
/*
 * Project:
 * (c) Rogério Adriano da silva <rogerioadris.silva@gmail.com>
 * Criado em: Qui 05/Set/2013 hs 16:11
 * Descrição: Autenticação
 */
namespace LuzPropria\Extra\Autenticacao;


/**
 * AUTENTICAÇÃO - VISÃO GERAL
 *
 * Tokens no cabeçalho (header) das requisições
 *
 */
class Autenticacao {


    /**
     * Ambiente de Desenvolvimento "Sandbox"
     *
     */
    const ambiente_sandbox   =   'http://sandbox.extra.com.br/api/v1';

    /**
     * Ambiente de Produção
     *
     */
    const ambiente_producao  =   'http://api.extra.com.br/api/v1';

    /**
     *  Application Token
     *
     *  Token que identifica a Aplicação que está efetuando a chamada aos recursos disponibilizados através da API.
     *
     * @var mixed
     * @access private
     */
    private $app_token;


    /**
     *  Authorization Token
     *
     *  Token que identifica o Lojista que está utilizando a Aplicação para efetuar chamadas aos recursos disponibilizados através da API.
     *
     * @var mixed
     * @access private
     */
    private $auth_token;


    /**
     *  A Sandbox é um ambiente feito para você executar seus testes antes de colocar sua Aplicação em Produção.
     *
     * @var bool
     * @access private
     */
    private $sandbox;

    /**
     * Iniciar autenticação
     *
     * @param null $auth
     * @param null $app
     * @param string $sandbox
     */
    public function __construct($auth = null, $app = null, $sandbox = 'producao')
    {
        if( !is_null($auth) ) {
            $this->setAuthToken($auth);
        }

        if( !is_null($app) ) {
            $this->setAppToken($app);
        }

        $this->setSandbox($sandbox);
    }

    /**
     * @param $app_token
     * @return $this
     */
    public function setAppToken($app_token)
    {
        $this->app_token = $app_token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAppToken()
    {
        return $this->app_token;
    }

    /**
     * @param $auth_token
     * @return $this
     */
    public function setAuthToken($auth_token)
    {
        $this->auth_token = $auth_token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthToken()
    {
        return $this->auth_token;
    }

    /**
     * @param $sandbox
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->sandbox = (is_bool($sandbox) && $sandbox === true) || $sandbox === 'sandbox' ? true : false;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * @return bool
     */
    public function isSandBox()
    {
        return $this->getSandbox();
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->isSandBox() === true ? self::ambiente_sandbox : self::ambiente_producao;
    }
}
