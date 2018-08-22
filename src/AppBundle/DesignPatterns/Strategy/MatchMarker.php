<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 20.08.2018
 * Time: 20:46
 */

namespace AppBundle\DesignPatterns\Strategy;


class MatchMarker extends Marker
{

    public function mark(string $response): bool
    {
        return ($this->test == $response);
    }
}