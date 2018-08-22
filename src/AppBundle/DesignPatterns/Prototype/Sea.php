<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 12.08.2018
 * Time: 06:22
 */

namespace AppBundle\DesignPatterns\Prototype;


class Sea
{
    private $navigability;

    public function __construct(int $navigability)
    {
        $this->navigability = $navigability;
    }

    /**
     * @return int
     */
    public function getNavigability(): int
    {
        return $this->navigability;
    }

    /**
     * @param int $navigability
     */
    public function setNavigability(int $navigability): void
    {
        $this->navigability = $navigability;
    }

    public function __toString()
    {
        return (string)'Navigability ' . $this->getNavigability();
    }


}