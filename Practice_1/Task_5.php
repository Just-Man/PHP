<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 29.10.15
 * Time: 11:10
 */

/*
    * Task5. Write a program that reads a positive number and writes its binary representation.
*/

//Enter value
$number = readline('Enter positive number');

//Body
$counter = 0;
while ($number >= 1) {
    if (!($number % 2)) {
        $counter++;
    }
        $binaryNumber = $binaryNumber . $number % 2;
    $number = (int) $number / 2;
}
$binaryNumber = $binaryNumber << $counter;

//Print
echo $binaryNumber;