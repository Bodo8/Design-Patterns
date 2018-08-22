<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 12.08.2018
 * Time: 06:38
 */

namespace AppBundle\DesignPatterns\Prototype;


class OilResource
{
    private $numberOilResource;

    public function __construct(int $numberOilResource)
    {
        $this->numberOilResource = $numberOilResource;
    }

    /**
     * @return int
     */
    public function getNumberOilResource(): int
    {
        return $this->numberOilResource;
    }

    /**
     * @param int $numberOilResource
     */
    public function setNumberOilResource(int $numberOilResource): void
    {
        $this->numberOilResource = $numberOilResource;
    }


}