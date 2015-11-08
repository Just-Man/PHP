<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 05.11.15
 * Time: 11:12
 */

//Task 1

/*
Напишете програма, която проверява дали в масив от цели
числа всички числа са неотрицателни.
*/

$arrays = [0.5, 1, -3, -0.4, 5, 4];
$len = count($arrays);
$count = 0;
$value = null;

for ($i = 0; $i < $len; $i += 1) {
    if ($arrays[$i] == (int)$arrays[$i]) {
        if ($arrays[$i] < 0) {
            $count += 1;
        }
    };
}
if ($count < 1) {
    echo 'In array don\'t have negative numbers' , PHP_EOL;
} else {
    echo 'In array have ' . $count . ' negative number/s' , PHP_EOL;
}