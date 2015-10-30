<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 27.10.15
 * Time: 10:19
 */
// floor - Винаги закръгля на долу (floor - като под или основа )
//ceil - Винаги закръгля на горе

$number = readline('Enter the number' . PHP_EOL);
$reversed = 0;

while ($number > 0){
    $reversed *= 10;
    $reversed += $number % 10;
    $number = floor($number / 10);
}

var_dump($number, $reversed);
