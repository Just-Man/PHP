<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.10.15
 * Time: 10:15
 */


/*
    * Задача 11:
    * Съставете програма, която по дадено трицифренo число проверява
    * дали числото се дели на всяка своя цифра. Във въведеното число да
    * няма цифра 0.
*/

//Enter value
echo 'Enter number between 100 and 999'. PHP_EOL;
$firstNumber = readline('Enter value of number'. PHP_EOL);

//Body
$number = $firstNumber;
$thirdDigit = $number % 10;
$number /= 10;
$secondDigit = $number % 10;
$number /= 10;
$firstDigit = $number % 10;

//Print
if ((!$firstDigit) || (!$secondDigit) || (!$thirdDigit)) {
    echo 'Entered number containing 0';
} else {
    if (!($number % $firstDigit)) {
        echo 'Entered number: ' . $firstNumber . 'can be divide by: ' . $firstDigit . PHP_EOL;
    } else {
        echo 'Entered number: ' . $firstNumber . ' can\'t be divide by: ' . $firstDigit . PHP_EOL;
    }
    if (!($number % $secondDigit)) {
        echo 'Entered number: ' . $firstNumber . ' can be divide by: ' . $secondDigit . PHP_EOL;
    } else {
        echo 'Entered number: ' . $firstNumber . ' can\'t be divide by: ' . $secondDigit . PHP_EOL;
    }
    if (!($number % $thirdDigit)) {
        echo 'Entered number: ' . $firstNumber . ' can be divide by: ' . $thirdDigit . PHP_EOL;
    } else {
        echo 'Entered number: ' . $firstNumber . ' can\'t be divide by: ' . $thirdDigit . PHP_EOL;
    }
}

/*
//Second way to resolve task

//Enter value
echo 'Enter number between 100 and 999'. PHP_EOL;
$number = readline('Enter value of number'. PHP_EOL);

//Body & print
$firstDigit = substr($number,0, 1);
$secondDigit = substr($number,1, 1);
$thirdDigit = substr($number, -1);
if ((!$firstDigit) || (!$secondDigit) || (!$thirdDigit)) {
    echo 'Entered number containing 0';
} else {
    if (!($number % $firstDigit)) {
        echo 'Entered number can be divide by: ' . $firstDigit . PHP_EOL;
    } else {
        echo 'Entered number can\'t be divide by: ' . $firstDigit . PHP_EOL;
    }
    if (!($number % $secondDigit)) {
        echo 'Entered number can be divide by: ' . $secondDigit . PHP_EOL;
    } else {
        echo 'Entered number can\'t be divide by: ' . $secondDigit . PHP_EOL;
    }
    if (!($number % $thirdDigit)) {
        echo 'Entered number can be divide by: ' . $thirdDigit . PHP_EOL;
    } else {
        echo 'Entered number can\'t be divide by: ' . $thirdDigit . PHP_EOL;
    }
}

*/