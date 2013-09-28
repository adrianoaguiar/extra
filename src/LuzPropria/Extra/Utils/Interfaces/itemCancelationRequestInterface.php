<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 11:33
 */
# itemCancelationRequestInterface.php

namespace LuzPropria\Extra\Utils\Interfaces;
use LuzPropria\Extra\Utils\ArrayCollection;

/**
 * interface itemCancelationRequestInterface
 * @package LuzPropria\Extra\Utils\Interfaces
 *
 * orderItemIdList: Array[string] {Lista de Itens do pedido},
 * reason: string {Texto com o motivo do cancelamento}
 */
interface itemCancelationRequestInterface {

    /**
     * @param ArrayCollection $orderItemIdList
     * @return mixed
     */
    public function setOrderItemIdList(ArrayCollection $orderItemIdList);

    /**
     * @return array
     */
    public function getOrderItemIdList();

    /**
     * @param string $reason
     */
    public function setReason($reason);

    /**
     * @return string
     */
    public function getReason();


}