<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 18.08.2018
 * Time: 07:43
 */

namespace AppBundle\DesignPatterns\Decorator;


class MainProcess extends ProcessRequest
{

    public function process(RequestHelper $requestHelper)
    {
        print __CLASS__ . ' : service request';
    }
}