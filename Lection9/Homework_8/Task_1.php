<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 01.12.15
 * Time: 15:25
 */

/*
Задача 1: Да се реализира по възможно най-ефективния начин
двоично търсене в двумерен масив. Да се създаде функция,
която по даден масив и елемент да извежда реда и колоната, в
която се съдържа елемента. Допълнително е дадено, че масива е
сортиран по редове и по колони.
*/

$searchElement = readline('Enter desire element');
$matrix = [
            [ 1, 2, 3, 4],
            [ 5, 6, 7, 8],
            [ 9,10,11,12],
            [13,14,15,16]
          ];
$row = 0;
$col = 0;
$rows = count($matrix);
for ($i = 0; $i < $rows ; $i += 1) {
    $cols = count($matrix[$i]);
    for ($j = 0; $j < $cols ; $j += 1) {
        $numbers[] = $matrix[$i][$j];
    }
}
$len = count($numbers);
$middle = (int) floor($len/2);
for ($i = 0; $i < $len ; $i += 1) {
    if ($searchElement == $numbers[$middle]) {
        $index = $middle;
        break;
    }
    if ($searchElement > $numbers[$middle]){
        $middle = (int) floor($middle/2) + $middle;
    } else {
        $middle = (int) $middle - floor($middle/2);
    }
}

$n = -1;
$rows = count($matrix);
for ($i = 0; $i < $rows ; $i += 1) {
    $cols = count($matrix[$i]);
    for ($j = 0; $j < $cols; $j += 1) {
        $n += 1;
        if ($n == $index) {
            $row = $i;
            $col = $j;
            break 2;
        }
    }
}
echo "Element is on position matrix[$row][$col] ";