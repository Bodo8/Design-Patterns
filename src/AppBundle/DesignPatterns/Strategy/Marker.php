<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 20.08.2018
 * Time: 06:42
 */

namespace AppBundle\DesignPatterns\Strategy;


abstract class Marker
{
    protected $test;

    public function __construct(string $test)
    {
        $this->test = $test;
    }

    abstract public function mark(string $response): bool;

}