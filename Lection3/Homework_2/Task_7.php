<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */
/*
    * Task_7
    * Задача 7: Започвайки от 3, да се изведат на екрана първите n
    * числа които се делят на 3. Числата да са разделени със запетая.
*/

//Enter value
$n = readline('Enter n');
$end = $n * 3;

//Body
for ($i = 1; $i <= $end; $i++) {
    if (!($i % 3)) {
        echo $i . ', ';
    }

}