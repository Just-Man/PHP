<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 08.11.15
 * Time: 10:45
 */

/*
    * Задача 4:
    * Да се прочете масив и да се отпечата дали е огледален.
    * Следните масиви са огледални:
    * [3 7 7 3]
    * [4]
    * [1 55 1]
    * [6 27 -1 5 7 7 5 -1 27 6]
    * Пример:
    * Въведете размер за масива: 5
    * Въведете 1-я елемент:
    * 10
    * Въведете 2-я елемент:
    * 66
    * Въведете 3-я елемент:
    * 1
    * Въведете 4-я елемент:
    * 66
    * Въведете 5-я елемент:
    * 10
    * Масива е огледален
*/


$end = readline('Enter length of array');
$newArray = [];
for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);

//Body
    $numbers[] = $number;
}
$really = 1;
$len = count($numbers);
for ($i = 0; $i < $len/2 ; $i += 1) {
    if (!($numbers[$i] == $numbers[($len-1) - $i])) {
        echo 'Array isn\'t mirror';
        $really = 0;
        break;
    }
}
if ($really == 1) {
    echo 'Array is mirror';
}

