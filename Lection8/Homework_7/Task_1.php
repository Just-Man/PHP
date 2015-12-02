<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.11.15
 * Time: 08:19
 */

/*
    * Задача 1:
    * Да се състави програма, която сортира по метода на мехурчето
    * предварително въведен двумерен масив с естествени числа.
    * Сортирането да се извърши по редове/колони.
 *
    * Пример:
    * 15; 16; 8; 1;
    * 2; 3; 4; 7;
    * 9; 11; 19; 6;
 *
    * Изход:
    * 1; 2; 3; 4;
    * 6; 7; 8; 9;
    * 11; 15; 16; 19;
*/


$matrix = [
            [15, 16, 8, 1],
            [2, 3, 4, 7],
            [9, 11, 19, 6]
        ];
$newMatrix = [];

/*
$rows = count($matrix);
for ($i = 0; $i < $rows; $i += 1) {
    $cols = count($matrix[$i]);
    for ($j = 0; $j < $cols ; $j += 1) {
        for ($k = 1; $k < $cols; $k  += 1) {
            if ($matrix[$i][$k-1] >= $matrix[$i][$k] ) {
                $temp = $matrix[$i][$k];
                $matrix[$i][$k] = $matrix[$i][$k-1];
                $matrix[$i][$k-1] = $temp;
            }
        }
    }
}
$cols = count($matrix);
for ($i = 0; $i < $rows; $i += 1) {
    for ($j = 0; $j <$rows-2; $j += 1) {
        if ($matrix[$j][$i] > $matrix[$j + 1][$i] ) {
            $temp = $matrix[$i + 1][$i];
            $matrix[$j + 1][$i] = $matrix[$j][$i];
            $matrix[$j][$i] = $temp;
        }
    }
}*/
$rows = count($matrix);
for ($i = 0; $i < $rows ; $i += 1) {
    $cols = count($matrix[$i]);
    for ($j = 0; $j < $cols ; $j += 1) {
        $numbers[] = $matrix[$i][$j];
    }
}
$len = count($numbers);
for ($i = 0; $i < $len ; $i += 1) {
    for ($j = 0; $j < $len; $j += 1) {
        if ($numbers[$i] < $numbers[$j] ) {
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$i];
            $numbers[$i] = $temp;
        }
    }
}
$n = 0;
$rows = count($matrix);
for ($i = 0; $i < $rows ; $i += 1) {
    $cols = count($matrix[$i]);
    for ($j = 0; $j < $cols; $j += 1) {
        $matrix[$i][$j] = $numbers[$n];
        $n += 1;
    }
}
print_r($matrix);