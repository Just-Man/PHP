<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 02.12.15
 * Time: 18:00
 */

/*
Задача 5:
Да се състави програма, чрез която се въвежда естествено число N.
Програмата да извежда число, чиито цифри са написани в ред обратен
на въведеното число.
Да се извежда съобщение дали въведеното число е палиндром.
Пример: 12321
Изход: 12321 да.
Пример: 12578
Изход: 87521 не.
*/

$number = readline("Enter number");
$len = strlen($number);
$newNumber = null;

function palindrome ($number, $newNumber, $len) {
    if ($len <= 0) { return $newNumber; }
        $newNumber .= $number % 10;
        $number = floor($number / 10);
    return palindrome($number, $newNumber, $len - 1);
}
$newNumber = palindrome ($number, $newNumber, $len);
if ($newNumber == $number ) {
    echo "Number $number is palindrome";
} else {
    echo "Number $number isn't palindrome";
}