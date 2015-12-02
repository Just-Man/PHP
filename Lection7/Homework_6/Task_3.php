<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.11.15
 * Time: 12:56
 */

/*
    * Задача 3:
    * Да се състави програма, която проверява дали въведено естествено
    * число е просто.
 *
    * Пример: 101
    * Изход: просто
*/

$n = readline('Enter number');

/*
function isPrime ($n) {
    if (prime($n,$i)) {
        echo 'The number' . $n . 'isn\'t prime';
    } else {
        echo 'The number' . $n . 'is prime';
    }
}
*/
function prime($n, $i = 2) {
    if ($n == $i ) {
        return 0;
    } else if (!($n % $i)) {
        return 1;
    } else {
        return prime($n, $i + 1);
    }
}
/*
function isPrime ($n) {
    if (prime($n)) {
        echo 'The number' . $n . 'isn\'t prime';
    } else {
        echo 'The number' . $n . 'is prime';
    }
}
*/
$result = prime($n);
if ($result) {
    echo 'The number ' . $n . ' isn\'t prime';
} else {
    echo 'The number ' . $n . ' is prime';
}

