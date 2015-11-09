<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 08.11.15
 * Time: 18:20
 */

/*
    * Задача 7:
    * Напишете програма, която първо чете масив и после създава нов
    * масив със същия размер по следния начин: стойността на всеки
    * елемент от втория масив да е равна на сбора от предходния и
    * следващият елемент на съответния елемент от първия масив.
    * Да се изведе получения масив.
    * Въведете размер на масива: 4
    * Въведете елементите на масива:
    * 2
    * 3
    * -11
    * 7
    * Полученият масив е: {3, -9, 10, -11}
*/

$end = readline('Enter length of array');
$newArray = [];
for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);

//Body
    $numbers[] = $number;

}
for ($i = 0; $i <$end ; $i += 1) {
    if ($i == 0) {
        $newNumbers[] = $numbers[$end - 1] + $numbers[1];       //Въпреки, че не е по задание при прърви елемент събираме 2-ри с последен
    } else if ($i == ($end - 1)) {
        $newNumbers[] = $numbers[$end - 2] + $numbers[0];
    } else {
        $newNumbers[] = $numbers[$i - 1] + $numbers[$i +1];     //събираме предпоследен с първи
    }

//    Print
    echo $newNumbers[$i] . ' ';
}

