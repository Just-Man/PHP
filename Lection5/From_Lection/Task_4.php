<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 10.11.15
 * Time: 10:35
 */

$end = readline('Enter length of array');
/*
for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);
    $numbers[] = $number;
}*/

$numbers = [0, 1, 0, 0, 1, 0];

//Body
for ($i = 0; $i < $end; $i += 1) {
    for ($j = 0; $j < $end ; $j += 1) {
        if ($numbers[$i] < $numbers[$j]) {
            $mem = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $mem;
        }
    }
}

for ($i = 0; $i < $end ; $i += 1) {
    echo $numbers[$i] . ', ';
}