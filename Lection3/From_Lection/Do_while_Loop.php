<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 27.10.15
 * Time: 10:46
 */

$number = 0;

do {
    $number = readline('Enter a number > 0 and < = 10' . PHP_EOL);
} while ($number <= 0 || $number >= 10);
echo 'You entered: ' ,$number;