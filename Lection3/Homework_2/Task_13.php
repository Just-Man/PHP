<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */

/*
    * Задача 13: Да се състави програма, която извежда всички
    * естествени трицифрени числа, които имат сбор на цифрите равен
    * на дадено число.
    * Дадено : sum, където 2>=sum<=27.
    * Пример: 26
    * Изход: 899, 989, 998.
*/

//Enter value
$number = readline('Enter value between 1 and 27');

//Body & print
for ($i = 100; $i < 1000; $i +=1) {
    $thirdDigit = $i % 10;
    $secondDigit = ($i / 10) % 10;
    $firstDigit = ($i / 100) % 10;
    $sum = $firstDigit + $secondDigit + $thirdDigit;
    if ($sum == $number) {
        echo $i , PHP_EOL;
    }
}