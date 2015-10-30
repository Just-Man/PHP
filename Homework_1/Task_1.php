<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.10.15
 * Time: 21:13
 */

/* *  Задача 1:
   *  Да се поиска от потребителя да въведе 3 числа A, В и С (може да са с
   *  плаваща запетая) от конзолата.
   *  Да се изведе подходящо съобщение за това дали C е между A и B.
*/

//Enter value
echo 'Enter value for A, B, C'. PHP_EOL;
$A = readline('Enter A'. PHP_EOL);
$B = readline('Enter B'. PHP_EOL);
$C = readline('Enter C'. PHP_EOL);

//Body and print
    if ($C > $A && $C < $B) {
        echo "Value of C:\"$C\" is between value A:\"$A\" and value B:\"$B\"";
    } else if ($A > $B) {
        if ($C > $B && $C > $A) {
            echo "Value of C: \"$C\" is greater than value of A:\"$A\" and  value of B:\"$B\"";
        }else if ($C < $A && $C > $B) {
            echo "Value of C: \"$C\" is smaller than value of A:\"$A\" and greater than  value of B:\"$B\"";
        }
    };
if ($C < $A) {
    echo "Value of C: \"$C\" is smaller than value of A:\"$A\"";
} else if ($C > $B) {
    echo "Value of C: \"$C\" greater than value of B:\"$B\"";
}