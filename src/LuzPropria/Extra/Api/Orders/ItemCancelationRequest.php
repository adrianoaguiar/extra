<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 11:35
 */
# itemCancelationRequest.php

namespace LuzPropria\Extra\Api\Orders;


use LuzPropria\Extra\Utils\ArrayCollection;
use LuzPropria\Extra\Utils\Interfaces\itemCancelationRequestInterface;

class ItemCancelationRequest implements itemCancelationRequestInterface {

    /**
     * @var array
     */
    private $orderItemIdList;

    /**
     * @var string
     */
    private $reason;

    public function __construct()
    {
        $this->orderItemIdList = new ArrayCollection();
    }

    /**
     * @param ArrayCollection $orderItemIdList
     * @return mixed
     */
    public function setOrderItemIdList(ArrayCollection $orderItemIdList)
    {
        $this->orderItemIdList = $orderItemIdList;
    }

    /**
     * @return array
     */
    public function getOrderItemIdList()
    {
        return $this->orderItemIdList;
    }

    public function addOrderItemId($item)
    {
        $this->orderItemIdList->add($item);
    }

    /**
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason   =   $reason;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
}