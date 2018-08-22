<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 20.08.2018
 * Time: 06:49
 */

namespace AppBundle\DesignPatterns\Strategy;


class AVQuestion extends Question
{
    public function showQuestion()
    {
        print 'show question tests';
    }

}