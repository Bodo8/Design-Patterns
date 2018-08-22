<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 26.07.2018
 * Time: 07:15
 */

namespace AppBundle\model;
spl_autoload('ShopProduct');
spl_autoload('BookProduct');
spl_autoload('CDProduct');


class ShopProductWriter
{
    private $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function write()
    {
        $temp = '';
        foreach ($this->products as $shopProduct) {
            $temp .= $shopProduct->getTitle();
            $temp .= '  ';
            $temp .= $shopProduct->getProducer();
            $temp .= '  ';
            $temp .= $shopProduct->getPrice();
            $temp .= '  , ';
        }
        print $temp;
    }
}


$shopProductWriter = new ShopProductWriter();
$shopProduct = new BookProduct('Cień wiatru', 'Carlos', 'Zafon', 22, 234);
$shopProduct22 = new BookProduct('Aga', 'Umberto', 'Eco', 15, 200);
$cdProduct = new CDProduct('Agnieszka', 'Nykiel', 'Natalia', 45, 60);
$shopProductWriter->addProduct($shopProduct);
$shopProductWriter->addProduct($shopProduct22);
$shopProductWriter->addProduct($cdProduct);
$shopProductWriter->write();
$summaryLine = $shopProduct->getSummaryLine();
echo $summaryLine;
echo '/n  ';
echo $cdProduct->getSummaryLine();

