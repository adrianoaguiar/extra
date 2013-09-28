<?php
/* 
 *  Project: www.extra.dev
 *  (c) Rogério Adriano da Silva <rogerioadris.silva@gmail.com>
 *  Create: 12/09/13
 */
# Media.php


namespace LuzPropria\Extra\Api\Product\Response;
use LuzPropria\Extra\Utils\ArrayCollection;

/**
 * Class Media
 * @package LuzPropria\Extra\Api\Product\Response
 *
 * images (Array[image], optional): Lista de entidades image,
 * videos (Array[video], optional): Lista de entidades video
 */
class Media {

    /**
     * Lista de entidades image
     *
     * @var ArrayCollection
     */
    private $images;

    /**
     * Lista de entidades video
     *
     * @var ArrayCollection
     */
    private $videos;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->videos = new ArrayCollection();
    }
    /**
     * @param ArrayCollection $images
     * @return $this
     */
    public function setImages(ArrayCollection $images)
    {
        foreach($images as $image) {
            if($image instanceof Image) {
                $this->addImage($image);
            }
        }
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    public function addImage(Image $image)
    {
        $this->images->add($image);
    }

    /**
     * @param ArrayCollection $videos
     * @return $this
     */
    public function setVideos(ArrayCollection $videos)
    {
        foreach($videos as $video) {
            if($video instanceof Video) {
                $this->addVideo($video);
            }
        }
        return $this;
    }

    /**
     * @return \LuzPropria\Extra\Utils\ArrayCollection
     */
    public function getVideos()
    {
        return $this->videos;
    }

    public function addVideo(Video $vide)
    {
        $this->videos->add($vide);
    }

}