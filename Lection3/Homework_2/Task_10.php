<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */
/*
    * Задача 10: Въведете число от клавиатурата и определете дали е
    * просто. Просто число е това което се дели САМО на 1 и на себе си.
*/


//Enter value
$number = readline('Enter number');

//Body
$counter = 0;
for ($a = 2; $a < $number; $a++) {
    if (!($number % $a)) {
        $counter++;
    }
}

//Print
if (!$counter){
    echo 'Number ' . $number . ' is prime';
} else {
    echo 'Number ' . $number . ' isn\'t prime';
}
