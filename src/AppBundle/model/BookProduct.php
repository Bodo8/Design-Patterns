<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 26.07.2018
 * Time: 07:12
 */

namespace AppBundle\model;


class BookProduct extends ShopProduct
{
    private $numberPage;

    public function __construct(string $title,
                                string $producerMainName,
                                string $producerFirsName,
                                float $price,
                                int $numberPage)
    {
        parent::__construct($title,
            $producerMainName,
            $producerFirsName,
            $price);
        $this->numberPage = $numberPage;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= $this->numberPage;
        return $base;
    }

    public function getPrice()
    {
        return $this->price;
    }

}