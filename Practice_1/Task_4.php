<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 29.10.15
 * Time: 10:53
 */

/*
    * Task4. Write a program that tells you if a number is prime.//prosto chislo
*/

$number = readline('Enter number');
$counter = 0;
for ($a = 2; $a < $number; $a++) {
    if (!($number % $a)) {
        $counter++;
    }
}
if (!$counter){
    echo 'Number ' . $number . ' is prime';
} else {
    echo 'Number ' . $number . ' isn\'t prime';
}
