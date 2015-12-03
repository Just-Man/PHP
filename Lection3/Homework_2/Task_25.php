<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */
/*
Задача 25:
Да се направи програма, която по дадено число N, да изчислява
N!, т.е. 1*2*3*4...*N.
Пример: 5
Изход: 120
Използвайте цикъл do-while.
*/

//Enter number value
$number = readline('Enter number');

//Body & print
$i = 1;
$sum = 1;
while ($i <= $number) {
    $sum *= $i;
    $i += 1;
}

echo $sum;