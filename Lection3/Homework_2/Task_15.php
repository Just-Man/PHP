<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */

/*
Задача 15: Да се състави програма, която да изчисли сумата на всички
числа от 1 до въведено число N.
Пример: 5
Изход: 15
*/

//Enter value
$number = readline('Enter number');

//Body
$i = 0;
$sum = 0;
while ($i < $number) {
    $i += 1;
    $sum += $i;
}

//Print result
echo $sum;
