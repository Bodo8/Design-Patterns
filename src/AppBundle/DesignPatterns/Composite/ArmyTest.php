<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 15.08.2018
 * Time: 10:21
 */

namespace AppBundle\DesignPatterns\Composite;

use PHPUnit\Framework\TestCase;

class ArmyTest extends TestCase
{

    private $mainArmy;

    public function setUp()
    {
        $this->mainArmy = new Army();
    }

    public function testAddUnit()
    {
        $expectStrength = 54;
        $this->mainArmy->addUnit(new Archer());
        $this->mainArmy->addUnit(new LaserCannon());
        $this->mainArmy->addUnit(new Archer());
        $unitsForTest = $this->mainArmy->getUnits();
        echo print_r($unitsForTest, true);

        $actualStrength = $this->mainArmy->bombardStrength();
        self::assertEquals($expectStrength, $actualStrength);
    }
}
