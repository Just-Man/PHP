<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 09.11.15
 * Time: 06:46
 */

/*
Задача 13:
Да се състави програма, чрез която се въвежда число и се представя
като число в двоична бройна система.
Програмата, чрез масив, да изчислява последователно всички цифри
на въведеното естествено число в 2-ична бройна система.
Пример: 99
Изход: 1100011
*/

$number = readline('Enter number' . PHP_EOL);

//Body
while ($number > 0) {
$binary[] = $number % 2;
$number = floor($number / 2);
}

//Print
$binary = array_reverse($binary);
$len = count($binary);
for ($i = 0; $i < $len ; $i += 1) {
    echo $binary[$i];
}