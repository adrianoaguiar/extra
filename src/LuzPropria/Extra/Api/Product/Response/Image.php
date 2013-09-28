<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 12/09/13
 */
# Image.php


namespace LuzPropria\Extra\Api\Product\Response;


/**
 * Class Image
 * @package LuzPropria\Extra\Api\Product\Response
 *
 * name (Nome da imagem, optional): string,
 * url (string, optional): URL da imagem,
 * main (boolean, optional): Informa se é a imagem principal do produto
 *
 */
class Image {

    /**
     * Nome da imagem
     *
     * @var string
     */
    private $name;

    /**
     * URL da imagem
     *
     * @var string
     */
    private $url;

    /**
     * Informa se é a imagem principal do produto
     *
     * @var bool
     */
    private $main;

    /**
     * @param $main
     * @return $this
     */
    public function setMain($main)
    {
        $this->main = is_bool($main) ? $main : false;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMain()
    {
        return is_bool($this->main) ? $this->main : false;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }


}