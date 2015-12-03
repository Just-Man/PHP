<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 02.12.15
 * Time: 09:57
 */

$number = 3245;
$index = readline('Enter index');
$digit = [];
$newNumber = null;
$prime = null;

while ($number > 1) {
    $digit[] = $number % 10;
    $number = floor($number / 10);
}

$len = count($digit);
for ($i = 0; $i < $len - $index ; $i += 1) {
    $newNumber .= $digit[$i];
}
$newNumber = strrev($newNumber);
for ($i = 2; $i < $newNumber ; $i += 1) {
    $prime = false;
    if ($newNumber % $i) {
        $prime = true;
    } else {
        echo "Number $newNumber isn't prime";
        break;
    }
}
if ($prime) {
    echo "Number $newNumber is prime";
}