<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 15.08.2018
 * Time: 10:04
 */

namespace AppBundle\DesignPatterns\Composite;


class LaserCannon extends Unit
{

    public function addUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " it is leaf");
    }

    public function removeUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " it is leaf");
    }

    public function bombardStrength(): int
    {
        return 44;
    }
}