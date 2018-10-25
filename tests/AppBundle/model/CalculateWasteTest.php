<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 24.10.2018
 * Time: 16:59
 */

namespace AppBundle\model;

use PHPUnit\Framework\TestCase;

class CalculateWasteTest extends TestCase
{
    private $calculateWaste;

    public function setUp()
    {
        $this->calculateWaste = new CalculateWaste();
    }

    public function testAddBox()
    {
        $this->calculateWaste->addBox(5, 40,
            20, 10, 7,
            30, 20);
        $this->calculateWaste->addBox(3, 50,
            20, 10, 7,
            30, 20);
        $tabAllBoxes = $this->calculateWaste->getTabWithBoxes();


    }
}
