<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 27.10.15
 * Time: 11:08
 */

/*for ($counter = 1; $counter <= 20; $counter++) {
    echo 'Counter is: ' , $counter , PHP_EOL;
}

var_dump($counter);*/

/*for ($x = 0; $x < 3; $x++){
    for ($y = 0; $y < 3; $y++){
        echo '[', $x, '][', $y, '] ';
    }
    echo PHP_EOL;
    echo PHP_EOL;
}*/
//break 2 - Спира нивото на което е и нивото над него
//min($value1, $value2) - Извежда винаги най-малката от променливите
//max($value1, $value2) - Извежда винаги най-голямата от променливите

$i = readline('Enter start number');
$j = readline('Enter end number');
for (; min($i, $j) <= max($i, $j); $i++) {
    if (!($i % 7) && $i > 7) {
        echo $i;
        break;
    }
}

$i = readline('Enter start number');
$j = readline('Enter end number');
for (; min($i, $j) <= max($i, $j); $i++) {
    if ($i % 7) {
        continue;
    }
    $number = floor($i / 10);
    if ($number % 2)
    echo $i;
}