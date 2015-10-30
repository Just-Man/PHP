<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 29.10.15
 * Time: 11:32
 */
/*
    * Task6. Write a program that reads a short positive number and tells how many bits are 1 in it.
*/

$number = readline('Enter positive number');
$binaryNumber = 0;
$counter = 0;
while ($number >= 1) {
    if (!$binaryNumber){
        $binaryNumber = $number % 2;
    } else {
        $binaryNumber = $binaryNumber . $number % 2;
    }
    if ($number % 2){
        $counter++;
    }
    $number = (int) $number / 2;
}
echo $binaryNumber , PHP_EOL;
echo $counter , PHP_EOL;