<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.11.15
 * Time: 20:21
 */
/*
Задача 2:
Имате квадратен двумерен масив от естествени числа, чийто стойности
се въвеждат от конзолата. Да се отпечатат диагоналите на масива.
Пример:
1,4,6,3
5,9,7,2
4,8,1,9
2,3,4,5
Изход:
1 9 1 5
3 7 8 2
*/
//Enter values
$rows = readline('Enter size of matrix = ');
$cols = $rows;
/*
$matrix = [];

for ($i = 0; $i < $rows ; $i += 1) {
    for ($j = 0; $j < $cols; $j += 1) {
        $element = readline('Enter element at position [' . ($i + 1) . '][' . ($j + 1) . ']' . PHP_EOL);
        $matrix[$i][$j] = $element;
    }
}*/
//Body
$matrix = [
            [1,4,6,3],
            [5,9,7,2],
            [4,8,1,9],
            [2,3,4,5]
        ];

for ($i = 0; $i < $rows; $i += 1) {
    echo $matrix[$i][$i];
}
echo PHP_EOL;
for ($i = 0; $i < $rows; $i += 1) {
    for ($j = $cols - 1; $j >= 0 ; $j -= 1) {
        if ($i == ($cols - $j-1)) {
            echo $matrix[$i][$j];
        }
    }
}
