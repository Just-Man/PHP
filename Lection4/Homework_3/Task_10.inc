<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 08.11.15
 * Time: 19:09
 */

/*
    * Задача 10:
    * Да се състави програма, чрез която се въвеждат 7 цели числа в
    * едномерен масив.
    * Програмата да изведе числото, което е най-близко до средната
    * стойност на въведените числа.
    * Пример: 1,2,3,4,5,6,7
    * Изход: средна стойност 4, най-близка стойност 4
*/

//Declaration of variables
$sum = 0;
$average = 0;
$min = 0;

//Enter values
$end = readline('Enter length of array');
for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);

//Body
    $numbers[] = $number;
    $sum += $number;
    $average = round($sum / $end);
}
for ($i = 0; $i < $end ; $i += 1) {
    if ($i >= 1){
        $prev = abs($average - $numbers[$i -1]);
        $current = abs($average - $numbers[$i]);
        if ($prev > $current ) {
            $min = $numbers[$i];
        }
    } else {
        $min = $numbers[$i];
    }
}

echo 'Average is: ' . $average . ' ' . $min;