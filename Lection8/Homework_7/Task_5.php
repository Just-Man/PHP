<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.11.15
 * Time: 10:56
 */
/*
Задача 5:
Да се състави програма, която по даден масив, който е сортиран във
възходящ ред и даден елемент вмъква елемент на правилното му
място. Като резултат да се получи нов масив и да се изведе.
Пример:
1 3 5 7 9 11 45
6
Изход:
1 3 5 6 7 9 11 45
Чрез рекурсия
*/

$numbers = [1, 3, 5, 7, 9, 11, 45];
$number = readline('Enter number');
$number = (int) $number;
$len = count($numbers);
 function add ($number, $numbers, $len) {
     $newNumbers = [];
     if ($len == 0 ) {return $newNumbers;}
     for ($i = 0; $i < $len ; $i += 1) {
         if ($number > $numbers[$i] && $number < $numbers[$i + 1]) {
             $newNumbers[] = $numbers[$i];
             $newNumbers[] = $number;
         } else {
             $newNumbers[] = $numbers[$i];
         }
     }
     return add($number, $numbers, $len - 1);
 }
$num = add ($number, $numbers, $len);
print_r($num);