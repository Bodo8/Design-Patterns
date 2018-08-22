<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 15.08.2018
 * Time: 08:25
 */

namespace AppBundle\DesignPatterns\Composite;


class Army extends Unit
{
    private $units = [];

    public function addUnit(Unit $unit)
    {
        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $findId = array_search($unit, $this->units, true);
        if (is_int($findId)) {
            array_splice($this->units, $findId, 1, []);
        }
    }

    public function bombardStrength(): int
    {
        $strength = 0;
        foreach ($this->units as $unit) {
            $strength += $unit->bombardStrength();
        }
        return $strength;
    }


    public function getUnits(): array
    {
        return $this->units;
    }


}