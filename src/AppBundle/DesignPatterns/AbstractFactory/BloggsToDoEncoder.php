<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 10.08.2018
 * Time: 06:31
 */

namespace AppBundle\DesignPatterns\AbstractFactory;


class BloggsToDoEncoder extends ToDoEncoder
{

    public function encode(): string
    {
        return 'plain appointment';
    }
}