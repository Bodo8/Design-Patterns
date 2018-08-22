<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 18.08.2018
 * Time: 07:51
 */

namespace AppBundle\DesignPatterns\Decorator;


class StructureRequest extends DecorateProcess
{

    public function process(RequestHelper $requestHelper)
    {
        print __CLASS__ . ' : composition request';
        $this->processRequest->process($requestHelper);
    }
}