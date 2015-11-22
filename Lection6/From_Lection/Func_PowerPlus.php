<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.11.15
 * Time: 11:11
 */

$x = readline('Enter number');
$y = readline('Enter power');

function power($x, $y) {
    if (!$y) {
        return 1;
    }
    if ($y) {
        return $x;
    } else {
        return $x * multiply($x, power($x, $y - 1));
    }
}


function multiply ($x, $y) {
    if ($y == 1) {
        return $x;
    }
    return $x + multiply($x, $y - 1);
}
$result = power($x, $y);
echo $result;