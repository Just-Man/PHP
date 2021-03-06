<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 18.11.15
 * Time: 08:09
 */

/*
    * Задача 4:
    * Имате предварително въведени стойности на елементи в двумерен
    * масив - естествени числа.
    * Да се състави програма, чрез която се извеждат стойностите на
    * елементите в двумерен масив след обръщането му на +90 градуса.
 *
    * Пример:
    * 1,2,3,4
    * 5,6,7,8
    * 9,10,11,12
    * 13,14,15,16
 *
    * Изход
    * 13,9,5,1
    * 14,10,6,2
    * 15,11,7,3
    * 16,12,8,4
*/

$matrix = [
            [1 ,  2,  3,  4],
            [5 ,  6,  7,  8],
            [9 , 10, 11, 12],
            [13, 14, 15, 16]
        ];


$rows = count($matrix);
    $cols = count($matrix[0]);
    $matrix90 = [];

    for ($i = 0; $i < $rows; $i += 1) {
        for ($j = 0; $j < $cols; $j += 1) {
            $matrix90[$i][$j] = $matrix[$rows - $j - 1][$i];
        }
    }

for ($i = 0; $i < $cols ; $i += 1) {
    for ($j = 0; $j < $rows ; $j += 1) {
        echo $matrix90[$i][$j] . ' ';
    }
    echo PHP_EOL;
}