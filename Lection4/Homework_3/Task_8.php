<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 05.11.15
 * Time: 21:26
 */

/*
Задача 8:
Напишете програма, която намира и извежда най-дългата редица от
еднакви поредни елементи в даден масив.
Пример:
Въведете елементите на масива:
2,1,1,2,3,3,2,2,2,1
Максималната редица е: 2 2 2
*/

//Declaration variables
$numbers = [];
$temp = [];
$final = [];
$tempLen = 0;
$finalLen = 0;


//Enter value &n body
$end = readline('Enter number of desire elements');
for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element of array');
    $numbers[] = $number;
    if ($i >= 1) {
        if ($numbers[$i] === $numbers[$i - 1]) {
            $temp[] = $numbers[$i];
        } else {
            $tempLen = count($temp);
            if ($tempLen > 0){
                $finalLen = count($final);
                if ($finalLen < $tempLen) {
                    $final = $temp;
                    $temp = [];
                } else {
                    $temp = [];
                    }
            }
        }
    }
}
$final[] = $final[0];
print_r($temp);
print_r($final);