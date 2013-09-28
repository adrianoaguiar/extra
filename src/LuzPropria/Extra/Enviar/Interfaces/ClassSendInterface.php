<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 28/09/13 14:21
 */
# ClassSendInterface.php


namespace LuzPropria\Extra\Enviar\Interfaces;

use LuzPropria\Extra\Autenticacao\Autenticacao;
use LuzPropria\Extra\Utils\Interfaces\Method;

interface ClassSendInterface {

    /**
     * Classe inicial
     *
     * @param Method $class
     */
    public function __construct(Method $class);

    /**
     * @param Autenticacao $auth
     * @return mixed
     */
    public function setAutentication(Autenticacao $auth);

    /**
     * @return Autenticacao
     */
    public function getAutentication();


    /**
     * Verificar os campos obrigatorios
     *
     * @return mixed
     */
    public function isValid();


    /**
     * @return mixed
     */
    public function send();

    /**
     * Retornar resultado
     *
     * @return mixed
     */
    public function result();
}