<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 08.11.15
 * Time: 10:10
 */

/*
Задача 2:
Нека по въведен масив да се конструира нов, като половината му
елементи са точно като на оригиналния, а другите да са тези
елементи, но в обратен ред. Последно, да се изведе новия масив
на екрана.
5,2,5,8,3
5 2 5 8 3 3 8 5 2 5
*/


$end = readline('Enter length of array');
$newArray = [];
for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);

//Body
    $numbers[] = $number;
    $newArray[] = $number;
}
for ($i = $end-1; $i >= 0; $i -= 1) {
    $newArray[] = $numbers[$i];

}
$len = count($newArray);
for ($i = 0; $i < $len ; $i += 1) {
    echo $newArray[$i]. ' ';
}

