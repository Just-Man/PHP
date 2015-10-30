<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.10.15
 * Time: 10:23
 */

/*
    * Задача 15:
    * Да се състави програма, която въвежда естествено число от интервала
    * [0..24].
    * Програма да изведе съответстващо съобщение съобразно въведения
    * час.
    * Периодите са:
    * [18..4] - Добър вечер;
    * [4..9] - Добро утро;
    * [9..18] - Добър ден
    * Пример: 10
    * Изход: Добър ден
*/

//Enter value
echo 'Enter  the desired hour in interval 0 - 24'. PHP_EOL;        //This row is unnecessary I used it for visualization in PhpStorm Console
$temp = readline('Enter hour');

//Body & print
if ($temp > 18 && $temp < 4) {
    echo 'Good evening';
} else if ($temp > 4 && $temp < 9) {
    echo 'Good morning';
} else if ($temp > 9 && $temp < 18) {
    echo 'Good day';
}