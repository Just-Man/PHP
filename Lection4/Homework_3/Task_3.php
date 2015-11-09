<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 08.11.15
 * Time: 10:24
 */
/*
    * Задача 3:
    * Да се въведе число, след което да се създаде масив с 10
    * елемента по следния начин:
    * Първите 2 елемента на масива са въведеното число.
    * Всеки следващ елемент на масива е равен на сбора от
    * предишните 2 елемента в масива.
    * След това изведете масива .
    * Въведете число: 1
    * 1 1 2 3 5 8 13 21 34 55
*/

$end = readline('Enter length of array');
$number = readline('Enter number' . PHP_EOL);
//Body
for ($i = 0; $i < $end ; $i += 1) {
    if ($i <= 1){
        $numbers[] = $number;
    } else {
        $numbers[] = ($numbers[$i - 2] + $numbers[$i - 1]);
    }
    echo $numbers[$i] . ' ';
}

