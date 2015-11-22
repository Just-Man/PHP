<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 10.11.15
 * Time: 11:44
 */


$matrix =
    [
        [1, 4, 7],
        [2, 5, 8],
        [3, 6, 9],
    ];

$mul = 1;

$len = count($matrix);

for ($i = 0; $i < $len ; $i += 1) {
    for ($j = 0; $j < $i ; $j += 1) {
        if ($i > $j) {
            $mul *= $matrix[$i][$j];
            echo $matrix[$i][$j] . ', ';
        }
    }
    echo PHP_EOL;
}

echo $mul;

for ($i = 1; $i < $len ; $i  += 1) {

}