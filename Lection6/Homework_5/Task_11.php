<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 26.11.15
 * Time: 09:00
 */

/*
Задача 11:
Да се създаде метод, който отпечатва масив в конзолата.
*/

$simpleArray = [5, 9, 7, 1, 4, 6, 3, 8];
function printArray($simpleArray) {
    $len = count($simpleArray) - 1;
    for ($i = 0; $i < $len; $i += 1) {
        echo $simpleArray[$i];
    }
}