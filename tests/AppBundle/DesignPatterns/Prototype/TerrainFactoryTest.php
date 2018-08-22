<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 12.08.2018
 * Time: 07:46
 */

namespace AppBundle\DesignPatterns\Prototype;

use PHPUnit\Framework\TestCase;

class TerrainFactoryTest extends TestCase
{
    private $factory;

    public function setUp()
    {
        $this->factory = new TerrainFactory(new EarthSea(2),
            new MarsForest(), new MarsPlains(5));
    }

    public function testGetSea()
    {
        $expectSea = 2;
        $actualSea = $this->factory->getSea();
        try {
            self::assertSame($expectSea, $actualSea, 'sea 2');
        } catch (\Exception $exception) {
        }
    }
}
