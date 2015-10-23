<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.10.15
 * Time: 22:20
 */

/* * Задача 5:
   * Въведете 3 различни числа от конзолата и ги разпечатайте в
   * низходящ ред
*/

$var1 = readline('Enter value 1'. PHP_EOL);
$var2 = readline('Enter value 2'. PHP_EOL);
$var3 = readline('Enter value 3'. PHP_EOL);
if ($var1 > $var2) {
    if($var2 > $var3) {
        echo "Increasing order $var1, $var2, $var3";
    } else if ($var3 > $var2) {
        echo "Increasing order $var1, $var3, $var2";
    }

} else {
    echo "Increasing order $var2, $var1";
}