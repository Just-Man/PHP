<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 09.11.15
 * Time: 14:27
 */

/*
Задача 18:
Дадени са два едномерни масива с естествени числа.
Да се състави програма, която сравнява всички числа с еднакви
индекси от двата масива и записва в трети масив, по-голямото от
двете числа.
Да се изведе съдържанието и на трите масива
Пример:
18,19,32,1,3, 4, 5, 6, 7, 8
1, 2, 3,4,5,16,17,18,27,11
Изход:
18,19,32 ,4,5,16,17,18,27,11
*/


$end1 = readline('Enter length of array 1');
$end2 = readline('Enter length of array 2');
/*$numbers1 = [];
$numbers2 = [];
*/
$newNumbers = [];
/*
//Body

for ($i = 0; $i < $end1 ; $i += 1) {
    $number1 = readline('Enter element ' . ($i + 1) . ' of array 1' . PHP_EOL);
    $numbers1[] = $number1;
}
for ($i = 0; $i < $end2 ; $i += 1) {
    $number2 = readline('Enter element ' . ($i + 1) . ' of array 2' . PHP_EOL);
    $numbers2[] = $number2;
}*/
$number1 = [18,19,32,1,3, 4, 5, 6, 7, 8];
$number2 = [1, 2, 3,4,5,16,17,18,27,11];

$short = min($end1, $end2) - 1;
$len = max($end1, $end2) - 1;
for ($i = 0; $i <= $len; $i += 1) {
    if ($short >= $i) {
        if ($number1[$i] <= $number2[$i]) {
            $newNumbers[] = $number2[$i];
        } else {
            $newNumbers[] = $number1[$i];
        }

    } else {
        if ($end1 < $end2) {
            $newNumbers[] = $number2[$i];
            } else if ($end1 > $end2) {
            $newNumbers[] = $number1[$i];
        }
    }
}

foreach ($number1 as $value) {
    echo $value . ', ';
}
echo PHP_EOL;
foreach ($number2 as $value) {
    echo $value . ', ';
}
echo PHP_EOL;
foreach ($newNumbers as $value) {
    echo $value . ', ';
}
