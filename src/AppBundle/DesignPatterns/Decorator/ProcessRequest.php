<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 18.08.2018
 * Time: 07:42
 */

namespace AppBundle\DesignPatterns\Decorator;


abstract class ProcessRequest
{
    abstract public function process(RequestHelper $requestHelper);

}