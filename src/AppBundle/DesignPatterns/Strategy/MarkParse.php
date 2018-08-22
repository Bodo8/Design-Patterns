<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 20.08.2018
 * Time: 06:58
 */

namespace AppBundle\DesignPatterns\Strategy;


class MarkParse
{

    public function __construct($test)
    {
    }

    public function evaluate($response)
    {
        print 'response mark logic';
    }
}