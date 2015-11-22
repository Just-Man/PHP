<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.11.15
 * Time: 10:37
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
        return $x * power($x, $y - 1);
    }
}
$result = power($x, $y);
echo $result;
