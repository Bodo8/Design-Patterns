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
    function generatePrimeNumber(int $maxPrimeNumber): array
    {
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
            if ($tabWithNumber[$i] > 2) {
                $tabPrimeNumber[$counter] = $tabWithNumber[$i];
                $counter++;
            }
        }
        return $tabPrimeNumber;
    }
}

