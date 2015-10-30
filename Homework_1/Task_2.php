<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.10.15
 * Time: 21:31
 */

/* *  Задача 2:
   * Въведете 2 различни целочислени числа от конзолата. Запишете
   * тяхната сума, разлика, произведение, остатък от деление и
   * целочислено деление в отделни променливи и разпечатайте тези
   * резултати.
*/

//Enter value
echo 'Enter value for A, B'. PHP_EOL;
$A = readline('Enter A'. PHP_EOL);
$B = readline('Enter B'. PHP_EOL);

//Body
$sum = $A + $B;
$deduction = $A - $B;
$multiply = $A * $B;
$divide = $A / $B;
$divide1 = $A % $B;

//Print
echo "The Sum of A + B is: $sum". PHP_EOL;
echo "The deduction of A - B is: $deduction". PHP_EOL;
echo "The multiply of A - B is: $multiply". PHP_EOL;
echo "The divide of A - B is: $divide". PHP_EOL;
echo "The divide with rest of A - B is: $divide1". PHP_EOL;
