<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 10.08.2018
 * Time: 06:27
 */

namespace AppBundle\DesignPatterns\AbstractFactory;


abstract class ToDoEncoder
{
    abstract public function encode(): string;
}