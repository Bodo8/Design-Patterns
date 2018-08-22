<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 26.07.2018
 * Time: 07:15
 */

namespace AppBundle\model;


class CDProduct extends ShopProduct
{

    private $playLength;

    public function __construct(string $title,
                                string $producerMainName,
                                string $producerFirsName,
                                float $price,
                                int $playLength)
    {
        parent::__construct($title,
            $producerMainName,
            $producerFirsName,
            $price);
        $this->playLength = $playLength;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= $this->playLength;
        return $base;
    }

}