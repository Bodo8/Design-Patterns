<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 18.08.2018
 * Time: 07:45
 */

namespace AppBundle\DesignPatterns\Decorator;


abstract class DecorateProcess extends ProcessRequest
{
    protected $processRequest;

    function __construct(ProcessRequest $processRequest)
    {
        $this->processRequest = $processRequest;
    }
}