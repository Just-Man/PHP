<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.10.15
 * Time: 08:10
 */

/* * Задача 6:
   * Въведете 3 числа от конзолата - а1, а2 и а3. Разменете стойностите им
   * така, че а1 да има стойността на а2, а2 да има стойността на а3, а а3
   * да има старата стойност на а1.
*/


//Enter value
echo 'Enter value for a1, a2 and a3'. PHP_EOL;
$a1 = readline('Enter value of a1'. PHP_EOL);
$a2 = readline('Enter value of a2'. PHP_EOL);
$a3 = readline('Enter value of a3'. PHP_EOL);

//Body & print
echo "Entered value of a1 is: $a1,  value of a2 is: $a2, value of a3 is: $a3". PHP_EOL;
$mem1 = $a1;
$a1 = $a2;
$a2 = $a3;
$a3 = $mem1;

echo "Changed value of a1 is: $a1,  value of a2 is: $a2, value of a3 is: $a3". PHP_EOL;
