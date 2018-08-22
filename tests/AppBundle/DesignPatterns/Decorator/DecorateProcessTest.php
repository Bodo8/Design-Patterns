<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 18.08.2018
 * Time: 08:17
 */

namespace AppBundle\DesignPatterns\Decorator;

use PHPUnit\Framework\TestCase;

class DecorateProcessTest extends TestCase
{
    private $process;

    public function setUp()
    {
        $this->process = new AuthenticateRequest(new MainProcess());

    }

    public function testProcess()
    {
        print_r($this->process);
    }

}
