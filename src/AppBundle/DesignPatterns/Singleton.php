<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 05.08.2018
 * Time: 07:04
 */

namespace AppBundle\DesignPatterns;


class Singleton
{
    private $singletonTab = [];
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function setProperty(string $key, string $value)
    {
        $this->singletonTab[$key] = $value;
    }

    public function getProperty(string $key)
    {
        return $this->singletonTab[$key];
    }
}