<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 08.11.15
 * Time: 11:03
 */

/*
    * Задача 5:
    * Напишете програма, която създава масив с 10 елемента и
    * инициализира всеки от елементите със стойност равна на индекса на
    * елемента умножен по 3.
    * Да се изведат елементите на екрана.
*/


$end = readline('Enter length of array');
$newArray = [];
for ($i = 0; $i < $end ; $i += 1) {

//Body
    $numbers[] = $i * 3;
    echo $numbers[$i] . ' ';
}
