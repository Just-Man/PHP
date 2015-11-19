<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 18.11.15
 * Time: 07:34
 */

/*
    * Задача 3:
    * Имате двумерен масив от числа, чийто стойности са въведени
    * предварително. Да се отпечатат сумата на елементите на масива,
    * както и средноаритметичното на тези числа.
*/

//Declaration
$matrix = [];
$sum = 0;
$counter = 0;
$average = 0;

//Enter values & Body
$rows = readline('Enter size of matrix = ');
$cols = $rows;
for ($i = 0; $i < $rows ; $i += 1) {
    for ($j = 0; $j < $cols; $j += 1) {
        $element = readline('Enter element at position [' . ($i + 1) . '][' . ($j + 1) . ']' . PHP_EOL);
        $matrix[$i][$j] = $element;
        $sum += $element;
        $counter += 1;
    }
}

$average = $sum / $counter;

//Print
echo 'Sum of elements of matrix is: ' . $sum , PHP_EOL;
echo $average , PHP_EOL;
