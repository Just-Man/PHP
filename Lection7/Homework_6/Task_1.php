<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.11.15
 * Time: 09:45
 */

/*
    * Задача 1:
    * Да се състави програма, която изчислява N-тото число на Фибоначи.
    * Първото и второто число на Фибоначи са 1-ци, всяко следващо е равно
    * на сбора на предходните 2.
 *
    * Пример: 8
    * Изход: 21
*/

//Enter values
$n = readline('Enter number');

//Body
function fibo ($n) {
    if ($n <= 0 ) { return 0;}
    if ($n == 1 ) { return 1;}
    return fibo($n - 1) + fibo($n - 2);
}
$number = fibo($n);

//Print
echo $number;