<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 12.08.2018
 * Time: 06:24
 */

namespace AppBundle\DesignPatterns\Prototype;


class Plains
{
    private $oilResource;

    public function __construct(int $numberOilResource)
    {
        $this->oilResource = new OilResource($numberOilResource);
    }

    public function __clone()
    {
        $this->oilResource = clone $this->oilResource;
    }


}