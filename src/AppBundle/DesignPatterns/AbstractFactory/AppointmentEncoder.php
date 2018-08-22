<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 07.08.2018
 * Time: 06:13
 */

namespace AppBundle\DesignPatterns\AbstractFactory;


abstract class AppointmentEncoder
{
    abstract public function encode(): string;
}

