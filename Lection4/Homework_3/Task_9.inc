<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 08.11.15
 * Time: 18:42
 */

/*
    * Задача 9:
    * Напишете програма, в която потребителя въвежда масив, след което
    * елементите на масива се обръщат в обратен ред (Целта не е масива да
    * се отпечата в обратен ред, ами първо да се обърне, след което да се
    * отпечата в нормален ред). Пробвайте да решите задачата първо с един
    * допълнителен масив и после без да използвате друг масив
 * Въведете елементите на масива:
2,3,7,-5
-5 7 3 2
*/

/*
#Resolve task with second array

//Declaration of variables
$reverseNumbers = [];

//Enter value
$end = readline('Enter length of array');

for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);

//Body
    $numbers[] = $number;
}

for ($i = ($end - 1); $i >= 0; $i -= 1) {
    $reverseNumbers[] = $numbers[$i];
}

//Print
for ($i = 0; $i < $end ; $i += 1) {
    echo $reverseNumbers[$i] . ' ';
}
*/

#Resolve task without second array

//Declaration of variables
$reverseNumbers = [];
$temp = 0;

//Enter value
$end = readline('Enter length of array');

for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);
    $numbers[] = $number;
}

//Body & print
for ($i = 0; $i < $end/2 ; $i += 1) {
    $temp = $numbers[$i];
    $numbers[$i] = $numbers[($end - 1) - $i];
    $numbers[($end - 1) - $i] = $temp;
}
for ($i = 0; $i < $end ; $i += 1) {
    echo $numbers[$i] . ' ';
}



