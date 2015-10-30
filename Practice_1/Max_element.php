<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 29.10.15
 * Time: 10:18
 */


//Task Max number

$number = 0;
$max = 0;

do {
    $number = readline('Number');
    if ($max > $number) {
        $max = $number;
    }
} while (!$number);

echo 'Max value is: ' . $max;