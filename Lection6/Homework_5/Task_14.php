<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 26.11.15
 * Time: 09:21
 */

/*
Задача 14:
Да се състави метод, който приема за стойност число N и връща
стойността на N! (N факториел).
*/

function factorial ($n) {
    $result = 1;
    for ($i = 1; $i <= $n ; $i += 1) {
        $result *= $i;
    }
    return $result;
}

echo factorial(5);