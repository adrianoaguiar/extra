<?php
/*
 * Project:
 * (c) Rogério Adriano da silva <rogerioadris.silva@gmail.com>
 * Criado em: Qui 05/Set/2013 hs 16:46
 * Descrição:
 */

namespace LuzPropria\Extra\Enviar;

use LuzPropria\Extra\Autenticacao\Autenticacao;
use LuzPropria\Extra\Enviar\Exception\ExceptionAutenticacao;

class Extra {

    /**
     * Ambiente de Desenvolvimento "Sandbox"
     *
     */
    const ambiente_sandbox   =   'http://sandbox.extra.com.br/api/v1';

    /**
     * Ambiente de Produção
     *
     */
    const ambiente_producao  =   'http://sandbox.extra.com.br/api/v1';

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
        $this->autenticacao =   $autenticacao;
    }

    /**
     * Opções padroes
     *
     * @return array
     * @throws Exception\ExceptionAutenticacao
     */
    public function defaultOptions()
    {
        if($this->autenticacao instanceof Autenticacao){
            return array(
                'request.options'=> array(
                    'headers' => array(
                        'nova-auth-token'=> $this->autenticacao->getAuthToken(),
                        'nova-app-token'=>  $this->autenticacao->getAppToken()
                    )
                )
            );
        }
        else
            throw new ExceptionAutenticacao('Autenticação não informada', 501);
    }

    /**
     * @param \LuzPropria\Extra\Autenticacao\Autenticacao $autenticacao
     */
    public function setAutenticacao($autenticacao)
    {
        $this->autenticacao = $autenticacao;
    }

    /**
     * @return \LuzPropria\Extra\Autenticacao\Autenticacao
     */
    public function getAutenticacao()
    {
        return $this->autenticacao;
    }

    /**
     *
     */
    public function send()
    {

    }


}
