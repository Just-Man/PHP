<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.11.15
 * Time: 10:34
 */


$n = readline('Enter number');

function sum($n) {
    if ($n <= 0) {              //Дъно на рекурсията, прекъсва функцията
        return 0;               //Дъно на рекурсията, прекъсва функцията
    }
    if ($n == 1) {              //Дъно на рекурсията, прекъсва функцията
        return 1;               //Дъно на рекурсията, прекъсва функцията
    }
    return $n + sum($n - 1);
}

$sum1 = sum($n);
echo $sum1;