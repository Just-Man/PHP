<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */

/*
     * Task_3
     * Задача 3: Да се изведат на екрана всички нечетни числа от -10
     * до 10
*/
for ($i = -10; $i < 10; $i++) {
    if ($i %2){
        echo $i , PHP_EOL;
    }

}