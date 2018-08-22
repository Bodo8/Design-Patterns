<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 20.08.2018
 * Time: 06:45
 */

namespace AppBundle\DesignPatterns\Strategy;


class TestQuestion extends Question
{
    public function printTextQuestion()
    {
        print 'print question tests';
    }

}