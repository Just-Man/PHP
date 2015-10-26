<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.10.15
 * Time: 09:20
 */

/*
   * Задача 9:
   * Да се състави програма, която получва от конзола 2 естествени
   * двуцифрени числа a,b.
   * Програмата да изведе съобщение дали последната цифра от
   * произведението на двете числа е четна, както и самата цифра.
   * Входни данни: a,b - естествени числа от интервала [10..99].
   * Пример: 15, 25
   * Изход: 375, 5 нечетна
*/

echo 'Enter two number between 10 and 99'. PHP_EOL;
$firstNumber1 = readline('Enter value of number 1'. PHP_EOL);
$firstNumber2 = readline('Enter value of number 2'. PHP_EOL);
$secondNumber1 = $firstNumber1 * $firstNumber2;
$secondNumber2 = substr($secondNumber1,-1);
if ($secondNumber2 % 2) {
    echo "The last digit of $secondNumber1 is $secondNumber2 and it si odd";
} else {
    echo "The last digit of $secondNumber1 is $secondNumber2 and it si even";
}
