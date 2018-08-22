<?php

namespace AppBundle\model;


class ShopProduct
{

    private $title;
    private $producerMainName;
    private $producerFirsName;
    protected $price;
    private $discount = 0;

    public function __construct(
        string $title,
        string $producerMainName,
        string $producerFirsName,
        float $price
    )
    {
        $this->title = $title;
        $this->producerMainName = $producerFirsName;
        $this->producerFirsName = $producerMainName;
        $this->price = $price;
    }

    public function getSummaryLine()
    {
        $base = $this->title;
        $base .= $this->producerMainName;
        $base .= $this->producerFirsName;
        return $base;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getProducerMainName(): string
    {
        return $this->producerMainName;
    }

    public function setProducerMainName(string $producerMainName): void
    {
        $this->producerMainName = $producerMainName;
    }

    public function getProducerFirsName(): string
    {
        return $this->producerFirsName;
    }

    public function setProducerFirsName(string $producerFirsName): void
    {
        $this->producerFirsName = $producerFirsName;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getDiscount(): int
    {
        return $this->discount;
    }

    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

    public function getProducer()
    {
        return $this->producerFirsName . ' '
            . $this->producerMainName;
    }

    public function __toString()
    {
        $title = $this->title;
        $producerFirsName = $this->producerMainName;
        $producerMainName = $this->producerFirsName;
        $price = $this->price;
        return (string)($title . ' ' .
            $producerMainName . ' ' .
            $producerFirsName . ' ' .
            $price . ' '
        );
    }
}