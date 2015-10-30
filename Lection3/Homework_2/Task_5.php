<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */
/*
    * Task_5
    * Задача 5: Да се въведат от потребителя 2 числа. И да се изведат
    * на екрана всички числа от по-малкото до по-голямото.
*/

//Enter value
$number1 = readline('Enter first number');
$number2 = readline('Enter second number');

//Body & print
$start = min($number1, $number2);
$end = max($number1, $number2);

for (; $start <= $end; $start++) {
    echo $start , PHP_EOL;
}