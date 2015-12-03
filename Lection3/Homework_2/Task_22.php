<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */

/*
    * Задача 22:
    * Да се състави програма, която извежда първите 10 най-малки
    * числа, които се делят на 2, 3 или на 5 и които са по-големи от
    * въведено естествено число.
    * Числата се извеждат, заедно с техния пореден номер.
    * Входни данни: число от интервала [1..999]
    * Пример: 1
    * Изход: 1:2; 2:3, 3:4, 4:5, 5:6, 6:8, 7:9, 8:10, 9:12, 10:14
    * Използвайте цикъл while.
*/

//Enter value
$number = readline('Enter number');

//Body & print
$counter = 0;
while ($counter !== 10) {
    if (!($number % 2)){
        $counter += 1;
        echo $counter . ':' . $number . ', ';
    } else if (!($number % 3)){
        $counter += 1;
        echo $counter . ':' . $number . ', ';
    } else if (!($number % 5)){
        $counter += 1;
        echo $counter . ':' . $number . ', ';
    }
    $number += 1;
}