<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 12.08.2018
 * Time: 06:27
 */

namespace AppBundle\DesignPatterns\Prototype;


class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    public function __construct(Sea $sea, Forest $forest, Plains $plains)
    {
        $this->sea = $sea;
        $this->forest = $forest;
        $this->plains = $plains;
    }

    public function getSea(): Sea
    {
        return $this->sea;
    }


    public function getForest(): Forest
    {
        return $this->forest;
    }


    public function getPlains(): Plains
    {
        return $this->plains;
    }

}