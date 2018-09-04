<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 04.09.2018
 * Time: 06:21
 */

namespace AppBundle\PrimeNumber;

use PHPUnit\Framework\TestCase;

class PrimeNumberTest extends TestCase
{
    private $primeNumber;

    public function setUp()
    {
        $this->primeNumber = new PrimeNumber();
    }

    public function testIsPalindrome()
    {
        $positivePalindrome = [121, 11, 9993999, 525];
        $negativePalindrome = [34, 3445, 100, 995699];

        for ($i = 0; $i < count($positivePalindrome); $i++) {
            $actualTruePalindrome = $this->primeNumber->isPalindrome($positivePalindrome[$i]);
            $actualFalsePalindrome = $this->primeNumber->isPalindrome($negativePalindrome[$i]);
            $this->assertTrue($actualTruePalindrome);
            $this->assertFalse($actualFalsePalindrome);
        }
    }

    public function testGeneratePrimeNumber()
    {

    }
}
