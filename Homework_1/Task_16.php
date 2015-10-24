<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.10.15
 * Time: 10:25
 */

/*
    * Задача 16:
    * Въведено е трицифрено естествено число от вида abc.
    * Трябва да се провери дали:
    * ако a = b = c - Изход: цифрите са равни;
    * ако a>b>c - Изход: цифрите са във възходящ ред;
    * ако a<b<c цифрите са в низходящ ред;
    * и изход: цифрите са ненаредени, за неописаните случаи.
    * Да се състави програма, която извежда резултата от проверката за
    * наредба на цифрите в числото.
    * Пример: 345
    * Изход: възходящ ред.
*/

echo 'Enter number between 100 and 999'. PHP_EOL;
$number = readline('Enter value of number'. PHP_EOL);
$firstDigit = substr($number,0, 1);
$secondDigit = substr($number,1, 1);
$thirdDigit = substr($number, -1);
if ($firstDigit == $secondDigit && $secondDigit == $thirdDigit) {
    echo 'Digits form number: ' . $number . ' are equal';
} else if ($firstDigit > $secondDigit && $secondDigit > $thirdDigit) {
    echo 'Digits form number: ' . $number . ' are in decreasing order';
} else if ($firstDigit < $secondDigit && $secondDigit < $thirdDigit) {
    echo 'Digits form number: ' . $number . ' are in increasing order';
} else {
    echo 'Digits are not ordered';
}