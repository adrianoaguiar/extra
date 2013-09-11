<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 11/09/13 11:35
 */
# itemCancelationRequest.php

namespace LuzPropria\Extra\Api\Orders;


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


    /**
     * @param array $orderItemIdList
     */
    public function setOrderItemIdList($orderItemIdList)
    {
        if(is_array($orderItemIdList) && is_array($this->orderItemIdList)){
            $this->orderItemIdList  =   array_merge($this->orderItemIdList, $orderItemIdList);
        }
        else if (is_array($orderItemIdList)) {
            $this->orderItemIdList  =   $orderItemIdList;
        }
        else {
            $this->orderItemIdList[]=   $orderItemIdList;
        }
    }

    /**
     * @return array
     */
    public function getOrderItemIdList()
    {
        return $this->orderItemIdList;
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