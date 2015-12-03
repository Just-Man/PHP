<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 26.11.15
 * Time: 09:11
 */


/*
Задача 13:
Да се създаде метод, който приема два масива от числа и връща
масив, съдържащ всички елементи на подадените масиви, като в
първата част на масива са елементите на първия подаден масив,
а във втората част – тези на втория подаден масив.
*/


$a = [1,2,3];
$b = [4,5,6];

function mergeArray ($a,$b) {
    $lenA = count($a) - 1;
    $lenB = count($b) - 1;
    $len = $lenA;
    $count = 0;
    $c = [];
    for ($i = 0; $i <= $len ; $i += 1) {
        if (!$count) {
            if ($i < $len) {
                $c[] = $a[$i];
            } else if ($i == $len ) {
                $c[] = $a[$i];
                $count += 1;
                $len = $lenB;
                $i = -1;
            }

        } else {
            $c[] = $b[$i];
    }

    }
    return $c;
}
$new = mergeArray ($a,$b);
print_r($new);