<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.11.15
 * Time: 10:42
 */

/*
    * Задача 2:
    * Да се състави програма, която изчислява произведение на две
    * естествени числа =>2, като се използва само събиране.
    * Входни данни: 2 естествени числа.
 *
    * Пример: 4, 5
    * Изход: 20
*/

function multiSum($n, $m) {
    if ($m == 0) { return 0;}
	if ($m == 1) { return $n;}
    if ($m < 0) {
        return ($n * -1 + multiSum($n, $m + 1));
    } else {
        return $n + multiSum($n, $m - 1);
    }
}
$sum = multiSum(5, -5);

echo $sum;