<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.10.15
 * Time: 21:50
 */

/* * Задача 5:
   * Въведете 3 различни числа от конзолата и ги разпечатайте в
   * низходящ ред
*/

echo 'Enter value for Value 1, Value 2 and Value 3'. PHP_EOL;
$var1 = readline('Enter Value 1'. PHP_EOL);
$var2 = readline('Enter Value 2'. PHP_EOL);
$var3 = readline('Enter Value 3'. PHP_EOL);
if ($var1 > $var2) {
    if($var2 > $var3) {
        echo "Decreasing order is: $var1, $var2, $var3";
    } else if ($var3 > $var2) {
        echo "Decreasing order is: $var1, $var3, $var2";
    }
} else if ($var2 > $var1){
    if($var3 > $var2) {
        echo "Decreasing order is: $var3, $var2, $var1";
    } else if ($var3 > $var1) {
        echo "Decreasing order is: $var2, $var3, $var1";
    }
}