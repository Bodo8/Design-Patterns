<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 15.08.2018
 * Time: 08:25
 */

namespace AppBundle\DesignPatterns\Composite;


abstract class Unit
{
    abstract public function addUnit(Unit $unit);

    abstract public function removeUnit(Unit $unit);

    abstract public function bombardStrength(): int;

}