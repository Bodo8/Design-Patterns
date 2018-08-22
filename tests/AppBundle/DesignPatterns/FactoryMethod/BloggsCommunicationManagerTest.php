<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 08.08.2018
 * Time: 06:20
 */

namespace AppBundle\DesignPatterns\FactoryMethod;

use PHPUnit\Framework\TestCase;

class BloggsCommunicationManagerTest extends TestCase
{
    private $bloggsCommunicManager;

    public function setUp()
    {
        $this->bloggsCommunicManager = new BloggsCommunicationManager();
    }

    public function testGetHeaderText()
    {
        $expectHeader = 'Header format BloggsCalendar';
        $actualHeader = $this->bloggsCommunicManager->getHeaderText();
        self::assertEquals($expectHeader, $actualHeader);
    }

    public function testGetFooterText()
    {
        $expectFooter = 'Footer BloggsCalendar';
        $actualFooter = $this->bloggsCommunicManager->getFooterText();
        self::assertEquals($expectFooter, $actualFooter);
    }

    public function testGetAppointmentEncoder()
    {
        $expectEncode = 'Data appointment in format BloggsCalenrdar';
        $actualEncode = $this->bloggsCommunicManager->getAppointmentEncoder()->encode();
        self::assertEquals($expectEncode, $actualEncode);

    }
}
