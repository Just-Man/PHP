<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */
/*
    * Задача 14: Да се състави програма, която по въведено
    * естествено число N от интервала [10..200] извежда в обратен
    * ред всички числа, които са кратни на 7 и са по-малки от N.
*/

//Enter value
do{
    $number = readline('Enter number');
} while ($number < 10 || $number > 200);

//Body & print
for ($i = $number; $i > 0; $i -= 1) {
    if (!($i % 7)) {
        echo $i , PHP_EOL;
    }
}

