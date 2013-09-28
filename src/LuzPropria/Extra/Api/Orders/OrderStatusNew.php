<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# OrderStatusNew.php


namespace LuzPropria\Extra\Api\Orders;
use LuzPropria\Extra\Api\Orders\Traits\OrderStatusTrait;
use LuzPropria\Extra\Utils\Interfaces\Method;

/**
 * Recupera uma lista de pedidos com status Novo que estão relacionados com o token do lojista informado.
 * Este estado representa os pedidos fechados que ainda não foram aprovados, ou seja,
 * pedidos que ainda não devem ser entregues, pois estão aguardado o pagamento.
 *
 * Alguns campos não serão enviados, para evitar a entrega antes da confirmação do pagamento.
 *
 * Class OrderStatusNew
 * @package LuzPropria\Extra\Api\Orders
 */
class OrderStatusNew implements Method {

    use OrderStatusTrait;

    /**
     * Definir o metodo de envio 'GET'|'POST'|'PUT'
     *
     * @return string
     */
    public function method()
    {
        return 'GET'; // /orders/status/new/
    }
}