<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 09.11.15
 * Time: 05:47
 */

/*
    Задача 11:
    Да се състави програма, която въвежда от клавиатурата 7 цели числа
    в едномерен масив
    Програмата да изведе всички числа кратни на 5, но по големи от 5.
    Пример: -23, -55, 17, 75, 56, 105, 134
    Изход: 75,105 2 числа
*/

//Declaration
$counter = 0;

//Enter value
$end = readline('Enter length of array');
for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);

//Body
    $numbers[] = $number;
}
for ($i = 0; $i < $end ; $i += 1) {
    if (!($numbers[$i] % 5) && $numbers[$i] > 5) {
        $counter += 1;

//        Print
        echo $numbers[$i] . ' ';
    }

}

echo $counter . ' numbers';

