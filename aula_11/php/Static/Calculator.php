<?php

class Calculator
{
    public function twoMonths($monthOne, $monthTwo): float
    {
        return ($monthOne + $monthTwo) / 2;
    }

    public function fourMonths($monthOne, $monthTwo, $monthThree, $monthFour): float
    {
        return ($monthOne + $monthTwo + $monthThree + $monthFour) / 4;
    }

    public function sixMonths($monthOne, $monthTwo, $monthThree, $monthFour, $monthFive, $monthSix): float
    {
        return ($monthOne + $monthTwo + $monthThree + $monthFour + $monthFive + $monthSix) / 6;
    }
}
