<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 05.11.15
 * Time: 00:10
 */
/*
    * Задача 1:
    * Да се прочете масив и да се намери най-малкото число кратно на
    * 3 от масива.
    * 10, 3, 5, 8, 6, -3, 7
    * Най-малкото число кратно на 3 е -3
*/

//Declaration
$min = PHP_INT_MAX;

//Enter value
$end = readline('Enter length of array');
for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);

//Body
    $numbers[] = $number;
    if (!($numbers[$i] %3) && $numbers[$i] < $min) {
        $min = $numbers[$i];
    }
}
echo 'The smallest number multiples by 3 is ' . $min;
