<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.10.15
 * Time: 21:42
 */

/* * Задача 3:
   * Създайте 2 променливи с различни стойности в даден PHP скрипт.
   * Измислете начин програмно да размените стойностите им.
   * Разпечатайте новите стойности.
*/

echo 'Enter value for Value 1 and Value 2'. PHP_EOL;
$var1 = readline('Enter value 1'. PHP_EOL);
$var2 = readline('Enter value 2'. PHP_EOL);
$mem1 = $var1;
$mem2 = $var2;
$var1 = $mem2;
$var2 = $mem1;

echo "New value of value 1 is: $var1", PHP_EOL;
echo "New value of value 2 is: $var2", PHP_EOL;
