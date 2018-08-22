<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 18.08.2018
 * Time: 07:48
 */

namespace AppBundle\DesignPatterns\Decorator;


class LongRequest extends DecorateProcess
{

    public function process(RequestHelper $requestHelper)
    {
        print __CLASS__ . ' : registry request';
        $this->processRequest->process($requestHelper);
    }
}