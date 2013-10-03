<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# Exception.php


namespace LuzPropria\Extra\Enviar\Exception;


class Exception extends \Exception {

    function __construct($message = "", $code = 0, Exception $previous = null)
    {
        // Correção acentuação retorno do erro.
        parent::__construct(utf8_decode($message), $code, $previous);
    }
} 