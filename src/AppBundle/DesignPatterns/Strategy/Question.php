<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 20.08.2018
 * Time: 06:41
 */

namespace AppBundle\DesignPatterns\Strategy;


abstract class Question
{
    protected $prompt;
    protected $marker;

    public function __construct(string $prompt, Marker $marker)
    {
        $this->prompt = $prompt;
        $this->marker = $marker;
    }

    public function mark(string $response): bool
    {
        return $this->marker - $this->mark($response);
    }

}