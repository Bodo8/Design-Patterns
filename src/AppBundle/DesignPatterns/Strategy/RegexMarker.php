<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 20.08.2018
 * Time: 20:47
 */

namespace AppBundle\DesignPatterns\Strategy;


class RegexMarker extends Marker
{

    public function mark(string $response): bool
    {
        return (preg_match($this->test, $response) === 1);
    }
}