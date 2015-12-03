<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 26.11.15
 * Time: 09:06
 */



/*
Задача 12:
Да се създаде метод, който приема за входни данни число N и
връща масив от числа с дължина N, който съдържа всички числа
от 1 до N.
*/

$n = readline('Enter n');

function printArrayN ($n) {
    for ($i = 0; $i < $n ; $i += 1) {
        $simpleArray[$i] = $i;
        echo $simpleArray[$i];
    }
}