<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 10.11.15
 * Time: 11:36
 */


$matrix =
    [
        [1, 4, 7],
        [2, 5, 8],
        [3, 6, 9],
    ];
$len = count($matrix);
for ($i = 0; $i < $len ; $i += 1) {
    echo $matrix[$i][$i] , PHP_EOL;
}

$len = count($matrix);
for ($i = 0; $i < $len ; $i += 1) {
    for ($j = 0; $j < $len ; $j += 1) {
        if ($i == $j) {
            echo $matrix[$i][$j], PHP_EOL;
        }
    }
}

