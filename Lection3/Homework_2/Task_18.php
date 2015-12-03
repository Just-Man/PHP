<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */
/*
Задача 18:
Да се състави програма, чрез която се въвежда две числа от
интервала [1..9].
Програмата да извежда таблицата за умножение.
Максималната стойност на множителите е определена от 2-те
числа.
Пример: 2 2
Изход:
1*1= 1;
1*2= 2;
2*1= 2;
2*2= 4;
*/


//Enter value
$digit1 = readline('Enter digit 1');
$digit2 = readline('Enter digit 2');

//Body & print
for ($i = 1; $i <= $digit1; $i += 1) {
    for ($j = 1; $j <= $digit2; $j += 1) {
        echo $i . ' * ' . $j . ' = ' . $i*$j , PHP_EOL;
    }
}