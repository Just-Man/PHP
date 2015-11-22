<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.11.15
 * Time: 10:35
 */


$n = readline('Enter number');

function factorial($n) {
    if ($n <= 0) {              //Дъно на рекурсията, прекъсва функцията
        return 0;               //Дъно на рекурсията, прекъсва функцията
    }
    if ($n == 1) {              //Дъно на рекурсията, прекъсва функцията
        return 1;               //Дъно на рекурсията, прекъсва функцията
    }
    return $n * factorial($n - 1);
}

$factorial = factorial($n);
echo $factorial;