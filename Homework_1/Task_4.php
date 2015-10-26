<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.10.15
 * Time: 21:46
 */

/* * Задача 4:
   * Въведете 2 различни числа от конзолата и ги разпечатайте в
   * нарастващ ред
*/
echo 'Enter value for Value 1 and Value 2'. PHP_EOL;
$var1 = readline('Enter value 1'. PHP_EOL);
$var2 = readline('Enter value 2'. PHP_EOL);
if ($var1 < $var2) {
    echo "Increasing order is: $var1, $var2";
} else{
    echo "Increasing order is: $var2, $var1";
}