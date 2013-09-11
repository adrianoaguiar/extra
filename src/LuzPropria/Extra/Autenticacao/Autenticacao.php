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
     * @var mixed
     * @access private
     */
    private $sandbox;

    /**
     * Iniciar autenticação
     *
     * @param bool $sandbox
     * @inheritdoc sandbox (false = produção,true = desenvolvimento)
     */
    public function __construct($sandbox = false)
    {
        $this->sandbox  =   $sandbox;
    }
    /**
     * @param mixed $app_token
     */
    public function setAppToken($app_token)
    {
        $this->app_token = $app_token;
    }

    /**
     * @return mixed
     */
    public function getAppToken()
    {
        return $this->app_token;
    }

    /**
     * @param mixed $auth_token
     */
    public function setAuthToken($auth_token)
    {
        $this->auth_token = $auth_token;
    }

    /**
     * @return mixed
     */
    public function getAuthToken()
    {
        return $this->auth_token;
    }

    /**
     * @param mixed $sandbox
     */
    public function setSandbox($sandbox)
    {
        $this->sandbox = $sandbox;
    }

    /**
     * @return mixed
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }


}
