<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 09.11.15
 * Time: 12:42
 */

/*
    * Задача 17:
    * Една редица от естествени числа ще наричаме зигзагообразна нагоре,
    * ако за елементите и са изпълняват условията:
    * N1 < N2 > N3 < N4 > N5 <..
    * Съставете програма, която проверява дали въведени в едномерен
    * масив редица от числа изпълняват горните изисквания.
    * Пример: 1 3 2 4 3 7
    * Изход: изпълнява изискванията за зигзагообразна нагоре редица
*/

//Declaration
$upside = 0;
$downside = 0;

//Enter Values
$end = readline('Enter length of array');
/*
for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);
    $numbers[] = $number;
}*/
//Body
$numbers = [1, 3, 2, 4, 3, 7];
for ($i = 0; $i < $end; $i += 1) {
    if ($i >= 2) {
        if ($numbers[$i - 2] < $numbers[$i - 1] && $numbers[$i - 1] > $numbers[$i]){
            $upside +=1;
        } else if ($numbers[$i - 2] > $numbers[$i - 1] && $numbers[$i - 1] < $numbers[$i]){
            $downside +=1;
        }
    }
}
if ($upside >= $downside) {
    echo 'Поредицата изпълнява изискванията за зигзагообразна нагоре редица';
} else {
    echo 'Поредицата не изпълнява изискванията за зигзагообразна нагоре редица';
}