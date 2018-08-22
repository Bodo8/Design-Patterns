<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 18.08.2018
 * Time: 07:50
 */

namespace AppBundle\DesignPatterns\Decorator;


class AuthenticateRequest extends DecorateProcess
{

    public function process(RequestHelper $requestHelper)
    {
        print __CLASS__ . ' : authorization request';
        $this->processRequest->process($requestHelper);
    }
}

