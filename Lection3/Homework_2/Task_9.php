<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */

/*
    * Задача 9: Да се прочетат 2 числа от клавиатурата А и В.
    * Да се изведат всички числа от А до В на степен 2(разделени с
    * запетая).Ако някое число е кратно на 3, да се изведе съобщение че
    * числото се пропуска „skip 3“.Ако сумата от всички изведени числа (без
    * пропуснатите) стане по-голяма от 200, да се прекрати извеждането.
    *
*/

//Enter value
$a = readline('Enter value for A');
$b = readline('Enter value for B');

//Body
$start = min($a, $b);
$end = max($a, $b);
$sum = 0;

for (; $start < $end; $start +=1) {
    if (!($start % 3)) {
        echo 'skip' . $start . ', ';
    } else {
        echo($start*$start) . ', ';
        $sum += ($start*$start);
    }
    if ($sum > 200) {
        break;
    }
}