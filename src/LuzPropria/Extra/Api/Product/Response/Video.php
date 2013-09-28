<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 12/09/13
 */
# Video.php


namespace LuzPropria\Extra\Api\Product\Response;

/**
 * Class Video
 * @package LuzPropria\Extra\Api\Product\Response
 *
 * videoName (Nome do vídeo, optional): string,
 * videoUrl (string, optional): URL do vídeo,
 * videoTp (string, optional): Origem do vídeo. Ex.: youtube
 *
 */
class Video {

    /**
     * Nome do vídeo
     *
     * @var string
     */
    private $videoName;

    /**
     * URL do vídeo
     *
     * @var string
     */
    private $videoUrl;

    /**
     * Origem do vídeo. Ex.: youtube
     *
     * @var string
     */
    private $videoTp;


    /**
     * @param $videoName
     * @return $this
     */
    public function setVideoName($videoName)
    {
        $this->videoName = $videoName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoName()
    {
        return $this->videoName;
    }

    /**
     * @param $videoTp
     * @return $this
     */
    public function setVideoTp($videoTp)
    {
        $this->videoTp = $videoTp;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoTp()
    {
        return $this->videoTp;
    }

    /**
     * @param $videoUrl
     * @return $this
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }


}