<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 24.10.2018
 * Time: 16:56
 */

namespace AppBundle\model;


class CalculateWaste
{
    // sheet sizes
    const  SHEET_HIGH = 2500;
    const SHEET_WIDTH = 1250;

    //area 'króćca fi 50' calculate: 25mm*3,1416.
    const AREA_ONE_STUB_TUBE = 78.54;
    //area sheet calculate 2500mm * 1250mm.
    const AEA_ONE_SHEET = 3125000;

    private $areaWaste;
    private $quantityStubTube;
    private $wallAOfTheBoxHigh;
    private $wallAOfTheBoxWidth;
    private $wallBOfTheBoxHigh;
    private $wallBOfTheBoxWidth;
    private $wallCOfTheBoxHigh;
    private $wallCOfTheBoxWidth;

    private $tabWithBoxes = [];

    public function __construct()
    {
    }

    /**
     * add side selections for shorter and longer ones.
     */
    public function addBox($quantityStubTube,
                           $wallAOfTheBoxHigh, $wallAOfTheBoxWidth,
                           $wallBOfTheBoxHigh, $wallBOfTheBoxWidth,
                           $wallCOfTheBoxHigh, $wallCOfTheBoxWidth)
    {
        $this->tabWithBoxes[] = ["quantityStubTube" => $quantityStubTube,
            "wallAOfTheBoxHigh" => $wallAOfTheBoxHigh, "wallAOfTheBoxWidth" => $wallAOfTheBoxWidth,
            "wallBOfTheBoxHigh" => $wallBOfTheBoxHigh, "wallBOfTheBoxWidth" => $wallBOfTheBoxWidth,
            "wallCOfTheBoxHigh" => $wallCOfTheBoxHigh, "wallCOfTheBoxWidth" => $wallCOfTheBoxWidth];
    }


    public function calculateMaxAreaBoxes(array $tabAllBoxes)
    {
        $aAllHighTab = [];
        $aAllWidthTab = [];
        $bAllHighTam = [];
        $bAllWidthTab = [];
        $areaOfUsedWalls = 0;
        $maxHigh = 0;
        $maxWidth = 0;

        foreach ($tabAllBoxes as $key => $box) {
            $index = 0;
            foreach ($box as $key2 => $wall) {
                $aAllHighTab[$index] = $wall["wallAOfTheBoxHigh"];
                $aAllWidthTab[$index] = $wall["wallAOfTheBoxWidth"];
                $bAllHighTam[$index] = $wall["wallBOfTheBoxHigh"];
                $bAllWidthTab[$index] = $wall["wallBOfTheBoxWidth"];
                $index++;
            }
            array_multisort($aAllHighTab, SORT_DESC,
                $aAllWidthTab, SORT_DESC, $box);
            array_multisort($bAllHighTam, SORT_DESC,
                $bAllWidthTab, SORT_DESC, $box);
        }

        $size = count($aAllHighTab);
        $aAllHighTabBool = array_fill(0, $size, "false");
        $aAllWidthTabBool = array_fill(0, $size, "false");
        $counter = 0;
        for ($i = 0; $i < count($aAllWidthTab); $i++) {
            $widthFirstWall = isset($aAllWidthTab[$counter])
                ? $aAllWidthTab[$counter] : null;
            for ($k = $i; $k < count($aAllWidthTab); $k++) {
                $temp = $k + 1;
                $widthSecondWall = isset($aAllWidthTab[$temp])
                    ? $aAllWidthTab[$temp] : null;

                if ($widthFirstWall === $widthSecondWall) {
                    $highFirstWall = isset($aAllHighTab[$counter])
                        ? $aAllHighTab[$counter] : null;
                    $highSecondWall = isset($aAllHighTab[$temp])
                        ? $aAllHighTab[$temp] : null;
                    $maxHigh += $highFirstWall + $highSecondWall;
                    $maxWidth += $widthFirstWall;


                    if ($maxHigh < CalculateWaste::SHEET_HIGH && $maxWidth < CalculateWaste::SHEET_WIDTH) {
                        $aAllHighTabBool[$counter] = "true";
                        $aAllHighTabBool[$temp] = "true";
                        $aAllWidthTabBool[$counter] = "true";
                        $aAllWidthTabBool[$temp] = "true";
                        $areaOfUsedWalls += $highFirstWall * $widthFirstWall;
                        $areaOfUsedWalls += $highSecondWall * $widthSecondWall;
                        $counter += 1;
                        if ($maxHigh >= CalculateWaste::SHEET_HIGH && $maxWidth < CalculateWaste::SHEET_WIDTH) {
                            $maxWidth = 0;
                        }
                        if ($maxHigh >= CalculateWaste::SHEET_HIGH && $maxWidth >= CalculateWaste::SHEET_WIDTH) {
                            // calculate area boxes and subtract to are sheet and add area
                        }
                    }
                }
            }
        }
        print_r($aAllHighTabBool);
        $this->setAreaWaste(CalculateWaste::AEA_ONE_SHEET - $areaOfUsedWalls);
        print  $this->getAreaWaste() . ", ";
        echo array_sum($aAllHighTab);
    }

    public function getTabWithBoxes(): array
    {
        return $this->tabWithBoxes;
    }

    public function getAreaWaste(): int
    {
        return $this->areaWaste;
    }

    private function setAreaWaste(int $areaWaste): void
    {
        $this->areaWaste = $areaWaste;
    }

}

$calculateWaste = new CalculateWaste();
$calculateWaste->addBox(5, 40,
    20, 10, 20,
    10, 20);
$calculateWaste->addBox(3, 50,
    20, 25, 20,
    25, 20);
$calculateWaste->addBox(8, 70,
    30, 10, 30,
    10, 30);
$calculateWaste->addBox(6, 45,
    30, 10, 30,
    10, 30);
$tabAllBoxes[] = $calculateWaste->getTabWithBoxes();
$calculateWaste->calculateMaxAreaBoxes($tabAllBoxes);
