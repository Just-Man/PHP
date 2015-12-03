<?php
/*
 * Created by PhpStorm.
 * User: just
 * Date: 22.10.15
 * Time: 09:14
 */

$a = 1;
$b = 2;
echo $a + $b, PHP_EOL;

$v1 = 30;
$v2 = 50;
$v3 = 50000;
$time = 0;
    while ($v3 > 0) {
        $v3 = ($v3 + $v1) - $v2;
        $time += 1;
    }
echo $time/60 . ' minutes', PHP_EOL;
$str1 = 'Hello';
$str2 = 'World';
$c = $str1 . ' ' .$str2.'!';
echo $c, PHP_EOL;

$name = 'Rumi';
echo "Hello $name !", PHP_EOL;

$x = 3234;
$y = 1234;
$z = -1234;

$xyz = $x. ' ' . $y . ' ' . $z;
echo $xyz, PHP_EOL;

$floatX = 0.1;
$floatY = 0.2;

echo $floatX + $floatY, PHP_EOL;
var_dump($xyz);

$input1 = readline('Enter X'. PHP_EOL);
$input2 = readline('Enter Y'. PHP_EOL);

echo $input1 + $input2, PHP_EOL;