<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.11.15
 * Time: 09:57
 */
/*
Задача 3:
Да се състави програма, която проверява дали: предварително
въведен масив от естествени числа е сортиран във възходящ ред.
Програмата да извежда съобщения и в двата случая.
Пример:
1 3 5 7 9 11 10
Изход:
11 > 10
Елементите на масива не са сортирани.
*/

$numbers = [1, 3, 5, 7, 9, 11, 10];
$sorted = true;

$len = count($numbers) - 1;
for ($i = 0; $i < $len ; $i += 1) {
    if ($numbers[$i] > $numbers[$i + 1]) {
        echo $numbers[$i] . '>' . $numbers[$i + 1];
        $sorted = false;
        break;
    }
}
if ($sorted) {
    echo 'Array is sorted';
}