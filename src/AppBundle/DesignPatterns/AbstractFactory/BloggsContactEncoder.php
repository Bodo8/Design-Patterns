<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 10.08.2018
 * Time: 06:37
 */

namespace AppBundle\DesignPatterns\AbstractFactory;


class BloggsContactEncoder extends ContactEncoder
{

    public function encode(): string
    {
        return 'Contacts in Bloggs format';
    }
}