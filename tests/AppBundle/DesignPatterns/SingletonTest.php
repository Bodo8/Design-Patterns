<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 05.08.2018
 * Time: 12:05
 */

namespace AppBundle\DesignPatterns;

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    private $singleton;
    private $expectedName = "Matt";

    public function setUp()
    {
        $this->singleton = Singleton::getInstance();
        $this->singleton->setProperty("firstName", $this->expectedName);
    }

    public function tearDown()
    {
    }

    public function testGetProperty()
    {
        $this->singleton->setProperty("firstName2", "Beatris");
        $actualName = $this->singleton->getProperty("firstName");
        $this->assertEquals($this->expectedName, $actualName);

    }
}
