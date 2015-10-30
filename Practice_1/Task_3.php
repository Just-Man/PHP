<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 29.10.15
 * Time: 10:44
 */

/*
    * Task3. Write a program that prints all numbers from A to B that can be divided by 3. A and B - from
    * operator from console. Numbers must be in ascending order.
*/
$a = readline('Enter A');
$b = readline('Enter B');
$a = min($a, $b);
$b = max($a, $b);
for (; $a < $b; $a++) {
    if (!($a % 3)) {
     echo $a , PHP_EOL;
    }
}