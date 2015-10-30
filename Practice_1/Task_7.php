<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 29.10.15
 * Time: 11:39
 */
/*
    * Task7. Write a program that reads numbers A, B and C. A must be short. B and C must be < 7. The
    * program has to invert the bits from number A on positions B and C. Print the new value of A.
*/
$a = readline('Enter A' , PHP_EOL);
$b = readline('Enter B (must be < 7)' , PHP_EOL);
$c = readline('Enter C (must be < 7)' , PHP_EOL);
$binaryNumber = 0;
while ($a >= 1) {
    if (!$binaryNumber){
        $binaryNumber = $a % 2;
    } else {
        $binaryNumber = $binaryNumber . $a % 2;
    }
    $a = (int) $a / 2;
}
$a1 = $binaryNumber;
echo $binaryNumber;