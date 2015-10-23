<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.10.15
 * Time: 08:52
 */

/*
   * Задача 8:
   * Да се състави програма, която получава от конзолата 4-цифренo
   * естествено число от интервала [1000.. 9999]. От това число се
   * формират 2 нови 2-цифрени числа. Първото число се формира от 1-та
   * и 4-та цифра на въведеното число. Второто число се формира от 2-рa -
   * 3-та цифра на въведеното число. Като резултат да се изведе дали 1-то
   * ново число e по-малко <, равно = или по-голямо от 2-то число.
   * Пример: 3332 Изход: по-малко (32<33)
   * Пример: 1144 Изход: равни (14=14)
   * Пример: 9875 Изход: по-голямо (95>87)
*/

echo 'Enter number between 1000 and 9999'. PHP_EOL;
$firstNumber = readline('Enter value of number'. PHP_EOL);
$secondNumber1 = $firstNumber[0].$firstNumber[3]. PHP_EOL;
$secondNumber2 = $firstNumber[1].$firstNumber[2]. PHP_EOL;

echo "Entered number is: $firstNumber";
echo "New numbers are: $secondNumber1 and $secondNumber2";

//Second way to resolve task

/*echo 'Enter number between 1000 and 9999'. PHP_EOL;
$firstNumber = readline('Enter value of number'. PHP_EOL);
$secondNumber1 = substr($firstNumber,0, 1). substr($firstNumber, -1).PHP_EOL;
$secondNumber2 = substr($firstNumber,1, 1). substr($firstNumber, -2, 1).PHP_EOL;

echo "Entered number is: $firstNumber". PHP_EOL;
echo "New numbers are: $secondNumber1 and $secondNumber2";*/