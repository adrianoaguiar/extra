<?php
/*
 *  PhpStorm
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 02/10/13 20:10
 */
# SellerCreate.php


namespace LuzPropria\Extra\Api\Seller\Response;


class SellerCreate {

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $header_location;

    /**
     * @var string
     */
    private $trackingExceptions;

    /**
     * @var string
     */
    private $priceException;

    /**
     * @var string
     */
    private $categoryException;

    /**
     * @var string
     */
    private $message;

    /**
     * @param $categoryException
     * @return $this
     */
    public function setCategoryException($categoryException)
    {
        $this->categoryException = $categoryException;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryException()
    {
        return $this->categoryException;
    }

    /**
     * @param $header_location
     * @return $this
     */
    public function setHeaderLocation($header_location)
    {
        $this->header_location = $header_location;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeaderLocation()
    {
        return $this->header_location;
    }

    /**
     * @param $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param $priceException
     * @return $this
     */
    public function setPriceException($priceException)
    {
        $this->priceException = $priceException;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriceException()
    {
        return $this->priceException;
    }

    /**
     * @param $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = (int)$status;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $trackingExceptions
     * @return $this
     */
    public function setTrackingExceptions($trackingExceptions)
    {
        $this->trackingExceptions = $trackingExceptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingExceptions()
    {
        return $this->trackingExceptions;
    }

    /**
     * @param array $data
     */
    public function setArray(Array $data)
    {
        if(array_key_exists('status', $data))
            $this->setStatus($data['status']);
        if(array_key_exists('headerLocation', $data))
            $this->setHeaderLocation($data['headerLocation']);
        if(array_key_exists('trackingExceptions', $data))
            $this->setTrackingExceptions($data['trackingExceptions']);
        if(array_key_exists('priceException', $data))
            $this->setPriceException($data['priceException']);
        if(array_key_exists('categoryException', $data))
            $this->setCategoryException($data['categoryException']);
        if(array_key_exists('message', $data))
            $this->setMessage($data['message']);
    }

} 