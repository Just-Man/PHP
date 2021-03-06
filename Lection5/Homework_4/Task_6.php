<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 18.11.15
 * Time: 09:43
 */

/*
    * Задача 6:
    * Имате предварително въведени стойности от естествени числа.
    * Числата са въведени в квадратна таблица с размери 6 реда и 6
    * колони.
    * Да се състави програма, чрез която се намира сумата на всички
    * елементи от редовете с четни номера: 2,4 и 6.
    * Програмата да извежда и сумата на всеки отделен ред.
 *
    * Пример:
    * 11,12,13,14,15,16,
    * 21,22,23,24,25,26,
    * 31,32,33,34,35,36,
    * 41,42,43,44,45,46,
    * 51,52,53,54,55,56,
    * 61,62,63,64,65,66
 *
    * Изход:
    * 21,22,23,24,25,26 сума 141
    * 41,42,43,44,45,46 сума 261
    * 61,62,63,64,65,66 сума 381
 *
    * Сума на елементите 783
*/

//Declaration variables
$sumRow = 0;
$totalSum = 0;

$matrix = [
            [11,12,13,14,15,16],
            [21,22,23,24,25,26],
            [31,32,33,34,35,36],
            [41,42,43,44,45,46],
            [51,52,53,54,55,56],
            [61,62,63,64,65,66]
          ];

//Enter values
$rows = readline('Enter size of matrix = ');
$cols = $rows;
/*
for ($i = 0; $i < $rows ; $i += 1) {
    for ($j = 0; $j < $cols; $j += 1) {
        $element = readline('Enter element at position [' . ($i + 1) . '][' . ($j + 1) . ']' . PHP_EOL);
        $matrix[$i][$j] = $element;
    }
}*/
//Body



for ($i = 0; $i < $rows ; $i += 1) {
    if ($i % 2) {
        for ($j = 0; $j <$cols ; $j += 1) {
                $sumRow += $matrix[$i][$j];
                echo $matrix[$i][$j] . ' ';
            }
        echo 'Sum of element on row: ' . ($i+1) . ' is: ' . $sumRow , PHP_EOL;
        }
    $totalSum += $sumRow;
    $sumRow = 0;
}
echo 'Total sum by all even row is: ' . $totalSum;