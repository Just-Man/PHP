<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.10.15
 * Time: 10:20
 */

/*
    * Задача 13:
    * Да се състави програма, която да отгатне колко е студено/топло по
    * въведената температура t в градус Целзий.
    * Температурните интервали са:
    * под -20 ледено студено;
    * между 0 и -20 - студено;
    * между 15 и 0 - хладно;
    * между 25 и 15 - топло;
    * над 25 – горещо.
    * Входни данни: цяло число от интервала [-100..100].
    * Пример: 12
    * Изход: хладно
*/


echo 'Enter  the desired temperature' . PHP_EOL;                     //This row is unnecessary I used it for visualization in PhpStorm Console
$temp = readline('Enter temperature');
if ($temp < -20) {
    echo 'Ice-cold';
} else if ($temp > -20 && $temp < 0) {
    echo 'Cold';
} else if ($temp > 0 && $temp < 15) {
    echo 'Coldly';
} else if ($temp > 15 && $temp < 25) {
    echo 'Warm';
} else if ($temp > 25) {
    echo 'Hot';}
