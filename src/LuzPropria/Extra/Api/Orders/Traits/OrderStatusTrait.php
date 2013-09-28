<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 27/09/13
 */
# OrderStatusTrait.php


namespace LuzPropria\Extra\Api\Orders\Traits;


trait OrderStatusTrait {

    /**
     * Parâmetro utilizado para limitar a quantidade de registros trazidos por página.
     *
     * @var int
     */
    private $_offset;

    /**
     * Parâmetro utilizado para limitar a quantidade de registros trazidos pela operação.
     *
     * @var int
     */
    private $_limit;

    /**
     * @param $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->_limit = (int)$limit;
        return $this;
    }

    /**
     * Parâmetro utilizado para limitar a quantidade de registros trazidos pela operação.
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->_limit === 0 || is_null($this->_limit) ? 50 : $this->_limit;
    }

    /**
     * @param $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->_offset = (int)$offset;
        return $this;
    }

    /**
     * Parâmetro utilizado para limitar a quantidade de registros trazidos por página.
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->_offset === 0 || is_null($this->_offset) ? 0 : $this->_offset;
    }

} 