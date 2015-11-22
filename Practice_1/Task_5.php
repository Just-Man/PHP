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
$reversedNumber = 0;
$binaryNumber = null;
while ($number >= 1) {
        $counter++;
        $binaryNumber = $binaryNumber . $number % 2;
    $number = (int) $number / 2;
}
echo $binaryNumber , PHP_EOL;
while ($binaryNumber > 0){
    $lastDigit = $binaryNumber % 10;
    $binaryNumber /= 10;
    $reversedNumber = $reversedNumber * 10 + $lastDigit;
    $counter -= 1;
    if (!$counter) {
        $binaryNumber = 0;
    }
}

//Print
echo $reversedNumber , PHP_EOL;