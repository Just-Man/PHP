<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 08.11.15
 * Time: 11:07
 */

/*
    * Задача 6:
    * Напишете програма, която първо чете 2 масива и после извежда
    * съобщение дали са еднакви, и дали са с еднакъв размер.
    * Въведете елементите на първия масив:
    * 13,2,7
    * Въведете елементите на втория масив:
    * 13,5,7
    * Масивите са различни.
    * Масивите имат еднакъв размер.
*/


$end1 = readline('Enter length of array 1');
$end2 = readline('Enter length of array 2');
$numbers1 = [];
$numbers2 = [];
$same = null;
//Body
if ($end1 !== $end2) {
    echo 'Arrays are not the same' , PHP_EOL;
    echo 'First array length is: ' . ($end1 - 1) , PHP_EOL;
    echo 'Second array length is: ' . ($end2 - 1) , PHP_EOL;
} else {
    for ($i = 0; $i < $end1 ; $i += 1) {
        $number1 = readline('Enter element ' . ($i + 1) . ' of array 1' . PHP_EOL);
        $numbers1[] = $number1;
    }
    for ($i = 0; $i < $end2 ; $i += 1) {
        $number2 = readline('Enter element ' . ($i + 1) . ' of array 2' . PHP_EOL);
        $numbers2[] = $number2;
    }
    $len = $end1;
    for ($i = 0; $i < $len ; $i += 1) {
        if ($numbers1[$i] !== $numbers2[$i]) {
            break;
        }
        $same = 1;
    }

}
if ($same) {
        echo 'Arrays are the same';
}




