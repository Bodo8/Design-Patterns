<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 10.08.2018
 * Time: 06:28
 */

namespace AppBundle\DesignPatterns\AbstractFactory;


abstract class ContactEncoder
{
    abstract public function encode(): string;
}