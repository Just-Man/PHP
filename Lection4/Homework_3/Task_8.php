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
if ($finalLen == $tempLen) {
    $temp[] = $temp[0];
    $final[] = $final[0];
    $tempLen = count($temp);
    $finalLen = count($final);
    echo 'Array 1' . ' Array 2' ,PHP_EOL;
    for ($i = 0; $i < $finalLen ; $i += 1) {
        echo  '     ' . $temp[$i] . '     ' . $final[$i] ,PHP_EOL;
    }

} else {
    $final[] = $final[0];
    $finalLen = count($final);
    echo 'Array 1' ,PHP_EOL;
    for ($i = 0; $i < $finalLen ; $i += 1) {
        echo  '   ' . $final[$i] ,PHP_EOL;
    }

}