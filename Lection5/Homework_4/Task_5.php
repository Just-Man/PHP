<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 18.11.15
 * Time: 08:35
 */

/*
    * Задача 5:
    * Да се състави програма, при която предварително са въведени
    * естествени числа в двумерен масив 4*4 елемента.
    * Програмата да извежда резултат от проверката какво е съотношението
    * на най-голямата сума по редове спрямо най-голямата сума по колони.
 *
    * Пример:
    * 1,2,3,4
    * 5,6,7,8
    * 9,10,11,12
    * 13,14,15,16
 *
    * Изход:
    * най-голяма сума по редове 58
    * най-голяма сума по колони 40
    * Максималната сума по редове е > от максималната сума по колони
*/

//Declaration variables
$sumRow = 0;
$sumCol = 0;
$sumMaxRow = 0;
$sumMaxCol = 0;

$matrix = [];

//Enter values
$rows = readline('Enter size of matrix = ');
$cols = $rows;
for ($i = 0; $i < $rows ; $i += 1) {
    for ($j = 0; $j < $cols; $j += 1) {
        $element = readline('Enter element at position [' . ($i + 1) . '][' . ($j + 1) . ']' . PHP_EOL);
        $matrix[$i][$j] = $element;
    }
}
//Body

for ($i = 0; $i < $rows ; $i += 1) {
        for ($j = 0; $j <$cols ; $j += 1) {
            $sumRow += $matrix[$i][$j];
        }
    if ($sumRow > $sumMaxRow) {
        $sumMaxRow = $sumRow;
    }
    $sumRow = 0;
}
for ($j = 0; $j <$cols ; $j += 1) {
    for ($i = 0; $i < $rows ; $i += 1) {
        $sumCol += $matrix[$i][$j];
    }
    if ($sumCol > $sumMaxCol) {
        $sumMaxCol = $sumCol;
    }
    $sumCol = 0;
}
echo 'Max sum by row' . $sumMaxRow , PHP_EOL;
echo 'Max sum by column' . $sumMaxCol , PHP_EOL;
if ($sumMaxCol > $sumMaxRow) {
    echo 'Max sum by column is greater than max sum by row';
} else {
    echo 'Max sum by column is smaller than max sum by row';
}