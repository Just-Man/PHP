<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 03.11.15
 * Time: 11:40
 */

$i = 0;
$max = 0;
$end = 1;
do {
    $element = readline('Enter element');
    $arrays[$i] = $element;
    $i += 1;
    if ($element == '' || !$element) {
        $end = 0;
    }
} while ($end);
echo "end";

while ($j < $len) {
    $j += 1;
    $arrays;}