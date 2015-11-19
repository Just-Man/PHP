<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 16.11.15
 * Time: 20:18
 */

/*
Задача 1:
Имате двумерен масив 6х5 от естествени числа, чийто стойности са
въведени предварително.
Да се състави програма, чрез която се извеждат елементите от масива
с най-малката и най-голямата стойност.
Пример:
48,72,13,14,15
21,22,53,24,75
31,57,33,34,35
41,95,43,44,45
59,52,53,54,55
61,69,63,64,65
Изход:
най-малко 13;
най-голямо 95
*/

$rows = readline('Enter number of rows = ');
$cols = readline('Enter number ot columns = ');
$matrix = [];

$newNumbers = [];
$minElement = PHP_INT_MAX;
$maxElement = 0;

//Body

for ($i = 0; $i < $rows ; $i += 1) {
    for ($j = 0; $j < $cols ; $j += 1) {
        $element = readline('Enter element at position [' . ($i + 1) . ']['. ($j + 1) . ']' . PHP_EOL);
        $matrix[$i][$j] = $element;
        if ($element < $minElement) {
            $minElement = $element;
        }
        if ($element > $maxElement) {
            $maxElement = $element;
        }
    }
}

echo $minElement , PHP_EOL;
echo $maxElement , PHP_EOL;
