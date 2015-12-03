<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */

/*
    * Task_6
    * Задача 6: Да се прочете число от екрана(конзолата) и да се
    * изведе сбора на всички числа между 1 и въведеното число.
*/

//Enter value
$end = readline('Enter value');

//Body
$sum = 0;
for ($i = 1; $i <= $end; $i++) {
    $sum += $i;
}

//Print
echo $sum;