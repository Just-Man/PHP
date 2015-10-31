<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */
/*
Задача 17:
Да се състави програма, която извежда квадрат, чийто страни са
оформени със знака *, а вътрешността е запълнена със въведен
знак.
Входни данни b - дължина на страната число от интервала
[3..20], c - желан знак.
Програмата да използва цикъл for.
Пример: 4 +
Изход:
****
*++*
*++*
****
*/

//Enter value
$size = readline('Enter size');
$symbol = readline('Enter desire symbol');

//Body & print
for ($i = 0; $i < $size; $i +=1){
    for ($j = 0; $j <= $size; $j +=1){
        if ($i == 0 || $i == $size - 1 || $j == 0 || $j == $size){
            echo '*';
        } else {
            echo $symbol;
        }
    }
    echo PHP_EOL;
}