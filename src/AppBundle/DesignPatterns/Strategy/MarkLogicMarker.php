<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 20.08.2018
 * Time: 06:55
 */

namespace AppBundle\DesignPatterns\Strategy;


class MarkLogicMarker extends Marker
{
    private $engine;

    public function __construct(string $test)
    {
        parent::__construct($test);
        $this->engine = new MarkParse($test);
    }

    public function mark(string $response): bool
    {
        return true;
    }
}