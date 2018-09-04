<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 01.09.2018
 * Time: 20:16
 */

namespace AppBundle\PrimeNumber;


class PrimeNumber
{
    function generatePrimeNumber(int $minPrimeNumber, int $maxPrimeNumber): array
    {
        if ($minPrimeNumber < 0 || $maxPrimeNumber < 0) {
            throw new \Exception('range must will be greater than 0');
        }

        $tabWithNumber = [];

        for ($i = 0; $i < $maxPrimeNumber; $i++) {
            $tabWithNumber[$i] = $i;
        }

        for ($x = 2; $x < $maxPrimeNumber; $x++) {
            $index = $x;

            while (true) {
                $index += $x;
                if ($index < $maxPrimeNumber) {
                    $tabWithNumber[$index] = -1;
                } else {
                    break;
                }
            }
        }

        $tabPrimeNumber = [];
        $counter = 0;

        for ($i = 0; $i < $maxPrimeNumber; $i++) {
            if ($tabWithNumber[$i] > 2 && $tabWithNumber[$i] > $minPrimeNumber) {
                $tabPrimeNumber[$counter] = $tabWithNumber[$i];
                $counter++;
            }
        }
        return $tabPrimeNumber;
    }

    function isPalindrome(int $productOfMultipleTwoPrimeNumbers): bool
    {
        $palindrome = $productOfMultipleTwoPrimeNumbers;
        $revers = 0;

        while ($palindrome != 0) {
            $remainder = (int)($palindrome % 10);
            $revers = (int)(($revers * 10) + $remainder);
            $palindrome = (int)($palindrome / 10);
        }
        if ($revers == $productOfMultipleTwoPrimeNumbers) {
            return true;
        }
        return false;
    }
}


