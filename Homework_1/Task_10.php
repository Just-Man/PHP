<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.10.15
 * Time: 9:22
 */

/*
 * Задача 10:
 * Трябва да се напълни цистерна с вода. Имате 2 кофи с вместимост 2 и
 * 3 литра и ги ползвате едновременно.
 * Да се състави програма, която по даден обем извежда как ще прелеете
 * течността с тези кофи, т.е. по-колко пъти ще се пълни всяка от
 * кофите.
 * Входни данни: естествено число от интервала [10..9999].
 *
 * Пример: 107
 *
 * Изход: 21 пъти по 2 литра,
 *  21 пъти по 3 литра
 *  допълнително кофа от 2 литра
*/

echo 'Enter the volume of tank'. PHP_EOL;
$tank = readline('Volume of tank'. PHP_EOL);
$memTank = $tank;
$bucket1 = 2;
$bucket2 = 3;
$countBucket = 0;
$countBonusBucket = 0;
$countBonusBucket1 = 0;
$countBonusBucket2 = 0;
$countBonusBucket = $tank % ($bucket1 + $bucket2);                              //Save the rest
$countBucket = ($tank - $countBonusBucket) / ($bucket1 + $bucket2);             //deduct rest and divide with bucket1 +bucket2
echo 'Volume of tanks is: ' . $memTank .PHP_EOL;
echo $countBucket . ' times with bucket of: '. $bucket1 . ' litters' . PHP_EOL;
echo $countBucket . ' times with bucket of: '. $bucket2 . ' litters' . PHP_EOL;
if (!($countBonusBucket % $bucket2)) {                                          //Check witch bucket to use
                $countBonusBucket -= $bucket2;
                $countBonusBucket2 += 1;
            } else {
    if (!($countBonusBucket % $bucket1)) {
        $countBonusBucket -= $bucket1;
        $countBonusBucket1 += 1;
    }
}
if ($countBonusBucket1 > 0 ) {                                                  //Print only used bonus bucket
    echo 'and ' . $countBonusBucket1 . ' times bonus with: ' . $bucket1 . ' litters' . PHP_EOL;
} else if ($countBonusBucket2 > 0)
{
    echo 'and '. $countBonusBucket2 . ' times bonus with: ' . $bucket2 . ' litters' . PHP_EOL;
}



//Second way to resolve task

/*
echo 'Enter the volume of tank'. PHP_EOL;
$tank = readline('Volume of tank'. PHP_EOL);
$memTank = $tank;
$bucket1 = 2;
$bucket2 = 3;
$countBucket = 0;
$countBonusBucket = 0;
$countBonusBucket1 = 0;
$countBonusBucket2 = 0;
    while ($tank > 0) {
        if ($tank <= 7) {
            if (!($tank % $bucket2)) {
                $tank -= $bucket2;
                $countBonusBucket2 += 1;
            } else {
                if (!($tank % $bucket1)) {
                    $tank -= $bucket1;
                    $countBonusBucket1 += 1;
                }
            }
        } else {
            $tank = $tank - ($bucket1 + $bucket2);
            $countBucket += 1;
        }
    }
echo 'Volume of tanks is: ' . $memTank .PHP_EOL;
echo $countBucket1 . ' times with bucket of: '. $bucket1 . ' litters' . PHP_EOL;
echo $countBucket2 . ' times with bucket of: '. $bucket2 . ' litters' . PHP_EOL;
if ($countBonusBucket1 > 0 ) {
    echo 'and ' . $countBonusBucket1 . ' times bonus with: ' . $bucket1 . ' litters' . PHP_EOL;
} else if ($countBonusBucket2 > 0)
{
    echo 'and '. $countBonusBucket2 . ' times bonus with: ' . $bucket2 . ' litters' . PHP_EOL;
}*/